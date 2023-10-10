<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetScalingRulesResponseBody\data\ruleList;

use AlibabaCloud\Tea\Model;

class rule extends Model
{
    /**
     * @description The ID of the application.
     *
     * @example 33e39be9-3e5f-*********
     *
     * @var string
     */
    public $appId;

    /**
     * @description The relationship among the conditions that trigger the scaling rule.
     *
     *   OR: one of the conditions
     *   AND: all conditions
     *
     * @example OR
     *
     * @var string
     */
    public $cond;

    /**
     * @description The minimum CPU utilization that triggers the scaling rule.
     *
     * @example 1
     *
     * @var int
     */
    public $cpu;

    /**
     * @description The time when the scaling rule was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1574251601801
     *
     * @var int
     */
    public $createTime;

    /**
     * @description The duration of the scaling rule. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1574251601
     *
     * @var int
     */
    public $duration;

    /**
     * @description Indicates whether scale-ins or scale-outs are allowed. Valid values:
     *
     *   true: Scale-ins or scale-outs are allowed.
     *   false: Scale-ins or scale-outs are disallowed.
     *
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @description The ID of the instance group to which the application is deployed.
     *
     * @example d8bb9d60-91b5-4cdf-****-************
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The maximum number of instances in the group when a scale-out is performed, or the minimum number of instances in the group when a scale-in is performed.
     *
     * @example 2
     *
     * @var int
     */
    public $instNum;

    /**
     * @description The system load that triggers the scaling rule. The system load is evaluated based on the number of processes that are being executed by CPUs and the number of processes that wait to be executed by CPUs.
     *
     * @example 1
     *
     * @var int
     */
    public $loadNum;

    /**
     * @description The type of the metric.
     *
     * @example HSF
     *
     * @var string
     */
    public $metricType;

    /**
     * @description The type of the scaling rule. Valid values:
     *
     *   SCALE_IN: scale-in rules
     *   SCALE_OUT: scale-out rules
     *
     * @example SCALE_OUT
     *
     * @var string
     */
    public $mode;

    /**
     * @description The policy of auto scaling across multiple zones. Valid values:
     *
     *   PRIORITY: The vSwitch that is first selected has the highest priority.
     *   BALANCE: This policy evenly distributes instances across zones in which the vSwitches reside.
     *
     * @example PRIORITY
     *
     * @var string
     */
    public $multiAzPolicy;

    /**
     * @description The source of the instance that you want to add during a scale-out. Valid values:
     *
     *   NEW: Elastic resources are used.
     *   AVAILABLE: The existing resources are used.
     *   AVAILABLE_FIRST: The existing resources are used first.
     *
     * @example AVAILABLE
     *
     * @var string
     */
    public $resourceFrom;

    /**
     * @description The service latency that triggers the scaling rule. Unit: milliseconds.
     *
     * @example 1
     *
     * @var int
     */
    public $rt;

    /**
     * @description The ID of the specification.
     *
     * @example 03f493c0-xxxx-xxxx-xxxx-12e85cadeb41
     *
     * @var string
     */
    public $specId;

    /**
     * @description The number of instances that are added during each scale-out or removed during each scale-in.
     *
     * @example 1
     *
     * @var int
     */
    public $step;

    /**
     * @description The ID of the launch template.
     *
     * @example lt-bp1xxxxn73pxxxxf83l
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The version of the launch template.
     *
     * @example 1143542
     *
     * @var int
     */
    public $templateVersion;

    /**
     * @description The time when the scaling rule was last modified. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since January 1, 1970, 00:00:00 UTC.
     *
     * @example 1574251601785
     *
     * @var int
     */
    public $updateTime;

    /**
     * @description The IDs of the vSwitches. The IDs of multiple vSwitches are separated by commas (,).
     *
     * @example vsw-mxxxxkxxxx4xxxxwbionj
     *
     * @var string
     */
    public $vSwitchIds;

    /**
     * @description The ID of the VPC.
     *
     * @example vpc-wz9b246z******
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'appId'           => 'AppId',
        'cond'            => 'Cond',
        'cpu'             => 'Cpu',
        'createTime'      => 'CreateTime',
        'duration'        => 'Duration',
        'enable'          => 'Enable',
        'groupId'         => 'GroupId',
        'instNum'         => 'InstNum',
        'loadNum'         => 'LoadNum',
        'metricType'      => 'MetricType',
        'mode'            => 'Mode',
        'multiAzPolicy'   => 'MultiAzPolicy',
        'resourceFrom'    => 'ResourceFrom',
        'rt'              => 'Rt',
        'specId'          => 'SpecId',
        'step'            => 'Step',
        'templateId'      => 'TemplateId',
        'templateVersion' => 'TemplateVersion',
        'updateTime'      => 'UpdateTime',
        'vSwitchIds'      => 'VSwitchIds',
        'vpcId'           => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->cond) {
            $res['Cond'] = $this->cond;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->instNum) {
            $res['InstNum'] = $this->instNum;
        }
        if (null !== $this->loadNum) {
            $res['LoadNum'] = $this->loadNum;
        }
        if (null !== $this->metricType) {
            $res['MetricType'] = $this->metricType;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->multiAzPolicy) {
            $res['MultiAzPolicy'] = $this->multiAzPolicy;
        }
        if (null !== $this->resourceFrom) {
            $res['ResourceFrom'] = $this->resourceFrom;
        }
        if (null !== $this->rt) {
            $res['Rt'] = $this->rt;
        }
        if (null !== $this->specId) {
            $res['SpecId'] = $this->specId;
        }
        if (null !== $this->step) {
            $res['Step'] = $this->step;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = $this->vSwitchIds;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Cond'])) {
            $model->cond = $map['Cond'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['InstNum'])) {
            $model->instNum = $map['InstNum'];
        }
        if (isset($map['LoadNum'])) {
            $model->loadNum = $map['LoadNum'];
        }
        if (isset($map['MetricType'])) {
            $model->metricType = $map['MetricType'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['MultiAzPolicy'])) {
            $model->multiAzPolicy = $map['MultiAzPolicy'];
        }
        if (isset($map['ResourceFrom'])) {
            $model->resourceFrom = $map['ResourceFrom'];
        }
        if (isset($map['Rt'])) {
            $model->rt = $map['Rt'];
        }
        if (isset($map['SpecId'])) {
            $model->specId = $map['SpecId'];
        }
        if (isset($map['Step'])) {
            $model->step = $map['Step'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['VSwitchIds'])) {
            $model->vSwitchIds = $map['VSwitchIds'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
