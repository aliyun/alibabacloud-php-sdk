<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\CreateSynchronizationJobRequest;

use AlibabaCloud\Tea\Model;

class destinationEndpoint extends Model
{
    /**
     * @description The instance type of the destination database. Valid values:
     *
     *   **MySQL**: ApsaraDB RDS for MySQL instance or self-managed MySQL database
     *   **PolarDB**: PolarDB for MySQL cluster or PolarDB O Edition cluster
     *   **Redis**: Redis database
     *   **MaxCompute**: MaxCompute project
     *
     * >
     *   Default value: **MySQL**.
     *   For more information about the supported source and destination databases, see [Database types, initial synchronization types, and synchronization topologies](~~130744~~).
     *
     * @example MySQL
     *
     * @var string
     */
    public $instanceType;
    protected $_name = [
        'instanceType' => 'InstanceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceType) {
            $res['InstanceType'] = $this->instanceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return destinationEndpoint
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceType'])) {
            $model->instanceType = $map['InstanceType'];
        }

        return $model;
    }
}
