# Blog con CakePHP 3


Migraciones
-------------

Para crear una migración
```bash
bin/cake bake migration CreateProducts
```

Para agregar columnas a una tabla
```bash
bin/cake bake migration AddPriceToProducts
```

Para eliminar columnas a una tabla
```bash
bin/cake bake migration RemovePriceFromProducts price
```

Para ejecutar las migraciones
```bash
bin/cake migrations migrate
```

Para revertir una migración
```bash
bin/cake migrations rollback
```

Para crear una migración de una base de datos existente
```bash
bin/cake bake migration_snapshot Initial
```