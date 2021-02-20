<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceMonitorDataResponseBody\monitorData;

use AlibabaCloud\Tea\Model;

class instanceMonitorData extends Model
{
    /**
     * @var string
     */
    public $CPU;

    /**
     * @var string
     */
    public $instanceId;

    /**
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
