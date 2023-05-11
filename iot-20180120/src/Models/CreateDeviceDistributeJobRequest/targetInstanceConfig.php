<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\CreateDeviceDistributeJobRequest;

use AlibabaCloud\Tea\Model;

class targetInstanceConfig extends Model
{
    /**
     * @description The configurations of the destination instance to which the device is distributed. For more information about instance IDs, see the description of the **SourceInstanceId** parameter.
     *
     *   If the value of the **Strategy** parameter is **1**, you can specify multiple instance IDs.
     *   If the value of the **Strategy** parameter is **0**, you can specify only one instance ID.
     *
     * @example iot-cn-6ja***
     *
     * @var string
     */
    public $targetInstanceId;
    protected $_name = [
        'targetInstanceId' => 'TargetInstanceId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->targetInstanceId) {
            $res['TargetInstanceId'] = $this->targetInstanceId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return targetInstanceConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TargetInstanceId'])) {
            $model->targetInstanceId = $map['TargetInstanceId'];
        }

        return $model;
    }
}
