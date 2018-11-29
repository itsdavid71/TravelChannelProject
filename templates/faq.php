<?php 
    $faq = [
        [
        'question' => 'Что такое Lorem Ipsum?',
        'answer' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.'
        ],
        [
        'question' => 'Почему он используется?',
        'answer' => 'Lorem Ipsum используют потому, что тот обеспечивает более или менее стандартное заполнение шаблона, а также реальное распределение букв и пробелов в абзацах.'
        ],
        [
        'question' => 'Откуда он появился?',
        'answer' => 'Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.'
        ]
    ]
?>
<?php 
    foreach($faq as $question) {
        // echo "<h3>{$question['question']}</h3>";
        
        echo "<div class='showhide'>
                <h3>{$question['question']}</h3>
                <div style='width: 300px;'> 
                    <button class='btn' style='background: white; color: black;'>Показать</button>
                    <p style='text-align: left;'>{$question['answer']}</p>
                </div>
            </div>";

    }

?>