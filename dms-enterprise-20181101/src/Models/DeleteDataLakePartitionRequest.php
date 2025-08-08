<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class DeleteDataLakePartitionRequest extends Model
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
    public $ifExists;

    /**
     * @var string[]
     */
    public $partitionValues;

    /**
     * @var string
     */
    public $tableName;

    /**
     * @var int
     */
    public $tid;

    /**
     * @var int
     */
    public $workspaceId;
    protected $_name = [
        'catalogName' => 'CatalogName',
        'dataRegion' => 'DataRegion',
        'dbName' => 'DbName',
        'ifExists' => 'IfExists',
        'partitionValues' => 'PartitionValues',
        'tableName' => 'TableName',
        'tid' => 'Tid',
        'workspaceId' => 'WorkspaceId',
    ];

    public function validate()
    {
        if (\is_array($this->partitionValues)) {
            Model::validateArray($this->partitionValues);
        }
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

        if (null !== $this->ifExists) {
            $res['IfExists'] = $this->ifExists;
        }

        if (null !== $this->partitionValues) {
            if (\is_array($this->partitionValues)) {
                $res['PartitionValues'] = [];
                $n1 = 0;
                foreach ($this->partitionValues as $item1) {
                    $res['PartitionValues'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->tableName) {
            $res['TableName'] = $this->tableName;
        }

        if (null !== $this->tid) {
            $res['Tid'] = $this->tid;
        }

        if (null !== $this->workspaceId) {
            $res['WorkspaceId'] = $this->workspaceId;
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

        if (isset($map['IfExists'])) {
            $model->ifExists = $map['IfExists'];
        }

        if (isset($map['PartitionValues'])) {
            if (!empty($map['PartitionValues'])) {
                $model->partitionValues = [];
                $n1 = 0;
                foreach ($map['PartitionValues'] as $item1) {
                    $model->partitionValues[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['TableName'])) {
            $model->tableName = $map['TableName'];
        }

        if (isset($map['Tid'])) {
            $model->tid = $map['Tid'];
        }

        if (isset($map['WorkspaceId'])) {
            $model->workspaceId = $map['WorkspaceId'];
        }

        return $model;
    }
}
