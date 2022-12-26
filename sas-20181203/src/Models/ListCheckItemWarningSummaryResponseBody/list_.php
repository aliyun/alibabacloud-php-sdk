<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckItemWarningSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example In the Administrative Tools window, double-click Local Security Policy. In the Local Security Policy window that appears, choose Security Settings\\Local Policies\\Audit Policy, configure all audit policies as: `Success, Failure`.
     *
     * @var string
     */
    public $advice;

    /**
     * @example week_pa****
     *
     * @var string
     */
    public $alias;

    /**
     * @example 696
     *
     * @var int
     */
    public $checkId;

    /**
     * @example Config the Event Audit policys
     *
     * @var string
     */
    public $checkItem;

    /**
     * @example high
     *
     * @var string
     */
    public $checkLevel;

    /**
     * @example Security audit
     *
     * @var string
     */
    public $checkType;

    /**
     * @example Config the Event Audit policys
     *
     * @var string
     */
    public $description;

    /**
     * @example hc_best_secruity
     *
     * @var string
     */
    public $riskType;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @example 20
     *
     * @var int
     */
    public $warningMachineCount;
    protected $_name = [
        'advice'              => 'Advice',
        'alias'               => 'Alias',
        'checkId'             => 'CheckId',
        'checkItem'           => 'CheckItem',
        'checkLevel'          => 'CheckLevel',
        'checkType'           => 'CheckType',
        'description'         => 'Description',
        'riskType'            => 'RiskType',
        'status'              => 'Status',
        'warningMachineCount' => 'WarningMachineCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->advice) {
            $res['Advice'] = $this->advice;
        }
        if (null !== $this->alias) {
            $res['Alias'] = $this->alias;
        }
        if (null !== $this->checkId) {
            $res['CheckId'] = $this->checkId;
        }
        if (null !== $this->checkItem) {
            $res['CheckItem'] = $this->checkItem;
        }
        if (null !== $this->checkLevel) {
            $res['CheckLevel'] = $this->checkLevel;
        }
        if (null !== $this->checkType) {
            $res['CheckType'] = $this->checkType;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->riskType) {
            $res['RiskType'] = $this->riskType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->warningMachineCount) {
            $res['WarningMachineCount'] = $this->warningMachineCount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return list_
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Advice'])) {
            $model->advice = $map['Advice'];
        }
        if (isset($map['Alias'])) {
            $model->alias = $map['Alias'];
        }
        if (isset($map['CheckId'])) {
            $model->checkId = $map['CheckId'];
        }
        if (isset($map['CheckItem'])) {
            $model->checkItem = $map['CheckItem'];
        }
        if (isset($map['CheckLevel'])) {
            $model->checkLevel = $map['CheckLevel'];
        }
        if (isset($map['CheckType'])) {
            $model->checkType = $map['CheckType'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['RiskType'])) {
            $model->riskType = $map['RiskType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['WarningMachineCount'])) {
            $model->warningMachineCount = $map['WarningMachineCount'];
        }

        return $model;
    }
}
