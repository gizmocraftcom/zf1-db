# Changelog

## 2.0.0

Fork of `diablomedia/zendframework1-db`, published as `gizmocraft/zendframework1-db`.

### Breaking changes

- Requires PHP `>=8.5`. Tested on PHP 8.5 and 8.6.
- Package renamed from `diablomedia/zendframework1-db` to `gizmocraft/zendframework1-db`. It now requires `gizmocraft/zendframework1-exception` `^2.0.0`, `gizmocraft/zendframework1-config` `^3.0.0`, `gizmocraft/zendframework1-loader` `^2.0.0`, `gizmocraft/zendframework1-registry` `^2.0.0` and `gizmocraft/zendframework1-cache` `^2.0.0`.
- Removed `Zend_Db_Profiler_Firebug` and its tests. The class depends on the Wildfire component (`zendframework1-wildfire`), which is not part of the gizmocraft forks, so it cannot work any more. The `zendframework1-wildfire` requirement is dropped. Use `Zend_Db_Profiler` or a custom profiler subclass instead.

### PHP 8.6 fixes

- `Zend_Db_Statement_Pdo` uses `is_int()` instead of `is_integer()` (the alias is deprecated in PHP 8.6).

- `Zend_Db_Adapter_Pdo_Pgsql::describeTable()` reads column defaults with `pg_get_expr(d.adbin, d.adrelid)` instead of `pg_attrdef.adsrc`. The `adsrc` column was removed in PostgreSQL 12, so describeTable (and everything built on it, such as `Zend_Db_Table`) failed on current PostgreSQL. Verified against PostgreSQL 17.

### Adapters that need an extension (kept, not removed)

- `Zend_Db_Adapter_Oracle` (oci8), `Zend_Db_Adapter_Pdo_Oci`, `Zend_Db_Adapter_Db2` (ibm_db2), `Zend_Db_Adapter_Pdo_Ibm`, `Zend_Db_Adapter_Sqlsrv` (sqlsrv), `Zend_Db_Adapter_Pdo_Mssql` and the matching statement classes are unchanged. The code was reviewed for PHP 8.5 and 8.6 deprecations and none were found. Their tests need the extensions and a database server, so they are skipped unless enabled in `tests/TestConfiguration.php`.
- `Zend_Db_Adapter_Pdo_Pgsql` is unchanged. Its tests run when a PostgreSQL server is configured (CI service) and pass against PostgreSQL 17 on PHP 8.5 and 8.6.
- `Zend_Db_Adapter_Mysqli`, `Zend_Db_Adapter_Pdo_Mysql` and `Zend_Db_Adapter_Pdo_Sqlite` were tested against MySQL 8.4 and SQLite on PHP 8.5 and 8.6.

### Other changes

- Dev dependencies upgraded (PHPUnit 13, PHPStan 2.3, php-cs-fixer 3.95, GrumPHP 2.27). Dropped `composer-require-checker`, which has no release for PHP 8.6, and the unused `diablomedia/phpstorm-stubs` repository entry.
- Tests migrated to PHPUnit 13 attributes. CI runs PHP 8.5 and 8.6. Tests that only check that no exception is thrown are marked `#[DoesNotPerformAssertions]`.
- No other public signature changes.
