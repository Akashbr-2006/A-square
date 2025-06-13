document.addEventListener('DOMContentLoaded', () => {
  const toggleBtn = document.getElementById('theme-toggle');
  const html = document.documentElement;

  const storedTheme = localStorage.getItem('theme');
  if (storedTheme === 'dark') {
    html.classList.add('dark');
    toggleBtn.textContent = '☀️';
  } else {
    html.classList.remove('dark');
    toggleBtn.textContent = '🌙';
  }

  toggleBtn.addEventListener('click', () => {
    html.classList.toggle('dark');
    const isDark = html.classList.contains('dark');
    localStorage.setItem('theme', isDark ? 'dark' : 'light');
    toggleBtn.textContent = isDark ? '☀️' : '🌙';
  });
});
