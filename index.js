const splineViewer = document.querySelector('spline-viewer');
    
            document.addEventListener('mousemove', (event) => {
                const width = window.innerWidth;
                const height = window.innerHeight;
                const x = (event.clientX / width) * 2 - 1; 
                const y = -(event.clientY / height) * 2 + 1; 
                const rotationSpeed = 1; 
                if (splineViewer && splineViewer.camera) {
                    splineViewer.camera.rotation.x = y * rotationSpeed;
                    splineViewer.camera.rotation.y = x * rotationSpeed;
                }
            });
    
            window.onload = function() {
                const shadowRoot = document.querySelector('spline-viewer').shadowRoot;
                const logo = shadowRoot?.querySelector('#logo');
                if (logo) logo.remove();
            };