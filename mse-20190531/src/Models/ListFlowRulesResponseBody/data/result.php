<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListFlowRulesResponseBody\data;

use AlibabaCloud\Dara\Model;

class result extends Model
{
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
    public $controlBehavior;
    /**
     * @var bool
     */
    public $enable;
    /**
     * @var string
     */
    public $fallbackObject;
    /**
     * @var string
     */
    public $limitApp;
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
    public $regionId;
    /**
     * @var string
     */
    public $resource;
    /**
     * @var int
     */
    public $resourceType;
    /**
     * @var int
     */
    public $ruleId;
    /**
     * @var float
     */
    public $threshold;
    /**
     * @var mixed[]
     */
    public $trafficTags;
    protected $_name = [
        'appId'             => 'AppId',
        'appName'           => 'AppName',
        'controlBehavior'   => 'ControlBehavior',
        'enable'            => 'Enable',
        'fallbackObject'    => 'FallbackObject',
        'limitApp'          => 'LimitApp',
        'maxQueueingTimeMs' => 'MaxQueueingTimeMs',
        'metricType'        => 'MetricType',
        'namespace'         => 'Namespace',
        'regionId'          => 'RegionId',
        'resource'          => 'Resource',
        'resourceType'      => 'ResourceType',
        'ruleId'            => 'RuleId',
        'threshold'         => 'Threshold',
        'trafficTags'       => 'TrafficTags',
    ];

    public function validate()
    {
        if (\is_array($this->trafficTags)) {
            Model::validateArray($this->trafficTags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }

        if (null !== $this->controlBehavior) {
            $res['ControlBehavior'] = $this->controlBehavior;
        }

        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        if (null !== $this->fallbackObject) {
            $res['FallbackObject'] = $this->fallbackObject;
        }

        if (null !== $this->limitApp) {
            $res['LimitApp'] = $this->limitApp;
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

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }

        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }

        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }

        if (null !== $this->trafficTags) {
            if (\is_array($this->trafficTags)) {
                $res['TrafficTags'] = [];
                foreach ($this->trafficTags as $key1 => $value1) {
                    $res['TrafficTags'][$key1] = $value1;
                }
            }
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }

        if (isset($map['ControlBehavior'])) {
            $model->controlBehavior = $map['ControlBehavior'];
        }

        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        if (isset($map['FallbackObject'])) {
            $model->fallbackObject = $map['FallbackObject'];
        }

        if (isset($map['LimitApp'])) {
            $model->limitApp = $map['LimitApp'];
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

        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }

        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }

        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }

        if (isset($map['TrafficTags'])) {
            if (!empty($map['TrafficTags'])) {
                $model->trafficTags = [];
                foreach ($map['TrafficTags'] as $key1 => $value1) {
                    $model->trafficTags[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
