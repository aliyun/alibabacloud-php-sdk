<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\Tea\Model;

class ReportSessionStatusRequest extends Model
{
    /**
     * @example liming
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description This parameter is required.
     *
     * @example i-bp167fcodoa90ixn****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description This parameter is required.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description This parameter is required.
     *
     * @example 1642909143781
     *
     * @var int
     */
    public $sessionChangeTime;

    /**
     * @description This parameter is required.
     *
     * @example 2
     *
     * @var string
     */
    public $sessionId;

    /**
     * @description This parameter is required.
     *
     * @example SessionLogOn
     *
     * @var string
     */
    public $sessionStatus;
    protected $_name = [
        'endUserId'         => 'EndUserId',
        'instanceId'        => 'InstanceId',
        'regionId'          => 'RegionId',
        'sessionChangeTime' => 'SessionChangeTime',
        'sessionId'         => 'SessionId',
        'sessionStatus'     => 'SessionStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->sessionChangeTime) {
            $res['SessionChangeTime'] = $this->sessionChangeTime;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->sessionStatus) {
            $res['SessionStatus'] = $this->sessionStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ReportSessionStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['SessionChangeTime'])) {
            $model->sessionChangeTime = $map['SessionChangeTime'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['SessionStatus'])) {
            $model->sessionStatus = $map['SessionStatus'];
        }

        return $model;
    }
}
