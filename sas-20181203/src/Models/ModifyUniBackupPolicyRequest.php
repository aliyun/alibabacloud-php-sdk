<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Dara\Model;

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
        if (\is_array($this->fullPlan)) {
            Model::validateArray($this->fullPlan);
        }
        if (\is_array($this->incPlan)) {
            Model::validateArray($this->incPlan);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }

        if (null !== $this->accountPassword) {
            $res['AccountPassword'] = $this->accountPassword;
        }

        if (null !== $this->fullPlan) {
            if (\is_array($this->fullPlan)) {
                $res['FullPlan'] = [];
                foreach ($this->fullPlan as $key1 => $value1) {
                    $res['FullPlan'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->incPlan) {
            if (\is_array($this->incPlan)) {
                $res['IncPlan'] = [];
                foreach ($this->incPlan as $key1 => $value1) {
                    $res['IncPlan'][$key1] = $value1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
            if (!empty($map['FullPlan'])) {
                $model->fullPlan = [];
                foreach ($map['FullPlan'] as $key1 => $value1) {
                    $model->fullPlan[$key1] = $value1;
                }
            }
        }

        if (isset($map['IncPlan'])) {
            if (!empty($map['IncPlan'])) {
                $model->incPlan = [];
                foreach ($map['IncPlan'] as $key1 => $value1) {
                    $model->incPlan[$key1] = $value1;
                }
            }
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
