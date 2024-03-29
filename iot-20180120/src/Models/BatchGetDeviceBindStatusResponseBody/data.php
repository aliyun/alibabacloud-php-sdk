<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\BatchGetDeviceBindStatusResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $bindStatus;

    /**
     * @description 实例ID。
     *
     * @example iot-v64********
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example sjI0Sd124XFYyjBYMiYO******
     *
     * @var string
     */
    public $iotId;
    protected $_name = [
        'bindStatus' => 'BindStatus',
        'instanceId' => 'InstanceId',
        'iotId'      => 'IotId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bindStatus) {
            $res['BindStatus'] = $this->bindStatus;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BindStatus'])) {
            $model->bindStatus = $map['BindStatus'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }

        return $model;
    }
}
