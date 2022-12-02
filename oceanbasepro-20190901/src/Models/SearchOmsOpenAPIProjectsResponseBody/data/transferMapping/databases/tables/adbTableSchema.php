<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\SearchOmsOpenAPIProjectsResponseBody\data\transferMapping\databases\tables;

use AlibabaCloud\Tea\Model;

class adbTableSchema extends Model
{
    /**
     * @var string[]
     */
    public $distributedKeys;

    /**
     * @var int
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
        'distributedKeys'    => 'DistributedKeys',
        'partitionLifeCycle' => 'PartitionLifeCycle',
        'partitionStatement' => 'PartitionStatement',
        'primaryKeys'        => 'PrimaryKeys',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->distributedKeys) {
            $res['DistributedKeys'] = $this->distributedKeys;
        }
        if (null !== $this->partitionLifeCycle) {
            $res['PartitionLifeCycle'] = $this->partitionLifeCycle;
        }
        if (null !== $this->partitionStatement) {
            $res['PartitionStatement'] = $this->partitionStatement;
        }
        if (null !== $this->primaryKeys) {
            $res['PrimaryKeys'] = $this->primaryKeys;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return adbTableSchema
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DistributedKeys'])) {
            if (!empty($map['DistributedKeys'])) {
                $model->distributedKeys = $map['DistributedKeys'];
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
                $model->primaryKeys = $map['PrimaryKeys'];
            }
        }

        return $model;
    }
}
