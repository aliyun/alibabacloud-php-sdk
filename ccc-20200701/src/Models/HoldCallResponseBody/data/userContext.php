<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\HoldCallResponseBody\data;

use AlibabaCloud\Tea\Model;

class userContext extends Model
{
    /**
     * @var string
     */
    public $extension;

    /**
     * @var int
     */
    public $heartbeat;

    /**
     * @var string
     */
    public $workMode;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var int
     */
    public $reserved;

    /**
     * @var string
     */
    public $breakCode;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var bool
     */
    public $outboundScenario;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $userState;

    /**
     * @var string[]
     */
    public $signedSkillGroupIdList;
    protected $_name = [
        'extension'              => 'Extension',
        'heartbeat'              => 'Heartbeat',
        'workMode'               => 'WorkMode',
        'deviceId'               => 'DeviceId',
        'userId'                 => 'UserId',
        'reserved'               => 'Reserved',
        'breakCode'              => 'BreakCode',
        'instanceId'             => 'InstanceId',
        'outboundScenario'       => 'OutboundScenario',
        'mobile'                 => 'Mobile',
        'jobId'                  => 'JobId',
        'userState'              => 'UserState',
        'signedSkillGroupIdList' => 'SignedSkillGroupIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }
        if (null !== $this->heartbeat) {
            $res['Heartbeat'] = $this->heartbeat;
        }
        if (null !== $this->workMode) {
            $res['WorkMode'] = $this->workMode;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->reserved) {
            $res['Reserved'] = $this->reserved;
        }
        if (null !== $this->breakCode) {
            $res['BreakCode'] = $this->breakCode;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->outboundScenario) {
            $res['OutboundScenario'] = $this->outboundScenario;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->userState) {
            $res['UserState'] = $this->userState;
        }
        if (null !== $this->signedSkillGroupIdList) {
            $res['SignedSkillGroupIdList'] = $this->signedSkillGroupIdList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return userContext
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }
        if (isset($map['Heartbeat'])) {
            $model->heartbeat = $map['Heartbeat'];
        }
        if (isset($map['WorkMode'])) {
            $model->workMode = $map['WorkMode'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Reserved'])) {
            $model->reserved = $map['Reserved'];
        }
        if (isset($map['BreakCode'])) {
            $model->breakCode = $map['BreakCode'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OutboundScenario'])) {
            $model->outboundScenario = $map['OutboundScenario'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['UserState'])) {
            $model->userState = $map['UserState'];
        }
        if (isset($map['SignedSkillGroupIdList'])) {
            if (!empty($map['SignedSkillGroupIdList'])) {
                $model->signedSkillGroupIdList = $map['SignedSkillGroupIdList'];
            }
        }

        return $model;
    }
}
