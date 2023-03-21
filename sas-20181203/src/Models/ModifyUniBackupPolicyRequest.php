<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyUniBackupPolicyRequest extends Model
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
     * @var mixed[]
     */
    public $fullPlan;

    /**
     * @var mixed[]
     */
    public $incPlan;

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
        'fullPlan'        => 'FullPlan',
        'incPlan'         => 'IncPlan',
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
        if (null !== $this->fullPlan) {
            $res['FullPlan'] = $this->fullPlan;
        }
        if (null !== $this->incPlan) {
            $res['IncPlan'] = $this->incPlan;
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
     * @return ModifyUniBackupPolicyRequest
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
            $model->fullPlan = $map['FullPlan'];
        }
        if (isset($map['IncPlan'])) {
            $model->incPlan = $map['IncPlan'];
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
