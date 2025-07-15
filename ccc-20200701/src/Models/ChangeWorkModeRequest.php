<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models;

use AlibabaCloud\Tea\Model;

class ChangeWorkModeRequest extends Model
{
    /**
     * @example ACC-YUNBS-1.0.10-****
     *
     * @var string
     */
    public $deviceId;

    /**
     * @description This parameter is required.
     *
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example 1382114****
     *
     * @var string
     */
    public $mobile;

    /**
     * @example ["online-1@ccc-test","online-2@ccc-test","online-3@ccc-test","skg-default@ccc-test"]
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

    /**
     * @description This parameter is required.
     *
     * @example ON_SITE
     *
     * @var string
     */
    public $workMode;
    protected $_name = [
        'deviceId' => 'DeviceId',
        'instanceId' => 'InstanceId',
        'mobile' => 'Mobile',
        'signedSkillGroupIdList' => 'SignedSkillGroupIdList',
        'userId' => 'UserId',
        'workMode' => 'WorkMode',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->signedSkillGroupIdList) {
            $res['SignedSkillGroupIdList'] = $this->signedSkillGroupIdList;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->workMode) {
            $res['WorkMode'] = $this->workMode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ChangeWorkModeRequest
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
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['SignedSkillGroupIdList'])) {
            $model->signedSkillGroupIdList = $map['SignedSkillGroupIdList'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['WorkMode'])) {
            $model->workMode = $map['WorkMode'];
        }

        return $model;
    }
}
