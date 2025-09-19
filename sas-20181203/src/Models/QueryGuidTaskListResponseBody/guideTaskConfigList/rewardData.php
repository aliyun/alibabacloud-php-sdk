<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\QueryGuidTaskListResponseBody\guideTaskConfigList;

use AlibabaCloud\Dara\Model;

class rewardData extends Model
{
    /**
     * @var string
     */
    public $isRewardTaked;

    /**
     * @var string
     */
    public $reward;

    /**
     * @var string
     */
    public $rewardConfig;
    protected $_name = [
        'isRewardTaked' => 'IsRewardTaked',
        'reward' => 'Reward',
        'rewardConfig' => 'RewardConfig',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
