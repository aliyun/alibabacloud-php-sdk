<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyUniBackupPolicyShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $accountPassword;

    /**
     * @var string
     */
    public $fullPlanShrink;

    /**
     * @var string
     */
    public $incPlanShrink;

    /**
     * @var int
     */
    public $policyId;

    /**
     * @var string
     */
    public $policyName;

    /**
     * @var string
     */
    public $policyStatus;

    /**
     * @var int
     */
    public $retention;

    /**
     * @var int
     */
    public $speedLimiter;
    protected $_name = [
        'accountName'     => 'AccountName',
        'accountPassword' => 'AccountPassword',
        'fullPlanShrink'  => 'FullPlan',
        'incPlanShrink'   => 'IncPlan',
        'policyId'        => 'PolicyId',
        'policyName'      => 'PolicyName',
        'policyStatus'    => 'PolicyStatus',
        'retention'       => 'Retention',
        'speedLimiter'    => 'SpeedLimiter',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }
        if (null !== $this->accountPassword) {
            $res['AccountPassword'] = $this->accountPassword;
        }
        if (null !== $this->fullPlanShrink) {
            $res['FullPlan'] = $this->fullPlanShrink;
        }
        if (null !== $this->incPlanShrink) {
            $res['IncPlan'] = $this->incPlanShrink;
        }
        if (null !== $this->policyId) {
            $res['PolicyId'] = $this->policyId;
        }
        if (null !== $this->policyName) {
            $res['PolicyName'] = $this->policyName;
        }
        if (null !== $this->policyStatus) {
            $res['PolicyStatus'] = $this->policyStatus;
        }
        if (null !== $this->retention) {
            $res['Retention'] = $this->retention;
        }
        if (null !== $this->speedLimiter) {
            $res['SpeedLimiter'] = $this->speedLimiter;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyUniBackupPolicyShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }
        if (isset($map['AccountPassword'])) {
            $model->accountPassword = $map['AccountPassword'];
        }
        if (isset($map['FullPlan'])) {
            $model->fullPlanShrink = $map['FullPlan'];
        }
        if (isset($map['IncPlan'])) {
            $model->incPlanShrink = $map['IncPlan'];
        }
        if (isset($map['PolicyId'])) {
            $model->policyId = $map['PolicyId'];
        }
        if (isset($map['PolicyName'])) {
            $model->policyName = $map['PolicyName'];
        }
        if (isset($map['PolicyStatus'])) {
            $model->policyStatus = $map['PolicyStatus'];
        }
        if (isset($map['Retention'])) {
            $model->retention = $map['Retention'];
        }
        if (isset($map['SpeedLimiter'])) {
            $model->speedLimiter = $map['SpeedLimiter'];
        }

        return $model;
    }
}
