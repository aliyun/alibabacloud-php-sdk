<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\CreateShardingDBInstanceRequest;

use AlibabaCloud\Tea\Model;

class configServer extends Model
{
    /**
     * @description The instance type of the Configserver node. Valid value:
     *
     *   **mdb.shard.2x.xlarge.d**: 4 cores, 8 GB (dedicated). Only instances that run MongoDB 4.4 and 5.0 support this instance type.
     *   **dds.cs.mid** :1 core, 2 GB (general-purpose). Only instances that run MongoDB 3.4, 4.0, and 4.2 support this instance type.
     *
     * @example mdb.shard.2x.xlarge.d
     *
     * @var string
     */
    public $class;

    /**
     * @description The storage capacity of the Configserver node. Unit: GB.
     *
     * Set the value to **20**.
     * @example 20
     *
     * @var int
     */
    public $storage;
    protected $_name = [
        'class'   => 'Class',
        'storage' => 'Storage',
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
        if (null !== $this->storage) {
            $res['Storage'] = $this->storage;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return configServer
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Class'])) {
            $model->class = $map['Class'];
        }
        if (isset($map['Storage'])) {
            $model->storage = $map['Storage'];
        }

        return $model;
    }
}
