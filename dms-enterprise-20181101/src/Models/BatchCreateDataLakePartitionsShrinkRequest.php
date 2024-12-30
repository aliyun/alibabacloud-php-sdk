<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Tea\Model;

class BatchCreateDataLakePartitionsShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example hive
     *
     * @var string
     */
    public $catalogName;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $dataRegion;

    /**
     * @description This parameter is required.
     *
     * @example default
     *
     * @var string
     */
    public $dbName;

    /**
     * @example true
     *
     * @var bool
     */
    public $ifNotExists;

    /**
     * @example true
     *
     * @var bool
     */
    public $needResult;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $partitionInputsShrink;

    /**
     * @description This parameter is required.
     *
     * @example test_table
     *
     * @var string
     */
    public $tableName;

    /**
     * @example 3***
     *
     * @var int
     */
    public $tid;
    protected $_name = [
        'catalogName'           => 'CatalogName',
        'dataRegion'            => 'DataRegion',
        'dbName'                => 'DbName',
        'ifNotExists'           => 'IfNotExists',
        'needResult'            => 'NeedResult',
        'partitionInputsShrink' => 'PartitionInputs',
        'tableName'             => 'TableName',
        'tid'                   => 'Tid',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->catalogName) {
            $res['CatalogName'] = $this->catalogName;
        }
        if (null !== $this->dataRegion) {
            $res['DataRegion'] = $this->dataRegion;
        }
        if (null !== $this->dbName) {
            $res['DbName'] = $this->dbName;
        }
        if (null !== $this->ifNotExists) {
            $res['IfNotExists'] = $this->ifNotExists;
        }
        if (null !== $this->needResult) {
            $res['NeedResult'] = $this->needResult;
        }
        if (null !== $this->partitionInputsShrink) {
            $res['PartitionInputs'] = $this->partitionInputsShrink;
        }
        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }
        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchCreateDataLakePartitionsShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CatalogName'])) {
            $model->catalogName = $map['CatalogName'];
        }
        if (isset($map['DataRegion'])) {
            $model->dataRegion = $map['DataRegion'];
        }
        if (isset($map['DbName'])) {
            $model->dbName = $map['DbName'];
        }
        if (isset($map['IfNotExists'])) {
            $model->ifNotExists = $map['IfNotExists'];
        }
        if (isset($map['NeedResult'])) {
            $model->needResult = $map['NeedResult'];
        }
        if (isset($map['PartitionInputs'])) {
            $model->partitionInputsShrink = $map['PartitionInputs'];
        }
        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }
        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        return $model;
    }
}
