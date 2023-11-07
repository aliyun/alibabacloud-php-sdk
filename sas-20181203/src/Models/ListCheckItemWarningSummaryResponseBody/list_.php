<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListCheckItemWarningSummaryResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @description The suggestion on the check item.
     *
     * @example In the Administrative Tools window, double-click Local Security Policy. In the Local Security Policy window that appears, choose Security Settings\\Local Policies\\Audit Policy, configure all audit policies as: `Success, Failure`.
     *
     * @var string
     */
    public $advice;

    /**
     * @var string[]
     */
    public $affiliatedRiskTypes;

    /**
     * @var string[]
     */
    public $affiliatedRisks;

    /**
     * @description The alias of the baseline type.
     *
     * @example week_pa****
     *
     * @var string
     */
    public $alias;

    /**
     * @description The ID of the check item.
     *
     * @example 696
     *
     * @var int
     */
    public $checkId;

    /**
     * @description The description of the check item.
     *
     * @example Config the Event Audit policys
     *
     * @var string
     */
    public $checkItem;

    /**
     * @description The risk level of the check item.Valid values:
     *   **high**
     *  **medium**
     *   **low**
     *
     * @example high
     *
     * @var string
     */
    public $checkLevel;

    /**
     * @description The type of the check item.
     *
     * @example Security audit
     *
     * @var string
     */
    public $checkType;

    /**
     * @description Checks if the item belongs to the container runtime category.Valid values:
     *   **true**
     *  **false**
     *
     * @example true
     *
     * @var bool
     */
    public $containerCheckItem;

    /**
     * @description The description of the check item.
     *
     * @example Config the Event Audit policys
     *
     * @var string
     */
    public $description;

    /**
     * @description The type of the baseline.
     *
     * @example weak_password
     *
     * @var string
     */
    public $riskType;

    /**
     * @description The risk status of the check item.Valid values:
     *  **1**: failed
     *
     *  **3**: passed
     *
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @description The number of servers that are affected by the check item.
     *
     * @example 20
     *
     * @var int
     */
    public $warningMachineCount;
    protected $_name = [
        'advice'              => 'Advice',
        'affiliatedRiskTypes' => 'AffiliatedRiskTypes',
        'affiliatedRisks'     => 'AffiliatedRisks',
        'alias'               => 'Alias',
        'checkId'             => 'CheckId',
        'checkItem'           => 'CheckItem',
        'checkLevel'          => 'CheckLevel',
        'checkType'           => 'CheckType',
        'containerCheckItem'  => 'ContainerCheckItem',
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
        if (null !== $this->affiliatedRiskTypes) {
            $res['AffiliatedRiskTypes'] = $this->affiliatedRiskTypes;
        }
        if (null !== $this->affiliatedRisks) {
            $res['AffiliatedRisks'] = $this->affiliatedRisks;
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
        if (null !== $this->containerCheckItem) {
            $res['ContainerCheckItem'] = $this->containerCheckItem;
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
        if (isset($map['AffiliatedRiskTypes'])) {
            if (!empty($map['AffiliatedRiskTypes'])) {
                $model->affiliatedRiskTypes = $map['AffiliatedRiskTypes'];
            }
        }
        if (isset($map['AffiliatedRisks'])) {
            if (!empty($map['AffiliatedRisks'])) {
                $model->affiliatedRisks = $map['AffiliatedRisks'];
            }
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
        if (isset($map['ContainerCheckItem'])) {
            $model->containerCheckItem = $map['ContainerCheckItem'];
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
