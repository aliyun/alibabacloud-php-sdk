<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models;

use AlibabaCloud\Dara\Model;

class BatchUpdateDataLakePartitionsRequest extends Model
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
     * @var DLPartitionInput[]
     */
    public $partitionInputs;
    /**
     * @var string
     */
    public $tableName;
    /**
     * @var int
     */
    public $tid;
    protected $_name = [
        'catalogName'     => 'CatalogName',
        'dataRegion'      => 'DataRegion',
        'dbName'          => 'DbName',
        'partitionInputs' => 'PartitionInputs',
        'tableName'       => 'TableName',
        'tid'             => 'Tid',
    ];

    public function validate()
    {
        if (\is_array($this->partitionInputs)) {
            Model::validateArray($this->partitionInputs);
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

        if (null !== $this->partitionInputs) {
            if (\is_array($this->partitionInputs)) {
                $res['PartitionInputs'] = [];
                $n1                     = 0;
                foreach ($this->partitionInputs as $item1) {
                    $res['PartitionInputs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        if (isset($map['PartitionInputs'])) {
            if (!empty($map['PartitionInputs'])) {
                $model->partitionInputs = [];
                $n1                     = 0;
                foreach ($map['PartitionInputs'] as $item1) {
                    $model->partitionInputs[$n1++] = DLPartitionInput::fromMap($item1);
                }
            }
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
