<div class="delete">
    <?php $note = $params['note'] ?? null; ?>
    <?php if ($note) : ?>
        <ul>
            <li> Id: <?php echo (int) $note['id'] ?> </li>
            <li>
                Tytuł: <?php echo htmlentities($note['title']) ?>
            </li>
            <li>
                Opis: <?php echo htmlentities($note['description']) ?>
            </li>
            <li>Utworzono: <?php echo htmlentities($note['created']) ?> </li>
            <li>
                <a href="/">
                    <button>Powrót do listy notatek</button>
                </a>
            </li>
            <li>
                <form method="POST" action="/?action=delete">
                    <input type="text" name="id" value="<?php echo $note['id'] ?>" hidden>
                    <input type="submit" value="usuń">
               </form>
    </li>
    </ul>
    <?php else : ?>
        <div>Brak notatki do wyświetlenia</div>
        <?php endif; ?>
    </div>
