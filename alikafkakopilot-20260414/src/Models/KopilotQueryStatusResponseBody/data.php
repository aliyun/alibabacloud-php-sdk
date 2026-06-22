<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AlikafkaKopilot\V20260414\Models\KopilotQueryStatusResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $activateTime;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $lifeStatus;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $uid;
    protected $_name = [
        'activateTime' => 'ActivateTime',
        'instanceId' => 'InstanceId',
        'lifeStatus' => 'LifeStatus',
        'regionId' => 'RegionId',
        'uid' => 'Uid',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activateTime) {
            $res['ActivateTime'] = $this->activateTime;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->lifeStatus) {
            $res['LifeStatus'] = $this->lifeStatus;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->uid) {
            $res['Uid'] = $this->uid;
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
        if (isset($map['ActivateTime'])) {
            $model->activateTime = $map['ActivateTime'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['LifeStatus'])) {
            $model->lifeStatus = $map['LifeStatus'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Uid'])) {
            $model->uid = $map['Uid'];
        }

        return $model;
    }
}
