<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class DescribeUniBackupDatabaseRequest extends Model
{
    /**
     * @description The number of the page to return. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $currentPage;

    /**
     * @description The type of the database. Valid values:
     *
     *   **MYSQL**
     *   **MSSQL**
     *   **Oracle**
     *
     * @example MYSQL
     *
     * @var string
     */
    public $databaseType;

    /**
     * @description The name of the Elastic Compute Service (ECS) instance.
     *
     * @example test
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description The number of entries to return on each page. Default value: 20. If you leave this parameter empty, 20 entries are returned on each page.
     *
     * >  We recommend that you do not leave this parameter empty.
     * @example 20
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The condition that is used to query the database. Valid values:
     *
     *   **create**: newly created
     *   **restore**: restored
     *
     * @example create
     *
     * @var string
     */
    public $queryType;

    /**
     * @description The region ID of the server that hosts the database.
     *
     * @example cn-hongkong
     *
     * @var string
     */
    public $uniRegionId;
    protected $_name = [
        'currentPage'  => 'CurrentPage',
        'databaseType' => 'DatabaseType',
        'instanceName' => 'InstanceName',
        'pageSize'     => 'PageSize',
        'queryType'    => 'QueryType',
        'uniRegionId'  => 'UniRegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->currentPage) {
            $res['CurrentPage'] = $this->currentPage;
        }
        if (null !== $this->databaseType) {
            $res['DatabaseType'] = $this->databaseType;
        }
        if (null !== $this->instanceName) {
            $res['InstanceName'] = $this->instanceName;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->queryType) {
            $res['QueryType'] = $this->queryType;
        }
        if (null !== $this->uniRegionId) {
            $res['UniRegionId'] = $this->uniRegionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUniBackupDatabaseRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CurrentPage'])) {
            $model->currentPage = $map['CurrentPage'];
        }
        if (isset($map['DatabaseType'])) {
            $model->databaseType = $map['DatabaseType'];
        }
        if (isset($map['InstanceName'])) {
            $model->instanceName = $map['InstanceName'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['QueryType'])) {
            $model->queryType = $map['QueryType'];
        }
        if (isset($map['UniRegionId'])) {
            $model->uniRegionId = $map['UniRegionId'];
        }

        return $model;
    }
}
