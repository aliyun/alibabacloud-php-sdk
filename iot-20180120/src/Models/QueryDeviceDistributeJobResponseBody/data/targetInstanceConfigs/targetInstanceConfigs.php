<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceDistributeJobResponseBody\data\targetInstanceConfigs;

use AlibabaCloud\Tea\Model;

class targetInstanceConfigs extends Model
{
    /**
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
     * @return targetInstanceConfigs
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
