        </main>
    </div>
    <!-- Simple Scripts -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
             console.log('formPHP Dashboard Loaded');
             // Add hover interaction or something simple
             const header = document.querySelector('.main-header');
             window.addEventListener('scroll', () => {
                 if (window.scrollY > 20) {
                     header.classList.add('scrolled');
                 } else {
                     header.classList.remove('scrolled');
                 }
             });
        });
    </script>
</body>
</html>
