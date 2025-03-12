<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\QueryGuidTaskListResponseBody\guideTaskConfigList;

use AlibabaCloud\Tea\Model;

class rewardData extends Model
{
    /**
     * @description Indicates whether the reward is claimed. Valid values:
     *
     *   **1**: no.
     *   **2**: yes.
     *
     * @example 1
     *
     * @var string
     */
    public $isRewardTaked;

    /**
     * @description The name of the reward. Valid values:
     *
     *   **addTrialDay**: the days of trial use.
     *   **addAntiRansomwareCapacity**: the anti-ransomware capacity.
     *   **addImageScanAuthCount**: the quota for container image scan.
     *   **addWebLockAuthCount**: the quota for web tamper proofing.
     *   **addSlsCapacity**: the log storage capacity.
     *
     * @example addWebLockAuthCount
     *
     * @var string
     */
    public $reward;

    /**
     * @description The reward configuration. The value of this parameter is in the JSON format.
     *
     * >  The key indicates the reward type, and the value indicates the number of rewards. Valid values of key:
     *
     *   **webLockAuthCount**: the quota for web tamper proofing.
     *   **webLockAuthCount**: the anti-ransomware capacity. Unit: GB.
     *   **slsCapacity**: the log storage capacity. Unit: GB.
     *   **days**: the days of trial use.
     *   **imageScanAuthCount**: the quota for container image scan.
     *   **honeypotAuthCount**: the quota for cloud honeypot.
     *
     * @example {"days":60,"ransomwareCapacity":100}
     *
     * @var string
     */
    public $rewardConfig;
    protected $_name = [
        'isRewardTaked' => 'IsRewardTaked',
        'reward'        => 'Reward',
        'rewardConfig'  => 'RewardConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isRewardTaked) {
            $res['IsRewardTaked'] = $this->isRewardTaked;
        }
        if (null !== $this->reward) {
            $res['Reward'] = $this->reward;
        }
        if (null !== $this->rewardConfig) {
            $res['RewardConfig'] = $this->rewardConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rewardData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsRewardTaked'])) {
            $model->isRewardTaked = $map['IsRewardTaked'];
        }
        if (isset($map['Reward'])) {
            $model->reward = $map['Reward'];
        }
        if (isset($map['RewardConfig'])) {
            $model->rewardConfig = $map['RewardConfig'];
        }

        return $model;
    }
}
