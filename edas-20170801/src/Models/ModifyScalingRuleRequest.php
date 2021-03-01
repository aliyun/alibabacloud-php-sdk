<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models;

use AlibabaCloud\Tea\Model;

class ModifyScalingRuleRequest extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $inCondition;

    /**
     * @var bool
     */
    public $inEnable;

    /**
     * @var int
     */
    public $inCpu;

    /**
     * @var int
     */
    public $inDuration;

    /**
     * @var int
     */
    public $inInstanceNum;

    /**
     * @var int
     */
    public $inLoad;

    /**
     * @var int
     */
    public $inRT;

    /**
     * @var int
     */
    public $inStep;

    /**
     * @var string
     */
    public $outCondition;

    /**
     * @var int
     */
    public $outCPU;

    /**
     * @var int
     */
    public $outDuration;

    /**
     * @var bool
     */
    public $outEnable;

    /**
     * @var int
     */
    public $outInstanceNum;

    /**
     * @var int
     */
    public $outLoad;

    /**
     * @var int
     */
    public $outRT;

    /**
     * @var int
     */
    public $outStep;

    /**
     * @var string
     */
    public $resourceFrom;

    /**
     * @var string
     */
    public $multiAzPolicy;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vSwitchIds;

    /**
     * @var string
     */
    public $scalingPolicy;

    /**
     * @var string
     */
    public $templateInstanceId;

    /**
     * @var string
     */
    public $templateInstanceName;

    /**
     * @var string
     */
    public $password;

    /**
     * @var string
     */
    public $keyPairName;

    /**
     * @var bool
     */
    public $acceptEULA;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var int
     */
    public $templateVersion;
    protected $_name = [
        'appId'                => 'AppId',
        'groupId'              => 'GroupId',
        'inCondition'          => 'InCondition',
        'inEnable'             => 'InEnable',
        'inCpu'                => 'InCpu',
        'inDuration'           => 'InDuration',
        'inInstanceNum'        => 'InInstanceNum',
        'inLoad'               => 'InLoad',
        'inRT'                 => 'InRT',
        'inStep'               => 'InStep',
        'outCondition'         => 'OutCondition',
        'outCPU'               => 'OutCPU',
        'outDuration'          => 'OutDuration',
        'outEnable'            => 'OutEnable',
        'outInstanceNum'       => 'OutInstanceNum',
        'outLoad'              => 'OutLoad',
        'outRT'                => 'OutRT',
        'outStep'              => 'OutStep',
        'resourceFrom'         => 'ResourceFrom',
        'multiAzPolicy'        => 'MultiAzPolicy',
        'vpcId'                => 'VpcId',
        'vSwitchIds'           => 'VSwitchIds',
        'scalingPolicy'        => 'ScalingPolicy',
        'templateInstanceId'   => 'TemplateInstanceId',
        'templateInstanceName' => 'TemplateInstanceName',
        'password'             => 'Password',
        'keyPairName'          => 'KeyPairName',
        'acceptEULA'           => 'AcceptEULA',
        'templateId'           => 'TemplateId',
        'templateVersion'      => 'TemplateVersion',
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
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->inCondition) {
            $res['InCondition'] = $this->inCondition;
        }
        if (null !== $this->inEnable) {
            $res['InEnable'] = $this->inEnable;
        }
        if (null !== $this->inCpu) {
            $res['InCpu'] = $this->inCpu;
        }
        if (null !== $this->inDuration) {
            $res['InDuration'] = $this->inDuration;
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
        if (null !== $this->outCondition) {
            $res['OutCondition'] = $this->outCondition;
        }
        if (null !== $this->outCPU) {
            $res['OutCPU'] = $this->outCPU;
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
        if (null !== $this->resourceFrom) {
            $res['ResourceFrom'] = $this->resourceFrom;
        }
        if (null !== $this->multiAzPolicy) {
            $res['MultiAzPolicy'] = $this->multiAzPolicy;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = $this->vSwitchIds;
        }
        if (null !== $this->scalingPolicy) {
            $res['ScalingPolicy'] = $this->scalingPolicy;
        }
        if (null !== $this->templateInstanceId) {
            $res['TemplateInstanceId'] = $this->templateInstanceId;
        }
        if (null !== $this->templateInstanceName) {
            $res['TemplateInstanceName'] = $this->templateInstanceName;
        }
        if (null !== $this->password) {
            $res['Password'] = $this->password;
        }
        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }
        if (null !== $this->acceptEULA) {
            $res['AcceptEULA'] = $this->acceptEULA;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['InCondition'])) {
            $model->inCondition = $map['InCondition'];
        }
        if (isset($map['InEnable'])) {
            $model->inEnable = $map['InEnable'];
        }
        if (isset($map['InCpu'])) {
            $model->inCpu = $map['InCpu'];
        }
        if (isset($map['InDuration'])) {
            $model->inDuration = $map['InDuration'];
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
        if (isset($map['OutCondition'])) {
            $model->outCondition = $map['OutCondition'];
        }
        if (isset($map['OutCPU'])) {
            $model->outCPU = $map['OutCPU'];
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
        if (isset($map['ResourceFrom'])) {
            $model->resourceFrom = $map['ResourceFrom'];
        }
        if (isset($map['MultiAzPolicy'])) {
            $model->multiAzPolicy = $map['MultiAzPolicy'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VSwitchIds'])) {
            $model->vSwitchIds = $map['VSwitchIds'];
        }
        if (isset($map['ScalingPolicy'])) {
            $model->scalingPolicy = $map['ScalingPolicy'];
        }
        if (isset($map['TemplateInstanceId'])) {
            $model->templateInstanceId = $map['TemplateInstanceId'];
        }
        if (isset($map['TemplateInstanceName'])) {
            $model->templateInstanceName = $map['TemplateInstanceName'];
        }
        if (isset($map['Password'])) {
            $model->password = $map['Password'];
        }
        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }
        if (isset($map['AcceptEULA'])) {
            $model->acceptEULA = $map['AcceptEULA'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }

        return $model;
    }
}
