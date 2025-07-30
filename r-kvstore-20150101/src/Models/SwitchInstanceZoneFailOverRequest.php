<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models;

use AlibabaCloud\Tea\Model;

class SwitchInstanceZoneFailOverRequest extends Model
{
    /**
     * @description The instance ID.
     *
     * This parameter is required.
     *
     * @example r-bp1zxszhcgatnx****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The duration for which the fault lasts. Unit: minutes.
     *
     * Valid values:
     *
     *   5
     *   10
     *
     * @example 5
     *
     * @var string
     */
    public $siteFaultTime;

    /**
     * @description The ID of the destination zone.
     *
     * @example cn-hangzhou-j
     *
     * @var string
     */
    public $targetZoneId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'siteFaultTime' => 'SiteFaultTime',
        'targetZoneId' => 'TargetZoneId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->siteFaultTime) {
            $res['SiteFaultTime'] = $this->siteFaultTime;
        }
        if (null !== $this->targetZoneId) {
            $res['TargetZoneId'] = $this->targetZoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SwitchInstanceZoneFailOverRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SiteFaultTime'])) {
            $model->siteFaultTime = $map['SiteFaultTime'];
        }
        if (isset($map['TargetZoneId'])) {
            $model->targetZoneId = $map['TargetZoneId'];
        }

        return $model;
    }
}
