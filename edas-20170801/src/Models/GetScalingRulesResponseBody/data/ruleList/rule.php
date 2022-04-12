<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetScalingRulesResponseBody\data\ruleList;

use AlibabaCloud\Tea\Model;

class rule extends Model
{
    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $cond;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var int
     */
    public $instNum;

    /**
     * @var int
     */
    public $loadNum;

    /**
     * @var string
     */
    public $metricType;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var string
     */
    public $multiAzPolicy;

    /**
     * @var string
     */
    public $resourceFrom;

    /**
     * @var int
     */
    public $rt;

    /**
     * @var string
     */
    public $specId;

    /**
     * @var int
     */
    public $step;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var int
     */
    public $templateVersion;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var string
     */
    public $vSwitchIds;

    /**
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
