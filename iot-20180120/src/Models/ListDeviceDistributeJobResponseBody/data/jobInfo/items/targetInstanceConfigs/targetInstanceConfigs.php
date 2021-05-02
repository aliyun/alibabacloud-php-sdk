<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\ListDeviceDistributeJobResponseBody\data\jobInfo\items\targetInstanceConfigs;

use AlibabaCloud\Tea\Model;

class targetInstanceConfigs extends Model
{
    /**
     * @var string
     */
    public $targetInstanceId;

    /**
     * @var string
     */
    public $targetRegion;

    /**
     * @var string
     */
    public $targetInstanceName;
    protected $_name = [
        'targetInstanceId'   => 'TargetInstanceId',
        'targetRegion'       => 'TargetRegion',
        'targetInstanceName' => 'TargetInstanceName',
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
        if (null !== $this->targetRegion) {
            $res['TargetRegion'] = $this->targetRegion;
        }
        if (null !== $this->targetInstanceName) {
            $res['TargetInstanceName'] = $this->targetInstanceName;
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
        if (isset($map['TargetRegion'])) {
            $model->targetRegion = $map['TargetRegion'];
        }
        if (isset($map['TargetInstanceName'])) {
            $model->targetInstanceName = $map['TargetInstanceName'];
        }

        return $model;
    }
}
