# Zend Framework 1 - Db

[![Build](https://github.com/gizmocraftcom/zf1-db/workflows/Build/badge.svg?event=push)](https://github.com/gizmocraftcom/zf1-db/actions?query=workflow%3ABuild+event%3Apush)
[![codecov](https://codecov.io/gh/gizmocraftcom/zf1-db/branch/master/graph/badge.svg)](https://codecov.io/gh/gizmocraftcom/zf1-db)
[![Latest Stable Version](https://poser.pugx.org/gizmocraft/zendframework1-db/v/stable)](https://packagist.org/packages/gizmocraft/zendframework1-db)
[![Total Downloads](https://poser.pugx.org/gizmocraft/zendframework1-db/downloads)](https://packagist.org/packages/gizmocraft/zendframework1-db)
[![License](https://poser.pugx.org/gizmocraft/zendframework1-db/license)](https://packagist.org/packages/gizmocraft/zendframework1-db)


This is just the Zend_Db component extracted from our fork of the Zend Framework 1 repo (https://github.com/gizmocraftcom/zf1).

## Dropped functionality

`Zend_Db_Profiler_Firebug` was removed. It depends on the Wildfire component (`zendframework1-wildfire`), which is not part of the gizmocraft forks, so the `zendframework1-wildfire` requirement is dropped too. Use `Zend_Db_Profiler` or a custom profiler subclass instead. See CHANGELOG.md.

Originally forked from the upstream repository https://github.com/gizmocraftcom/zf1-db. Copyright and license of the original authors are kept in LICENSE.txt.
