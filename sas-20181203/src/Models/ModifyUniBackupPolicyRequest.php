<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyUniBackupPolicyRequest extends Model
{
    /**
     * @description The status of the anti-ransomware policy. Valid values:
     *
     *   **enabled**
     *   **disabled**
     *
     * @example sa
     *
     * @var string
     */
    public $accountName;

    /**
     * @description The data returned.
     *
     * @example Sa@****
     *
     * @var string
     */
    public $accountPassword;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example {"days":[4],"interval":1,"planType":"weekly","startTime":"22:00:00"}
     *
     * @var mixed[]
     */
    public $fullPlan;

    /**
     * @example {"interval":1,"planType":"daily","startTime":"23:30:00"}
     *
     * @var mixed[]
     */
    public $incPlan;

    /**
     * @description The name of the database account.
     *
     * @example 123
     *
     * @var int
     */
    public $policyId;

    /**
     * @description The password of the database account.
     *
     * @example databak
     *
     * @var string
     */
    public $policyName;

    /**
     * @example enabled
     *
     * @var string
     */
    public $policyStatus;

    /**
     * @description The policy for full backup. The value of this parameter is a JSON string that contains the following fields:
     *
     *   **start**: the start time of a backup task
     *   **interval**: the interval of backup tasks
     *   **type**: the unit of the interval
     *   **days**: the days of a week on which a backup task is performed
     *
     * @example 7
     *
     * @var int
     */
    public $retention;

    /**
     * @description The policy for incremental backup. The value of this parameter is a JSON string that contains the following fields:
     *
     *   **start**: the start time of a backup task
     *   **interval**: the interval of backup tasks
     *   **type**: the unit of the interval
     *   **days**: the days of a week on which a backup task is performed
     *
     * @example 1048576
     *
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
