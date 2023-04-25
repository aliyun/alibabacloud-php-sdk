<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class SignInGroupRequest extends Model
{
    /**
     * @example device
     *
     * @var string
     */
    public $deviceId;

    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example ["skillgroup1@ccc-test","skillgroup2@ccc-test"]
     *
     * @var string
     */
    public $signedSkillGroupIdList;

    /**
     * @example agent@ccc-test
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'deviceId'               => 'DeviceId',
        'instanceId'             => 'InstanceId',
        'signedSkillGroupIdList' => 'SignedSkillGroupIdList',
        'userId'                 => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->signedSkillGroupIdList) {
            $res['SignedSkillGroupIdList'] = $this->signedSkillGroupIdList;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['SignedSkillGroupIdList'])) {
            $model->signedSkillGroupIdList = $map['SignedSkillGroupIdList'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
