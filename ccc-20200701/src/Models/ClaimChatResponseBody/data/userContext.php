<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\ClaimChatResponseBody\data;

use AlibabaCloud\Tea\Model;

class userContext extends Model
{
    /**
     * @example Warm-up
     *
     * @var string
     */
    public $breakCode;

    /**
     * @example CCC-169.254.165.2-browser125.0.0-bs48b41903450e6c8
     *
     * @var string
     */
    public $deviceId;

    /**
     * @example ONLINE
     *
     * @var string
     */
    public $deviceState;

    /**
     * @example 8032****
     *
     * @var string
     */
    public $extension;

    /**
     * @example 1609136956378
     *
     * @var int
     */
    public $heartbeat;

    /**
     * @example ccc-test
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example chat-65382141036853491
     *
     * @var string
     */
    public $jobId;

    /**
     * @example 18******102
     *
     * @var string
     */
    public $mobile;

    /**
     * @example false
     *
     * @var bool
     */
    public $outboundScenario;

    /**
     * @example false
     *
     * @var int
     */
    public $reserved;

    /**
     * @var string[]
     */
    public $signedSkillGroupIdList;

    /**
     * @example userId@ccc-test
     *
     * @var string
     */
    public $userId;

    /**
     * @example TALKING
     *
     * @var string
     */
    public $userState;

    /**
     * @example ON_SITE
     *
     * @var string
     */
    public $workMode;
    protected $_name = [
        'breakCode'              => 'BreakCode',
        'deviceId'               => 'DeviceId',
        'deviceState'            => 'DeviceState',
        'extension'              => 'Extension',
        'heartbeat'              => 'Heartbeat',
        'instanceId'             => 'InstanceId',
        'jobId'                  => 'JobId',
        'mobile'                 => 'Mobile',
        'outboundScenario'       => 'OutboundScenario',
        'reserved'               => 'Reserved',
        'signedSkillGroupIdList' => 'SignedSkillGroupIdList',
        'userId'                 => 'UserId',
        'userState'              => 'UserState',
        'workMode'               => 'WorkMode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->breakCode) {
            $res['BreakCode'] = $this->breakCode;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->deviceState) {
            $res['DeviceState'] = $this->deviceState;
        }
        if (null !== $this->extension) {
            $res['Extension'] = $this->extension;
        }
        if (null !== $this->heartbeat) {
            $res['Heartbeat'] = $this->heartbeat;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }
        if (null !== $this->outboundScenario) {
            $res['OutboundScenario'] = $this->outboundScenario;
        }
        if (null !== $this->reserved) {
            $res['Reserved'] = $this->reserved;
        }
        if (null !== $this->signedSkillGroupIdList) {
            $res['SignedSkillGroupIdList'] = $this->signedSkillGroupIdList;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userState) {
            $res['UserState'] = $this->userState;
        }
        if (null !== $this->workMode) {
            $res['WorkMode'] = $this->workMode;
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
        if (isset($map['BreakCode'])) {
            $model->breakCode = $map['BreakCode'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['DeviceState'])) {
            $model->deviceState = $map['DeviceState'];
        }
        if (isset($map['Extension'])) {
            $model->extension = $map['Extension'];
        }
        if (isset($map['Heartbeat'])) {
            $model->heartbeat = $map['Heartbeat'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['OutboundScenario'])) {
            $model->outboundScenario = $map['OutboundScenario'];
        }
        if (isset($map['Reserved'])) {
            $model->reserved = $map['Reserved'];
        }
        if (isset($map['SignedSkillGroupIdList'])) {
            if (!empty($map['SignedSkillGroupIdList'])) {
                $model->signedSkillGroupIdList = $map['SignedSkillGroupIdList'];
            }
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserState'])) {
            $model->userState = $map['UserState'];
        }
        if (isset($map['WorkMode'])) {
            $model->workMode = $map['WorkMode'];
        }

        return $model;
    }
}
