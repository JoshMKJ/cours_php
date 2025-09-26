
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1>Gestion des Utilisateurs</h1>

  <div class="actions">
      <button onclick="window.location.href='ajouter.html'">➕ Ajouter</button>
    <input type="text" id="search" placeholder="🔍 Rechercher un utilisateur...">
  </div>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Nom d'utilisateur</th>
        <th>Email</th>
        <th>Date d'inscription</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      <!-- Exemple de données statiques pour tester -->
      <tr>
        <td>1</td>
        <td>Josue</td>
        <td>matandikojosue6@gmail.com</td>
        <td>2025-09-25</td>
        <td>
          <button class="btn-edit">✏️ Modifier</button>
          <button class="btn-delete">🗑️ Supprimer</button>
        </td>
      </tr>
      <tr>
        <td>2</td>
        <td>Alice</td>
        <td>alice@example.com</td>
        <td>2025-09-24</td>
        <td>
          <button class="btn-edit">✏️ Modifier</button>
          <button class="btn-delete">🗑️ Supprimer</button>
        </td>
      </tr>
    </tbody>
  </table>

  <script>
    // Petit script de recherche
    document.getElementById("search").addEventListener("keyup", function() {
      let filter = this.value.toLowerCase();
      let rows = document.querySelectorAll("tbody tr");

      rows.forEach(row => {
        let text = row.innerText.toLowerCase();
        row.style.display = text.includes(filter) ? "" : "none";
      });
    });
  </script>
   
</body>
</html>