<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\CreateShardingDBInstanceRequest;

use AlibabaCloud\Tea\Model;

class mongos extends Model
{
    /**
     * @description The instance type of the mongos node. For more information, see [Sharded cluster instance types](https://help.aliyun.com/document_detail/311414.html).
     *
     * > *   **N** specifies the serial number of the mongos node for which the instance type is specified. For example, **Mongos.2.Class** specifies the instance type of the second mongos node.
     * > *   Valid values for **N**: **2** to **32**.
     *
     * This parameter is required.
     *
     * @example mdb.shard.2x.xlarge.d
     *
     * @var string
     */
    public $class;
    protected $_name = [
        'class' => 'Class',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->class) {
            $res['Class'] = $this->class;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mongos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Class'])) {
            $model->class = $map['Class'];
        }

        return $model;
    }
}
