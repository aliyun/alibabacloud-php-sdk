<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\CreateShardingDBInstanceRequest;

use AlibabaCloud\Tea\Model;

class replicaSet extends Model
{
    /**
     * @description The instance type of the shard node. For more information, see [Instance types](~~311414~~).
     *
     * > * **N** specifies the serial number of the shard node for which the instance type is specified. For example, **ReplicaSet.2.Class** specifies the instance type of the second shard node.
     * > * Valid values for **N**: **2** to **32**.
     * @example dds.shard.standard
     *
     * @var string
     */
    public $class;

    /**
     * @description The number of read-only nodes in shard node N.
     *
     * Valid values: **0** to **5**. The value must be an integer. Default value: **0**.
     *
     * >  **N** specifies the serial number of the shard node for which you want to set the number of read-only nodes. **ReplicaSet.2.ReadonlyReplicas** specifies the number of read-only nodes in the second shard node.
     * @example 0
     *
     * @var int
     */
    public $readonlyReplicas;

    /**
     * @description The storage capacity of the shard node. Unit: GB.
     *
     * Valid values: **10** to **2000**.
     *
     * > * The value must be a multiple of 10.
     * > * The values that can be specified for this parameter are subject to the instance types. For more information, see [Instance types](~~311414~~).
     * > * **N** specifies the serial number of the shard node for which the storage capacity is specified. For example, **ReplicaSet.2.Storage** specifies the storage capacity of the second shard node.
     * @example 10
     *
     * @var int
     */
    public $storage;
    protected $_name = [
        'class'            => 'Class',
        'readonlyReplicas' => 'ReadonlyReplicas',
        'storage'          => 'Storage',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->class) {
            $res['Class'] = $this->class;
        }
        if (null !== $this->readonlyReplicas) {
            $res['ReadonlyReplicas'] = $this->readonlyReplicas;
        }
        if (null !== $this->storage) {
            $res['Storage'] = $this->storage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return replicaSet
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Class'])) {
            $model->class = $map['Class'];
        }
        if (isset($map['ReadonlyReplicas'])) {
            $model->readonlyReplicas = $map['ReadonlyReplicas'];
        }
        if (isset($map['Storage'])) {
            $model->storage = $map['Storage'];
        }

        return $model;
    }
}
