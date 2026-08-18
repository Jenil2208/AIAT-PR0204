<?php
$resume = [
    'name' => 'Your Name',
    'role' => 'Frontend Developer',
    'summary' => "Creative frontend developer building accessible, responsive interfaces.",
    'contact' => [
        'email' => 'you@example.com',
        'phone' => '(123) 456-7890',
        'location' => 'City, Country',
        'website' => 'https://example.com'
    ],
    'experience' => [
        [
            'company' => 'Acme Inc.',
            'role' => 'Frontend Developer',
            'period' => '2022 - Present',
            'details' => [
                'Built responsive UI components with HTML/CSS/JS',
                'Improved performance and accessibility'
            ]
        ],
    ],
    'education' => [
        [
            'school' => 'University Name',
            'degree' => 'B.Sc. in Computer Science',
            'period' => '2018 - 2021'
        ]
    ],
    'skills' => ['HTML', 'CSS', 'JavaScript', 'PHP', 'Responsive Design'],
    'projects' => [
        [
            'name' => 'Personal Portfolio',
            'desc' => 'A responsive portfolio site showcasing projects.',
            'link' => '#'
        ]
    ]
];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title><?php echo htmlspecialchars($resume['name']); ?> — <?php echo htmlspecialchars($resume['role']); ?></title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<header class="site-header">
    <div class="container">
        <h1><?php echo htmlspecialchars($resume['name']); ?></h1>
        <p class="role"><?php echo htmlspecialchars($resume['role']); ?></p>
        <p class="summary"><?php echo htmlspecialchars($resume['summary']); ?></p>
        <p class="contact">
            <a href="mailto:<?php echo htmlspecialchars($resume['contact']['email']); ?>"><?php echo htmlspecialchars($resume['contact']['email']); ?></a>
            &middot; <?php echo htmlspecialchars($resume['contact']['location']); ?>
            &middot; <a href="<?php echo htmlspecialchars($resume['contact']['website']); ?>" target="_blank">Website</a>
        </p>
    </div>
</header>

<main class="container">
    <section>
        <h2>Experience</h2>
        <?php foreach ($resume['experience'] as $exp): ?>
            <article class="card">
                <h3><?php echo htmlspecialchars($exp['role']); ?> <span class="muted">@ <?php echo htmlspecialchars($exp['company']); ?></span></h3>
                <p class="period"><?php echo htmlspecialchars($exp['period']); ?></p>
                <ul>
                    <?php foreach ($exp['details'] as $d): ?>
                        <li><?php echo htmlspecialchars($d); ?></li>
                    <?php endforeach; ?>
                </ul>
            </article>
        <?php endforeach; ?>
    </section>

    <section>
        <h2>Projects</h2>
        <?php foreach ($resume['projects'] as $p): ?>
            <div class="card">
                <h3><?php echo htmlspecialchars($p['name']); ?></h3>
                <p><?php echo htmlspecialchars($p['desc']); ?></p>
                <?php if (!empty($p['link'])): ?>
                    <p><a href="<?php echo htmlspecialchars($p['link']); ?>">View</a></p>
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </section>

    <section>
        <h2>Skills</h2>
        <p class="skills">
            <?php echo htmlspecialchars(implode(' · ', $resume['skills'])); ?>
        </p>
    </section>

    <section>
        <h2>Education</h2>
        <?php foreach ($resume['education'] as $edu): ?>
            <div class="card">
                <h3><?php echo htmlspecialchars($edu['degree']); ?></h3>
                <p class="muted"><?php echo htmlspecialchars($edu['school']); ?> &middot; <?php echo htmlspecialchars($edu['period']); ?></p>
            </div>
        <?php endforeach; ?>
    </section>
</main>

<footer class="site-footer">
    <div class="container">
        <p>&copy; <?php echo date('Y'); ?> <?php echo htmlspecialchars($resume['name']); ?>.</p>
    </div>
</footer>

</body>
</html>
