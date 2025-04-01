<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\CreateProjectModifyRecordsRequest\databases\views;

use AlibabaCloud\Dara\Model;

class adbTableSchema extends Model
{
    /**
     * @var string[]
     */
    public $distributedKeys;

    /**
     * @var string
     */
    public $partitionLifeCycle;

    /**
     * @var string
     */
    public $partitionStatement;

    /**
     * @var string[]
     */
    public $primaryKeys;
    protected $_name = [
        'distributedKeys' => 'DistributedKeys',
        'partitionLifeCycle' => 'PartitionLifeCycle',
        'partitionStatement' => 'PartitionStatement',
        'primaryKeys' => 'PrimaryKeys',
    ];

    public function validate()
    {
        if (\is_array($this->distributedKeys)) {
            Model::validateArray($this->distributedKeys);
        }
        if (\is_array($this->primaryKeys)) {
            Model::validateArray($this->primaryKeys);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->distributedKeys) {
            if (\is_array($this->distributedKeys)) {
                $res['DistributedKeys'] = [];
                $n1 = 0;
                foreach ($this->distributedKeys as $item1) {
                    $res['DistributedKeys'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->partitionLifeCycle) {
            $res['PartitionLifeCycle'] = $this->partitionLifeCycle;
        }

        if (null !== $this->partitionStatement) {
            $res['PartitionStatement'] = $this->partitionStatement;
        }

        if (null !== $this->primaryKeys) {
            if (\is_array($this->primaryKeys)) {
                $res['PrimaryKeys'] = [];
                $n1 = 0;
                foreach ($this->primaryKeys as $item1) {
                    $res['PrimaryKeys'][$n1++] = $item1;
                }
            }
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
        if (isset($map['DistributedKeys'])) {
            if (!empty($map['DistributedKeys'])) {
                $model->distributedKeys = [];
                $n1 = 0;
                foreach ($map['DistributedKeys'] as $item1) {
                    $model->distributedKeys[$n1++] = $item1;
                }
            }
        }

        if (isset($map['PartitionLifeCycle'])) {
            $model->partitionLifeCycle = $map['PartitionLifeCycle'];
        }

        if (isset($map['PartitionStatement'])) {
            $model->partitionStatement = $map['PartitionStatement'];
        }

        if (isset($map['PrimaryKeys'])) {
            if (!empty($map['PrimaryKeys'])) {
                $model->primaryKeys = [];
                $n1 = 0;
                foreach ($map['PrimaryKeys'] as $item1) {
                    $model->primaryKeys[$n1++] = $item1;
                }
            }
        }

        return $model;
    }
}
