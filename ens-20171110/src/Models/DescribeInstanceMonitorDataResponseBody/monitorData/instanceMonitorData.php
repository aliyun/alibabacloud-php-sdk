<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceMonitorDataResponseBody\monitorData;

use AlibabaCloud\Tea\Model;

class instanceMonitorData extends Model
{
    /**
     * @description The vCPU usage of the instance, which is raw data. For example, a value of 0.02 indicates that the usage is 2%.
     *
     * @example 0.02
     *
     * @var string
     */
    public $CPU;

    /**
     * @description The ID of the instance.
     *
     * @example yourInstance ID
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description This parameter is not yet supported.
     *
     * @var string
     */
    public $memory;
    protected $_name = [
        'CPU'        => 'CPU',
        'instanceId' => 'InstanceId',
        'memory'     => 'Memory',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->CPU) {
            $res['CPU'] = $this->CPU;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return instanceMonitorData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CPU'])) {
            $model->CPU = $map['CPU'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }

        return $model;
    }
}
