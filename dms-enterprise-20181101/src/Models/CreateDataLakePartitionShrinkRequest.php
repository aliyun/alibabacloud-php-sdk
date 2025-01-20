<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class CreateDataLakePartitionShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $catalogName;
    /**
     * @var string
     */
    public $dataRegion;
    /**
     * @var string
     */
    public $dbName;
    /**
     * @var bool
     */
    public $ifNotExists;
    /**
     * @var bool
     */
    public $needResult;
    /**
     * @var string
     */
    public $partitionInputShrink;
    /**
     * @var string
     */
    public $tableName;
    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'catalogName'          => 'CatalogName',
        'dataRegion'           => 'DataRegion',
        'dbName'               => 'DbName',
        'ifNotExists'          => 'IfNotExists',
        'needResult'           => 'NeedResult',
        'partitionInputShrink' => 'PartitionInput',
        'tableName'            => 'TableName',
        'tid'                  => 'Tid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->partitionInputShrink) {
            $res['PartitionInput'] = $this->partitionInputShrink;
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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

        if (isset($map['PartitionInput'])) {
            $model->partitionInputShrink = $map['PartitionInput'];
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
