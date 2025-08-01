<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mse\V20190531\Models\ListWebFlowRulesResponseBody\data;

use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @example hkhon1XXXX@c3df23522bXXXXX
     *
     * @var string
     */
    public $appId;

    /**
     * @example spring-cloud-a
     *
     * @var string
     */
    public $appName;

    /**
     * @example 0
     *
     * @var int
     */
    public $burst;

    /**
     * @example 0
     *
     * @var int
     */
    public $controlBehavior;

    /**
     * @example true
     *
     * @var bool
     */
    public $enable;

    /**
     * @example {\\"appName\\":\\"spring-cloud-a\\",\\"fallbackBehavior\\":{\\"webFallbackMode\\":0,\\"webRespContentType\\":0,\\"webRespMessage\\":\\"Blocked\\",\\"webRespStatusCode\\":429},\\"id\\":977,\\"name\\":\\"Fallback\\",\\"namespace\\":\\"default\\",\\"resourceClassification\\":1}
     *
     * @var string
     */
    public $fallbackObject;

    /**
     * @example 200
     *
     * @var int
     */
    public $maxQueueingTimeMs;

    /**
     * @example 1
     *
     * @var int
     */
    public $metricType;

    /**
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @example {"fieldName":"testKey","matchStrategy":2,"parseStrategy":2,"pattern":"testValue"}
     *
     * @var string
     */
    public $paramItem;

    /**
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @example /flow
     *
     * @var string
     */
    public $resource;

    /**
     * @example 0
     *
     * @var int
     */
    public $resourceMode;

    /**
     * @example 1
     *
     * @var int
     */
    public $resourceType;

    /**
     * @example 1
     *
     * @var string
     */
    public $ruleId;

    /**
     * @example 1000
     *
     * @var int
     */
    public $statIntervalMs;

    /**
     * @example 20
     *
     * @var float
     */
    public $threshold;
    protected $_name = [
        'appId' => 'AppId',
        'appName' => 'AppName',
        'burst' => 'Burst',
        'controlBehavior' => 'ControlBehavior',
        'enable' => 'Enable',
        'fallbackObject' => 'FallbackObject',
        'maxQueueingTimeMs' => 'MaxQueueingTimeMs',
        'metricType' => 'MetricType',
        'namespace' => 'Namespace',
        'paramItem' => 'ParamItem',
        'regionId' => 'RegionId',
        'resource' => 'Resource',
        'resourceMode' => 'ResourceMode',
        'resourceType' => 'ResourceType',
        'ruleId' => 'RuleId',
        'statIntervalMs' => 'StatIntervalMs',
        'threshold' => 'Threshold',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->fallbackObject) {
            $res['FallbackObject'] = $this->fallbackObject;
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
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }
        if (null !== $this->resourceMode) {
            $res['ResourceMode'] = $this->resourceMode;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
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

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['FallbackObject'])) {
            $model->fallbackObject = $map['FallbackObject'];
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
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }
        if (isset($map['ResourceMode'])) {
            $model->resourceMode = $map['ResourceMode'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
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
