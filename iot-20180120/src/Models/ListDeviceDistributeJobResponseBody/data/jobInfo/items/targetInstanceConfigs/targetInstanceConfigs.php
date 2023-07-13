<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListDeviceDistributeJobResponseBody\data\jobInfo\items\targetInstanceConfigs;

use AlibabaCloud\Tea\Model;

class targetInstanceConfigs extends Model
{
    /**
     * @description The ID of the destination instance.
     *
     * @example iot-cn-6ja***
     *
     * @var string
     */
    public $targetInstanceId;

    /**
     * @description The name of the destination instance.
     *
     * @var string
     */
    public $targetInstanceName;

    /**
     * @description The region where the destination instance resides.
     *
     * @example cn-shanghai
     *
     * @var string
     */
    public $targetRegion;
    protected $_name = [
        'targetInstanceId'   => 'TargetInstanceId',
        'targetInstanceName' => 'TargetInstanceName',
        'targetRegion'       => 'TargetRegion',
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
        if (null !== $this->targetInstanceName) {
            $res['TargetInstanceName'] = $this->targetInstanceName;
        }
        if (null !== $this->targetRegion) {
            $res['TargetRegion'] = $this->targetRegion;
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
        if (isset($map['TargetInstanceName'])) {
            $model->targetInstanceName = $map['TargetInstanceName'];
        }
        if (isset($map['TargetRegion'])) {
            $model->targetRegion = $map['TargetRegion'];
        }

        return $model;
    }
}
