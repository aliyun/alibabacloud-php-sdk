<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupPlansResponseBody\backupPlans\backupPlan;

use AlibabaCloud\Dara\Model;

class trialInfo extends Model
{
    /**
     * @var bool
     */
    public $keepAfterTrialExpiration;

    /**
     * @var int
     */
    public $trialExpireTime;

    /**
     * @var int
     */
    public $trialStartTime;

    /**
     * @var int
     */
    public $trialVaultReleaseTime;
    protected $_name = [
        'keepAfterTrialExpiration' => 'KeepAfterTrialExpiration',
        'trialExpireTime' => 'TrialExpireTime',
        'trialStartTime' => 'TrialStartTime',
        'trialVaultReleaseTime' => 'TrialVaultReleaseTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->keepAfterTrialExpiration) {
            $res['KeepAfterTrialExpiration'] = $this->keepAfterTrialExpiration;
        }

        if (null !== $this->trialExpireTime) {
            $res['TrialExpireTime'] = $this->trialExpireTime;
        }

        if (null !== $this->trialStartTime) {
            $res['TrialStartTime'] = $this->trialStartTime;
        }

        if (null !== $this->trialVaultReleaseTime) {
            $res['TrialVaultReleaseTime'] = $this->trialVaultReleaseTime;
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
        if (isset($map['KeepAfterTrialExpiration'])) {
            $model->keepAfterTrialExpiration = $map['KeepAfterTrialExpiration'];
        }

        if (isset($map['TrialExpireTime'])) {
            $model->trialExpireTime = $map['TrialExpireTime'];
        }

        if (isset($map['TrialStartTime'])) {
            $model->trialStartTime = $map['TrialStartTime'];
        }

        if (isset($map['TrialVaultReleaseTime'])) {
            $model->trialVaultReleaseTime = $map['TrialVaultReleaseTime'];
        }

        return $model;
    }
}
