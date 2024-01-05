<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Hbr\V20170908\Models\DescribeBackupPlansResponseBody\backupPlans\backupPlan;

use AlibabaCloud\Tea\Model;

class trialInfo extends Model
{
    /**
     * @description Indicates whether you are billed based on the pay-as-you-go method after the free trial ends.
     *
     * @example true
     *
     * @var bool
     */
    public $keepAfterTrialExpiration;

    /**
     * @description The expiration time of the free trial.
     *
     * @example 1584597600
     *
     * @var int
     */
    public $trialExpireTime;

    /**
     * @description The start time of the free trial.
     *
     * @example 1579413159
     *
     * @var int
     */
    public $trialStartTime;

    /**
     * @description The time when the free-trial backup vault was released.
     *
     * @example 1594965600
     *
     * @var int
     */
    public $trialVaultReleaseTime;
    protected $_name = [
        'keepAfterTrialExpiration' => 'KeepAfterTrialExpiration',
        'trialExpireTime'          => 'TrialExpireTime',
        'trialStartTime'           => 'TrialStartTime',
        'trialVaultReleaseTime'    => 'TrialVaultReleaseTime',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return trialInfo
     */
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
