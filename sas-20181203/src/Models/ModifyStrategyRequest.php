<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models;

use AlibabaCloud\Tea\Model;

class ModifyStrategyRequest extends Model
{
    /**
     * @description The type of the baseline check policy. Valid values:
     *
     *   **custom**: a custom baseline check policy
     *   **common**: a standard baseline check policy
     *
     * This parameter is required.
     * @example common
     *
     * @var string
     */
    public $customType;

    /**
     * @description The new interval of the baseline check. Valid values:
     *
     *   **1**: every 2 days
     *   **3**: every 4 days
     *   **7**: every 8 days
     *   **30**: every 31 days
     *
     * This parameter is required.
     * @example 1
     *
     * @var string
     */
    public $cycleDays;

    /**
     * @description The new time range during which the baseline check starts. Valid values:
     *
     *   **0**: The baseline check starts within the time range from 00:00 to 06:00.
     *   **6**: The baseline check starts within the time range from 06:00 to 12:00.
     *   **12**: The baseline check starts within the time range from 12:00 to 18:00.
     *   **18**: The baseline check starts within the time range from 18:00 to 24:00.
     *
     * >  This parameter is deprecated.
     * @example 18
     *
     * @var string
     */
    public $cycleStartTime;

    /**
     * @description The time when the baseline check based on the baseline check policy ends. Specify the time in the hh:mm:ss format.
     *
     * This parameter is required.
     * @example 05:00:00
     *
     * @var string
     */
    public $endTime;

    /**
     * @description The ID of the baseline check policy.
     *
     * @example 245
     *
     * @var string
     */
    public $id;

    /**
     * @description The new name of the baseline check policy.
     *
     * This parameter is required.
     * @example testStrategy
     *
     * @var string
     */
    public $name;

    /**
     * @description The custom configurations of the baseline. The value of this parameter is in the JSON format and contains the following fields:
     *
     *   **typeName**: the name of the baseline.
     *
     *   **checkDetails**: the details of the baseline. The value is in the JSON format.
     *
     *   **checkId**: the ID of the check item.
     *
     *   **rules**: the rule configurations. The value is in the JSON format.
     *
     *   **ruleId**: the ID of the rule.
     *
     *   **paramList**: the list of parameters in the rule. The value is in the JSON format.
     *
     *   **paramName**: the name of the parameter.
     *   **value**: the value of the parameter.
     *
     * @example [{"typeName":"hc_centos_6_custom","checkDetails":[{"checkId":4,"rules":[{"ruleId":"pass_min_days_login_defs.must.cus","paramList":[{"paramName":"range_val","value":"7"}]}]}]}]
     *
     * @var string
     */
    public $riskCustomParams;

    /**
     * @description The subtype of the baselines. You can call the [DescribeRiskType](~~DescribeRiskType~~) operation to query the subtypes of baselines.
     *
     * This parameter is required.
     * @example hc_exploit_redis
     *
     * @var string
     */
    public $riskSubTypeName;

    /**
     * @description The source IP address of the request.
     *
     * @example 192.168.X.X
     *
     * @var string
     */
    public $sourceIp;

    /**
     * @description The time when the baseline check based on the baseline check policy starts. Specify the time in the hh:mm:ss format.
     *
     * This parameter is required.
     * @example 00:01:00
     *
     * @var string
     */
    public $startTime;

    /**
     * @description The method that is used to apply the baseline check policy. Valid values:
     *
     *   **groupId**: asset groups
     *   **uuid**: assets
     *
     * This parameter is required.
     * @example groupId
     *
     * @var string
     */
    public $targetType;
    protected $_name = [
        'customType'       => 'CustomType',
        'cycleDays'        => 'CycleDays',
        'cycleStartTime'   => 'CycleStartTime',
        'endTime'          => 'EndTime',
        'id'               => 'Id',
        'name'             => 'Name',
        'riskCustomParams' => 'RiskCustomParams',
        'riskSubTypeName'  => 'RiskSubTypeName',
        'sourceIp'         => 'SourceIp',
        'startTime'        => 'StartTime',
        'targetType'       => 'TargetType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customType) {
            $res['CustomType'] = $this->customType;
        }
        if (null !== $this->cycleDays) {
            $res['CycleDays'] = $this->cycleDays;
        }
        if (null !== $this->cycleStartTime) {
            $res['CycleStartTime'] = $this->cycleStartTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->riskCustomParams) {
            $res['RiskCustomParams'] = $this->riskCustomParams;
        }
        if (null !== $this->riskSubTypeName) {
            $res['RiskSubTypeName'] = $this->riskSubTypeName;
        }
        if (null !== $this->sourceIp) {
            $res['SourceIp'] = $this->sourceIp;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->targetType) {
            $res['TargetType'] = $this->targetType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyStrategyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CustomType'])) {
            $model->customType = $map['CustomType'];
        }
        if (isset($map['CycleDays'])) {
            $model->cycleDays = $map['CycleDays'];
        }
        if (isset($map['CycleStartTime'])) {
            $model->cycleStartTime = $map['CycleStartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RiskCustomParams'])) {
            $model->riskCustomParams = $map['RiskCustomParams'];
        }
        if (isset($map['RiskSubTypeName'])) {
            $model->riskSubTypeName = $map['RiskSubTypeName'];
        }
        if (isset($map['SourceIp'])) {
            $model->sourceIp = $map['SourceIp'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['TargetType'])) {
            $model->targetType = $map['TargetType'];
        }

        return $model;
    }
}
