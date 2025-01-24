<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20201002\Models;

use AlibabaCloud\Dara\Model;

class ReportSessionStatusRequest extends Model
{
    /**
     * @var string
     */
    public $endUserId;
    /**
     * @var string
     */
    public $instanceId;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var int
     */
    public $sessionChangeTime;
    /**
     * @var string
     */
    public $sessionId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
