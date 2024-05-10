<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20211201\Models;

use AlibabaCloud\Tea\Model;

class DescribeAccountPrivilegeObjectsRequest extends Model
{
    /**
     * @description The name of the database account.
     *
     * This parameter is required.
     * @example test
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The column name that is used to filter columns.
     *
     * @example col1
     *
     * @var string
     */
    public $columnPrivilegeObject;

    /**
     * @description The ID of the AnalyticDB for MySQL Data Lakehouse Edition (V3.0) cluster.
     *
     * This parameter is required.
     * @example amv-bp1k3wdmt139****
     *
     * @var string
     */
    public $DBClusterId;

    /**
     * @description The database name that is used to filter databases.
     *
     * @example database1
     *
     * @var string
     */
    public $databasePrivilegeObject;

    /**
     * @description The page number. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var string
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: 20.
     *
     * @example 20
     *
     * @var string
     */
    public $pageSize;

    /**
     * @description The permission level. Valid values: Database, Table, and Column. Global is not supported.
     *
     * @example Column
     *
     * @var string
     */
    public $privilegeType;

    /**
     * @description The region ID of the cluster.
     *
     * This parameter is required.
     * @example ch-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The table name that is used to filter tables.
     *
     * @example table1
     *
     * @var string
     */
    public $tablePrivilegeObject;
    protected $_name = [
        'accountName'             => 'AccountName',
        'columnPrivilegeObject'   => 'ColumnPrivilegeObject',
        'DBClusterId'             => 'DBClusterId',
        'databasePrivilegeObject' => 'DatabasePrivilegeObject',
        'pageNumber'              => 'PageNumber',
        'pageSize'                => 'PageSize',
        'privilegeType'           => 'PrivilegeType',
        'regionId'                => 'RegionId',
        'tablePrivilegeObject'    => 'TablePrivilegeObject',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->columnPrivilegeObject) {
            $res['ColumnPrivilegeObject'] = $this->columnPrivilegeObject;
        }
        if (null !== $this->DBClusterId) {
            $res['DBClusterId'] = $this->DBClusterId;
        }
        if (null !== $this->databasePrivilegeObject) {
            $res['DatabasePrivilegeObject'] = $this->databasePrivilegeObject;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->privilegeType) {
            $res['PrivilegeType'] = $this->privilegeType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->tablePrivilegeObject) {
            $res['TablePrivilegeObject'] = $this->tablePrivilegeObject;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeAccountPrivilegeObjectsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['ColumnPrivilegeObject'])) {
            $model->columnPrivilegeObject = $map['ColumnPrivilegeObject'];
        }
        if (isset($map['DBClusterId'])) {
            $model->DBClusterId = $map['DBClusterId'];
        }
        if (isset($map['DatabasePrivilegeObject'])) {
            $model->databasePrivilegeObject = $map['DatabasePrivilegeObject'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['PrivilegeType'])) {
            $model->privilegeType = $map['PrivilegeType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['TablePrivilegeObject'])) {
            $model->tablePrivilegeObject = $map['TablePrivilegeObject'];
        }

        return $model;
    }
}
