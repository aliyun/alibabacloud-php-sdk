<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetMetaTableLineageRequest extends Model
{
    /**
     * @var string
     */
    public $tableGuid;

    /**
     * @var string
     */
    public $direction;

    /**
     * @var string
     */
    public $nextPrimaryKey;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $clusterId;

    /**
     * @var string
     */
    public $databaseName;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var string
     */
    public $dataSourceType;
    protected $_name = [
        'tableGuid'      => 'TableGuid',
        'direction'      => 'Direction',
        'nextPrimaryKey' => 'NextPrimaryKey',
        'pageSize'       => 'PageSize',
        'clusterId'      => 'ClusterId',
        'databaseName'   => 'DatabaseName',
        'tableName'      => 'TableName',
        'dataSourceType' => 'DataSourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tableGuid) {
            $res['TableGuid'] = $this->tableGuid;
        }
        if (null !== $this->direction) {
            $res['Direction'] = $this->direction;
        }
        if (null !== $this->nextPrimaryKey) {
            $res['NextPrimaryKey'] = $this->nextPrimaryKey;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->databaseName) {
            $res['DatabaseName'] = $this->databaseName;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->dataSourceType) {
            $res['DataSourceType'] = $this->dataSourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetMetaTableLineageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TableGuid'])) {
            $model->tableGuid = $map['TableGuid'];
        }
        if (isset($map['Direction'])) {
            $model->direction = $map['Direction'];
        }
        if (isset($map['NextPrimaryKey'])) {
            $model->nextPrimaryKey = $map['NextPrimaryKey'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DatabaseName'])) {
            $model->databaseName = $map['DatabaseName'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['DataSourceType'])) {
            $model->dataSourceType = $map['DataSourceType'];
        }

        return $model;
    }
}
