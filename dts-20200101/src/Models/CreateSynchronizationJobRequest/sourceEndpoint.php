<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dts\V20200101\Models\CreateSynchronizationJobRequest;

use AlibabaCloud\Tea\Model;

class sourceEndpoint extends Model
{
    /**
     * @description The instance type of the source database. Valid values:
     *
     *   **MySQL**: ApsaraDB RDS for MySQL instance or self-managed MySQL database
     *   **PolarDB**: PolarDB for MySQL cluster or PolarDB O Edition cluster
     *   **Redis**: Redis database
     *   **DRDS**: PolarDB-X instance V1.0
     *
     * >
     *   Default value: **MySQL**.
     *   For more information about the supported source and destination databases, see [Database types, initial synchronization types, and synchronization topologies](https://help.aliyun.com/document_detail/130744.html).
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
     * @return sourceEndpoint
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
