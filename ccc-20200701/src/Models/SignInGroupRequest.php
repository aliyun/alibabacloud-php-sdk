<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class SignInGroupRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $signedSkillGroupIdList;
    protected $_name = [
        'instanceId'             => 'InstanceId',
        'userId'                 => 'UserId',
        'deviceId'               => 'DeviceId',
        'signedSkillGroupIdList' => 'SignedSkillGroupIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->signedSkillGroupIdList) {
            $res['SignedSkillGroupIdList'] = $this->signedSkillGroupIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SignInGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['SignedSkillGroupIdList'])) {
            $model->signedSkillGroupIdList = $map['SignedSkillGroupIdList'];
        }

        return $model;
    }
}
