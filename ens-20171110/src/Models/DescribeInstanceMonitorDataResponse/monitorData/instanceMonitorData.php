<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeInstanceMonitorDataResponse\monitorData;

use AlibabaCloud\Tea\Model;

class instanceMonitorData extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $memory;

    /**
     * @var string
     */
    public $CPU;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'memory'     => 'Memory',
        'CPU'        => 'CPU',
    ];

    public function validate()
    {
        Model::validateRequired('instanceId', $this->instanceId, true);
        Model::validateRequired('memory', $this->memory, true);
        Model::validateRequired('CPU', $this->CPU, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->CPU) {
            $res['CPU'] = $this->CPU;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['CPU'])) {
            $model->CPU = $map['CPU'];
        }

        return $model;
    }
}
