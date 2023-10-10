<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ModifyScalingRuleRequest extends Model
{
    /**
     * @description Set the value to true if scale-outs are allowed.
     *
     * @example true
     *
     * @var bool
     */
    public $acceptEULA;

    /**
     * @description The ID of the application.
     *
     * @example 74ee****-db65-4322-a1f6-bcb60e5b****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the instance group to which the application is deployed.
     *
     * @example 8123db90-880f-486f-****-************
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The relationship among the conditions that trigger a scale-in.
     *
     *   OR: one of the conditions
     *   AND: all conditions
     *
     * @example "OR"
     *
     * @var string
     */
    public $inCondition;

    /**
     * @description The CPU utilization that triggers a scale-in.
     *
     * @example 50
     *
     * @var int
     */
    public $inCpu;

    /**
     * @description The duration in which the metric threshold is exceeded. Unit: minutes.
     *
     * @example 50
     *
     * @var int
     */
    public $inDuration;

    /**
     * @description Specifies whether to allow scale-ins.
     *
     *   true: allows scale-ins.
     *   false: does not allow scale-ins.
     *
     * @example true
     *
     * @var bool
     */
    public $inEnable;

    /**
     * @description The minimum number of instances that must be retained in each group when a scale-in is performed.
     *
     * @example 3
     *
     * @var int
     */
    public $inInstanceNum;

    /**
     * @description The system load that triggers a scale-in.
     *
     * @example 50
     *
     * @var int
     */
    public $inLoad;

    /**
     * @description The minimum service latency that triggers a scale-in. The lower limit is 0. Unit: milliseconds.
     *
     * @example 50
     *
     * @var int
     */
    public $inRT;

    /**
     * @description The number of instances that are removed during each scale-in.
     *
     * @example 1
     *
     * @var int
     */
    public $inStep;

    /**
     * @description The key pair that is used to log on to the instance. This parameter takes effect only if you choose to create instances based on the specifications of an existing instance during a scale-out.
     *
     * @example "tdy218"
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @description The multi-zone scaling policy. Valid values:
     *
     *   PRIORITY: The vSwitch that is first selected has the highest priority.
     *   BALANCE: This policy evenly distributes instances across zones in which the vSwitches reside.
     *
     * @example "PRIORITY"
     *
     * @var string
     */
    public $multiAzPolicy;

    /**
     * @description The CPU utilization that triggers a scale-out.
     *
     * @example 50
     *
     * @var int
     */
    public $outCPU;

    /**
     * @description The relationship among the conditions that trigger a scale-out.
     *
     *   OR: one of the conditions
     *   AND: all conditions
     *
     * @example "OR"
     *
     * @var string
     */
    public $outCondition;

    /**
     * @description The duration in which the metric threshold is exceeded. Unit: minutes.
     *
     * @example 50
     *
     * @var int
     */
    public $outDuration;

    /**
     * @description Specifies whether to allow scale-outs.
     *
     * @example true
     *
     * @var bool
     */
    public $outEnable;

    /**
     * @description The maximum number of instances in each group when a scale-out is performed.
     *
     * @example 10
     *
     * @var int
     */
    public $outInstanceNum;

    /**
     * @description The system load that triggers a scale-out.
     *
     * @example 50
     *
     * @var int
     */
    public $outLoad;

    /**
     * @description The minimum service latency that triggers a scale-out. The lower limit is 0. Unit: milliseconds.
     *
     * @example 0
     *
     * @var int
     */
    public $outRT;

    /**
     * @description The number of instances that are added during each scale-out.
     *
     * @example 0
     *
     * @var int
     */
    public $outStep;

    /**
     * @description The password that is used to log on to the instance. This parameter takes effect only if you choose to create instances based on the specifications of an existing instance during a scale-out.
     *
     * @example "Pwd*****"
     *
     * @var string
     */
    public $password;

    /**
     * @description The source of the instance to be added during a scale-out. Valid values:
     *
     *   NEW: elastic resources
     *   AVAILABLE: existing resources If you prefer existing resources to elastic resources, set this parameter to AVAILABLE_FIRST.
     *
     * If you set this parameter to NEW or AVAILABLE_FIRST, you must specify the auto-scaling parameters. If you set this parameter to NEW, instances are created based on a launch template or the specifications of an existing instance.
     * @example "AVAILABLE"
     *
     * @var string
     */
    public $resourceFrom;

    /**
     * @description The instance handling mode during a scale-in. Valid values:
     *
     *   release: When a scale-in is performed, instances that are no longer used are released.
     *   recycle: When a scale-in is performed, instances that are no longer used are stopped and reclaimed.
     *
     * @example "release"
     *
     * @var string
     */
    public $scalingPolicy;

    /**
     * @description The ID of the launch template that is used to create instances during a scale-out. This parameter takes effect only if you set the OutEnable parameter to true. This parameter takes precedence over the TemplateInstanceId parameter.
     *
     * @example "lt-wz9hkhn8wp*****"
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The ID of the instance whose specifications are used to create instances during a scale-out. This parameter is valid only when you set the OutEnable parameter to true.
     *
     * @example "1"
     *
     * @var string
     */
    public $templateInstanceId;

    /**
     * @description The name of the instance whose specifications are used to create instances during a scale-out. This parameter takes effect only if you specify the TemplateInstanceId parameter.
     *
     * @example "tpl-tdy218"
     *
     * @var string
     */
    public $templateInstanceName;

    /**
     * @description The version of the launch template that is used to create instances during a scale-out. This parameter takes effect only if you set the OutEnable parameter to true. To use the default template version, set this parameter to `-1`. Otherwise, set this parameter to the version that you want to use.
     *
     * @example -1
     *
     * @var int
     */
    public $templateVersion;

    /**
     * @description The IDs of the vSwitches that are associated with the VPC. Separate multiple IDs with commas (,).
     *
     * @example "vsw-bp1ldxs3d4fd*****"
     *
     * @var string
     */
    public $vSwitchIds;

    /**
     * @description The ID of the virtual private cloud (VPC) that is associated with the instances created based on a launch template or the specifications of an existing instance.
     *
     * @example "vpc-bp1j55oz3bg*****"
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'acceptEULA'           => 'AcceptEULA',
        'appId'                => 'AppId',
        'groupId'              => 'GroupId',
        'inCondition'          => 'InCondition',
        'inCpu'                => 'InCpu',
        'inDuration'           => 'InDuration',
        'inEnable'             => 'InEnable',
        'inInstanceNum'        => 'InInstanceNum',
        'inLoad'               => 'InLoad',
        'inRT'                 => 'InRT',
        'inStep'               => 'InStep',
        'keyPairName'          => 'KeyPairName',
        'multiAzPolicy'        => 'MultiAzPolicy',
        'outCPU'               => 'OutCPU',
        'outCondition'         => 'OutCondition',
        'outDuration'          => 'OutDuration',
        'outEnable'            => 'OutEnable',
        'outInstanceNum'       => 'OutInstanceNum',
        'outLoad'              => 'OutLoad',
        'outRT'                => 'OutRT',
        'outStep'              => 'OutStep',
        'password'             => 'Password',
        'resourceFrom'         => 'ResourceFrom',
        'scalingPolicy'        => 'ScalingPolicy',
        'templateId'           => 'TemplateId',
        'templateInstanceId'   => 'TemplateInstanceId',
        'templateInstanceName' => 'TemplateInstanceName',
        'templateVersion'      => 'TemplateVersion',
        'vSwitchIds'           => 'VSwitchIds',
        'vpcId'                => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptEULA) {
            $res['AcceptEULA'] = $this->acceptEULA;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->inCondition) {
            $res['InCondition'] = $this->inCondition;
        }
        if (null !== $this->inCpu) {
            $res['InCpu'] = $this->inCpu;
        }
        if (null !== $this->inDuration) {
            $res['InDuration'] = $this->inDuration;
        }
        if (null !== $this->inEnable) {
            $res['InEnable'] = $this->inEnable;
        }
        if (null !== $this->inInstanceNum) {
            $res['InInstanceNum'] = $this->inInstanceNum;
        }
        if (null !== $this->inLoad) {
            $res['InLoad'] = $this->inLoad;
        }
        if (null !== $this->inRT) {
            $res['InRT'] = $this->inRT;
        }
        if (null !== $this->inStep) {
            $res['InStep'] = $this->inStep;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->multiAzPolicy) {
            $res['MultiAzPolicy'] = $this->multiAzPolicy;
        }
        if (null !== $this->outCPU) {
            $res['OutCPU'] = $this->outCPU;
        }
        if (null !== $this->outCondition) {
            $res['OutCondition'] = $this->outCondition;
        }
        if (null !== $this->outDuration) {
            $res['OutDuration'] = $this->outDuration;
        }
        if (null !== $this->outEnable) {
            $res['OutEnable'] = $this->outEnable;
        }
        if (null !== $this->outInstanceNum) {
            $res['OutInstanceNum'] = $this->outInstanceNum;
        }
        if (null !== $this->outLoad) {
            $res['OutLoad'] = $this->outLoad;
        }
        if (null !== $this->outRT) {
            $res['OutRT'] = $this->outRT;
        }
        if (null !== $this->outStep) {
            $res['OutStep'] = $this->outStep;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->resourceFrom) {
            $res['ResourceFrom'] = $this->resourceFrom;
        }
        if (null !== $this->scalingPolicy) {
            $res['ScalingPolicy'] = $this->scalingPolicy;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateInstanceId) {
            $res['TemplateInstanceId'] = $this->templateInstanceId;
        }
        if (null !== $this->templateInstanceName) {
            $res['TemplateInstanceName'] = $this->templateInstanceName;
        }
        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
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
     * @return ModifyScalingRuleRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptEULA'])) {
            $model->acceptEULA = $map['AcceptEULA'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['InCondition'])) {
            $model->inCondition = $map['InCondition'];
        }
        if (isset($map['InCpu'])) {
            $model->inCpu = $map['InCpu'];
        }
        if (isset($map['InDuration'])) {
            $model->inDuration = $map['InDuration'];
        }
        if (isset($map['InEnable'])) {
            $model->inEnable = $map['InEnable'];
        }
        if (isset($map['InInstanceNum'])) {
            $model->inInstanceNum = $map['InInstanceNum'];
        }
        if (isset($map['InLoad'])) {
            $model->inLoad = $map['InLoad'];
        }
        if (isset($map['InRT'])) {
            $model->inRT = $map['InRT'];
        }
        if (isset($map['InStep'])) {
            $model->inStep = $map['InStep'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['MultiAzPolicy'])) {
            $model->multiAzPolicy = $map['MultiAzPolicy'];
        }
        if (isset($map['OutCPU'])) {
            $model->outCPU = $map['OutCPU'];
        }
        if (isset($map['OutCondition'])) {
            $model->outCondition = $map['OutCondition'];
        }
        if (isset($map['OutDuration'])) {
            $model->outDuration = $map['OutDuration'];
        }
        if (isset($map['OutEnable'])) {
            $model->outEnable = $map['OutEnable'];
        }
        if (isset($map['OutInstanceNum'])) {
            $model->outInstanceNum = $map['OutInstanceNum'];
        }
        if (isset($map['OutLoad'])) {
            $model->outLoad = $map['OutLoad'];
        }
        if (isset($map['OutRT'])) {
            $model->outRT = $map['OutRT'];
        }
        if (isset($map['OutStep'])) {
            $model->outStep = $map['OutStep'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['ResourceFrom'])) {
            $model->resourceFrom = $map['ResourceFrom'];
        }
        if (isset($map['ScalingPolicy'])) {
            $model->scalingPolicy = $map['ScalingPolicy'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateInstanceId'])) {
            $model->templateInstanceId = $map['TemplateInstanceId'];
        }
        if (isset($map['TemplateInstanceName'])) {
            $model->templateInstanceName = $map['TemplateInstanceName'];
        }
        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
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
