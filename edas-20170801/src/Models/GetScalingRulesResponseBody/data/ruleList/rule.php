<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\GetScalingRulesResponseBody\data\ruleList;

use AlibabaCloud\Tea\Model;

class rule extends Model
{
    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var int
     */
    public $updateTime;

    /**
     * @var int
     */
    public $rt;

    /**
     * @var int
     */
    public $createTime;

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
    public $specId;

    /**
     * @var string
     */
    public $mode;

    /**
     * @var int
     */
    public $loadNum;

    /**
     * @var int
     */
    public $templateVersion;

    /**
     * @var string
     */
    public $cond;

    /**
     * @var int
     */
    public $step;

    /**
     * @var int
     */
    public $cpu;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var int
     */
    public $instNum;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var int
     */
    public $duration;

    /**
     * @var string
     */
    public $vSwitchIds;

    /**
     * @var string
     */
    public $metricType;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var bool
     */
    public $enable;
    protected $_name = [
        'vpcId'           => 'VpcId',
        'updateTime'      => 'UpdateTime',
        'rt'              => 'Rt',
        'createTime'      => 'CreateTime',
        'resourceFrom'    => 'ResourceFrom',
        'multiAzPolicy'   => 'MultiAzPolicy',
        'specId'          => 'SpecId',
        'mode'            => 'Mode',
        'loadNum'         => 'LoadNum',
        'templateVersion' => 'TemplateVersion',
        'cond'            => 'Cond',
        'step'            => 'Step',
        'cpu'             => 'Cpu',
        'groupId'         => 'GroupId',
        'instNum'         => 'InstNum',
        'appId'           => 'AppId',
        'duration'        => 'Duration',
        'vSwitchIds'      => 'VSwitchIds',
        'metricType'      => 'MetricType',
        'templateId'      => 'TemplateId',
        'enable'          => 'Enable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }
        if (null !== $this->rt) {
            $res['Rt'] = $this->rt;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->resourceFrom) {
            $res['ResourceFrom'] = $this->resourceFrom;
        }
        if (null !== $this->multiAzPolicy) {
            $res['MultiAzPolicy'] = $this->multiAzPolicy;
        }
        if (null !== $this->specId) {
            $res['SpecId'] = $this->specId;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->loadNum) {
            $res['LoadNum'] = $this->loadNum;
        }
        if (null !== $this->templateVersion) {
            $res['TemplateVersion'] = $this->templateVersion;
        }
        if (null !== $this->cond) {
            $res['Cond'] = $this->cond;
        }
        if (null !== $this->step) {
            $res['Step'] = $this->step;
        }
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->instNum) {
            $res['InstNum'] = $this->instNum;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->vSwitchIds) {
            $res['VSwitchIds'] = $this->vSwitchIds;
        }
        if (null !== $this->metricType) {
            $res['MetricType'] = $this->metricType;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
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
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }
        if (isset($map['Rt'])) {
            $model->rt = $map['Rt'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ResourceFrom'])) {
            $model->resourceFrom = $map['ResourceFrom'];
        }
        if (isset($map['MultiAzPolicy'])) {
            $model->multiAzPolicy = $map['MultiAzPolicy'];
        }
        if (isset($map['SpecId'])) {
            $model->specId = $map['SpecId'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['LoadNum'])) {
            $model->loadNum = $map['LoadNum'];
        }
        if (isset($map['TemplateVersion'])) {
            $model->templateVersion = $map['TemplateVersion'];
        }
        if (isset($map['Cond'])) {
            $model->cond = $map['Cond'];
        }
        if (isset($map['Step'])) {
            $model->step = $map['Step'];
        }
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['InstNum'])) {
            $model->instNum = $map['InstNum'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['VSwitchIds'])) {
            $model->vSwitchIds = $map['VSwitchIds'];
        }
        if (isset($map['MetricType'])) {
            $model->metricType = $map['MetricType'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        return $model;
    }
}
