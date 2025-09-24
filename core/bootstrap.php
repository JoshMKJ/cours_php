<?php

$config = require 'config.php';

require 'core/database/connection.php';

require 'core/database/queryBuilder.php';

require 'core/Router.php';

return new QueryBuilder(
   $pdo = connection::make($config['database'])
);
  

