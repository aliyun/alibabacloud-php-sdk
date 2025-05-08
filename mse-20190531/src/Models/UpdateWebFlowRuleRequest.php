<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models;

use AlibabaCloud\Dara\Model;

class UpdateWebFlowRuleRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var string
     */
    public $appId;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var int
     */
    public $burst;

    /**
     * @var int
     */
    public $controlBehavior;

    /**
     * @var bool
     */
    public $enable;

    /**
     * @var int
     */
    public $maxQueueingTimeMs;

    /**
     * @var int
     */
    public $metricType;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $paramItem;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var int
     */
    public $resourceMode;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var int
     */
    public $statIntervalMs;

    /**
     * @var float
     */
    public $threshold;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'appId' => 'AppId',
        'appName' => 'AppName',
        'burst' => 'Burst',
        'controlBehavior' => 'ControlBehavior',
        'enable' => 'Enable',
        'maxQueueingTimeMs' => 'MaxQueueingTimeMs',
        'metricType' => 'MetricType',
        'namespace' => 'Namespace',
        'paramItem' => 'ParamItem',
        'regionId' => 'RegionId',
        'resourceMode' => 'ResourceMode',
        'ruleId' => 'RuleId',
        'statIntervalMs' => 'StatIntervalMs',
        'threshold' => 'Threshold',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }

        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->burst) {
            $res['Burst'] = $this->burst;
        }

        if (null !== $this->controlBehavior) {
            $res['ControlBehavior'] = $this->controlBehavior;
        }

        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->maxQueueingTimeMs) {
            $res['MaxQueueingTimeMs'] = $this->maxQueueingTimeMs;
        }

        if (null !== $this->metricType) {
            $res['MetricType'] = $this->metricType;
        }

        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }

        if (null !== $this->paramItem) {
            $res['ParamItem'] = $this->paramItem;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceMode) {
            $res['ResourceMode'] = $this->resourceMode;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->statIntervalMs) {
            $res['StatIntervalMs'] = $this->statIntervalMs;
        }

        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
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
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }

        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['Burst'])) {
            $model->burst = $map['Burst'];
        }

        if (isset($map['ControlBehavior'])) {
            $model->controlBehavior = $map['ControlBehavior'];
        }

        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['MaxQueueingTimeMs'])) {
            $model->maxQueueingTimeMs = $map['MaxQueueingTimeMs'];
        }

        if (isset($map['MetricType'])) {
            $model->metricType = $map['MetricType'];
        }

        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }

        if (isset($map['ParamItem'])) {
            $model->paramItem = $map['ParamItem'];
        }

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['ResourceMode'])) {
            $model->resourceMode = $map['ResourceMode'];
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['StatIntervalMs'])) {
            $model->statIntervalMs = $map['StatIntervalMs'];
        }

        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }

        return $model;
    }
}
