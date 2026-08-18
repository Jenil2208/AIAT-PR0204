// Resume data and simple renderer
const resume = {
  name: 'Jenil Patel',
  role: 'Frontend Developer',
  summary: 'Creative frontend developer building accessible, responsive interfaces.',
  contact: {
    email: 'jenilpatel228@gmail.com',
    phone: '(123) 456-7890',
    location: 'City, Country',
    website: 'https://example.com'
  },
  experience: [
    {
      company: 'Acme Inc.',
      role: 'Frontend Developer',
      period: '2022 - Present',
      details: [
        'Built responsive UI components with HTML/CSS/JS',
        'Improved performance and accessibility'
      ]
    }
  ],
  education: [
    { school: 'University Name', degree: 'B.Sc. in Computer Science', period: '2018 - 2021' }
  ],
  skills: ['HTML', 'CSS', 'JavaScript', 'PHP', 'Responsive Design'],
  projects: [ { name: 'Personal Portfolio', desc: 'A responsive portfolio site showcasing projects.', link: '#' } ]
};

function el(tag, attrs = {}, text) {
  const node = document.createElement(tag);
  for (const k in attrs) node.setAttribute(k, attrs[k]);
  if (text !== undefined) node.textContent = text;
  return node;
}

function renderHeader() {
  document.getElementById('name').textContent = resume.name;
  document.getElementById('role').textContent = resume.role;
  document.getElementById('summary').textContent = resume.summary;
  const c = document.getElementById('contact');
  c.innerHTML = '';
  const mail = el('a', { href: `mailto:${resume.contact.email}` }, resume.contact.email);
  c.appendChild(mail);
  c.appendChild(document.createTextNode(' · ' + resume.contact.location + ' · '));
  const web = el('a', { href: resume.contact.website, target: '_blank' }, 'Website');
  c.appendChild(web);
}

function renderExperience() {
  const root = document.getElementById('experience');
  root.innerHTML = '';
  resume.experience.forEach(exp => {
    const card = el('article', { class: 'card' });
    const h = el('h3', {}, `${exp.role} `);
    const span = el('span', { class: 'muted' }, '@ ' + exp.company);
    h.appendChild(span);
    card.appendChild(h);
    card.appendChild(el('p', { class: 'period' }, exp.period));
    const ul = el('ul');
    exp.details.forEach(d => ul.appendChild(el('li', {}, d)));
    card.appendChild(ul);
    root.appendChild(card);
  });
}

function renderProjects() {
  const root = document.getElementById('projects');
  root.innerHTML = '';
  resume.projects.forEach(p => {
    const card = el('div', { class: 'card' });
    card.appendChild(el('h3', {}, p.name));
    card.appendChild(el('p', {}, p.desc));
    if (p.link) card.appendChild(el('p', {}, '')).appendChild(el('a', { href: p.link }, 'View'));
    root.appendChild(card);
  });
}

function renderSkills() {
  document.getElementById('skills').textContent = resume.skills.join(' · ');
}

function renderEducation() {
  const root = document.getElementById('education');
  root.innerHTML = '';
  resume.education.forEach(e => {
    const card = el('div', { class: 'card' });
    card.appendChild(el('h3', {}, e.degree));
    card.appendChild(el('p', { class: 'muted' }, `${e.school} · ${e.period}`));
    root.appendChild(card);
  });
}

function renderCopyright() {
  document.getElementById('copyright').textContent = `© ${new Date().getFullYear()} ${resume.name}.`;
}

document.addEventListener('DOMContentLoaded', () => {
  renderHeader();
  renderExperience();
  renderProjects();
  renderSkills();
  renderEducation();
  renderCopyright();
});
