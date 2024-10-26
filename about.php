<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Website</title>
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    <div class="wrapper">
       <?php require_once "blocks/header.php"; ?>

        <div class="hero-about container">
            <div class="info">
                <h1>Создание игрового опыта нового уровня</h1>
                <p>Мы специализируемся на создании захватывающих, ультрасовременных игр, которые увлекают игроков и устанавливают новые стандарты в индустрии. Наша страсть к разработке игр побуждает нас обеспечивать исключительное качество от разработки концепции до запуска.</p>
                <button class="btn">Связаться</button>
            </div>
            <img src="/img/about-banner.png" alt="">
        </div>

        <div class="container work">
            <h2>Почему Стоит Работать С Нами</h2>
            <div class="blocks">
                <div class="block">
                    <span class="badge purple">Группа экспертов</span>
                    <h3>Опытные разработчики</h3>
                    <p>Наша команда состоит из опытных профессионалов, увлеченных разработкой игр. Мы воплощаем ваше видение в жизнь, сочетая креативность, технологии и преданность делу.</p>
                </div>
                <div class="block">
                    <span class="badge brown">Инновационные решение</span>
                    <h3>Самые современные технологии</h3>
                    <p>Мы используем новейшие инструменты и технологии для создания высококачественных игр на нескольких платформах, каждый раз обеспечивая исключительный пользовательский опыт.</p>
                </div>
                <div class="block">
                    <span class="badge green">Надежная поддержка</span>
                    <h3>Клиентоориентированный подход</h3>
                    <p>Мы уделяем первостепенное внимание вашим потребностям и предлагаем постоянную поддержку, чтобы обеспечить успех вашей игры на конкурентном рынке. Мы стремимся к тому, чтобы вы были довольны.</p>
                </div>
            </div>
        </div>
    </div>
    <?php require_once "blocks/footer.php"; ?>
    
</body>

</html>