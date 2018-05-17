

<h2>Listagem de Categorias </h2>

    <table>
        <thead id="sexta">
            <th> #</th>
            <th>nome categoria</th>
        </thead>
        <tbody id="quinta">
        <?php foreach ($categorias as $categoria):?>
            <tr>
                <td><?= $categoria->getId()?></td>
                <td><a href="?acao=show&id=<?= $categoria->getId()?>"><?= $categoria->getNome()?></a></td>
            </tr>
        <?php endforeach;?>
        </tbody>
    </table>
































</html>