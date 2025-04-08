<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CCC\V20200701\Models\SendDtmfSignalingResponseBody\data;

use AlibabaCloud\Dara\Model;

class userContext extends Model
{
    /**
     * @var string
     */
    public $breakCode;

    /**
     * @var string
     */
    public $deviceId;

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
    public $instanceId;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var bool
     */
    public $outboundScenario;

    /**
     * @var int
     */
    public $reserved;

    /**
     * @var string[]
     */
    public $signedSkillGroupIdList;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userState;

    /**
     * @var string
     */
    public $workMode;
    protected $_name = [
        'breakCode' => 'BreakCode',
        'deviceId' => 'DeviceId',
        'extension' => 'Extension',
        'heartbeat' => 'Heartbeat',
        'instanceId' => 'InstanceId',
        'jobId' => 'JobId',
        'mobile' => 'Mobile',
        'outboundScenario' => 'OutboundScenario',
        'reserved' => 'Reserved',
        'signedSkillGroupIdList' => 'SignedSkillGroupIdList',
        'userId' => 'UserId',
        'userState' => 'UserState',
        'workMode' => 'WorkMode',
    ];

    public function validate()
    {
        if (\is_array($this->signedSkillGroupIdList)) {
            Model::validateArray($this->signedSkillGroupIdList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->breakCode) {
            $res['BreakCode'] = $this->breakCode;
        }

        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
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
            if (\is_array($this->signedSkillGroupIdList)) {
                $res['SignedSkillGroupIdList'] = [];
                $n1 = 0;
                foreach ($this->signedSkillGroupIdList as $item1) {
                    $res['SignedSkillGroupIdList'][$n1++] = $item1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BreakCode'])) {
            $model->breakCode = $map['BreakCode'];
        }

        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
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
                $model->signedSkillGroupIdList = [];
                $n1 = 0;
                foreach ($map['SignedSkillGroupIdList'] as $item1) {
                    $model->signedSkillGroupIdList[$n1++] = $item1;
                }
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
