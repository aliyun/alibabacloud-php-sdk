<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\ListHotParamRulesOfResourceResponseBody\data;

use AlibabaCloud\SDK\Ahasopenapi\V20190901\Models\ListHotParamRulesOfResourceResponseBody\data\datas\paramFlowItemList;
use AlibabaCloud\Tea\Model;

class datas extends Model
{
    /**
     * @var int
     */
    public $paramIdx;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var paramFlowItemList[]
     */
    public $paramFlowItemList;

    /**
     * @var int
     */
    public $statDurationSec;

    /**
     * @var int
     */
    public $burstCount;

    /**
     * @var int
     */
    public $ruleId;

    /**
     * @var string
     */
    public $resource;

    /**
     * @var string
     */
    public $appName;

    /**
     * @var int
     */
    public $maxQueueingTimeMs;

    /**
     * @var int
     */
    public $controlBehavior;

    /**
     * @var int
     */
    public $metricType;

    /**
     * @var float
     */
    public $threshold;

    /**
     * @var bool
     */
    public $enable;
    protected $_name = [
        'paramIdx'          => 'ParamIdx',
        'namespace'         => 'Namespace',
        'paramFlowItemList' => 'ParamFlowItemList',
        'statDurationSec'   => 'StatDurationSec',
        'burstCount'        => 'BurstCount',
        'ruleId'            => 'RuleId',
        'resource'          => 'Resource',
        'appName'           => 'AppName',
        'maxQueueingTimeMs' => 'MaxQueueingTimeMs',
        'controlBehavior'   => 'ControlBehavior',
        'metricType'        => 'MetricType',
        'threshold'         => 'Threshold',
        'enable'            => 'Enable',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->paramIdx) {
            $res['ParamIdx'] = $this->paramIdx;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->paramFlowItemList) {
            $res['ParamFlowItemList'] = [];
            if (null !== $this->paramFlowItemList && \is_array($this->paramFlowItemList)) {
                $n = 0;
                foreach ($this->paramFlowItemList as $item) {
                    $res['ParamFlowItemList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->statDurationSec) {
            $res['StatDurationSec'] = $this->statDurationSec;
        }
        if (null !== $this->burstCount) {
            $res['BurstCount'] = $this->burstCount;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->maxQueueingTimeMs) {
            $res['MaxQueueingTimeMs'] = $this->maxQueueingTimeMs;
        }
        if (null !== $this->controlBehavior) {
            $res['ControlBehavior'] = $this->controlBehavior;
        }
        if (null !== $this->metricType) {
            $res['MetricType'] = $this->metricType;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->enable) {
            $res['Enable'] = $this->enable;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return datas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ParamIdx'])) {
            $model->paramIdx = $map['ParamIdx'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['ParamFlowItemList'])) {
            if (!empty($map['ParamFlowItemList'])) {
                $model->paramFlowItemList = [];
                $n                        = 0;
                foreach ($map['ParamFlowItemList'] as $item) {
                    $model->paramFlowItemList[$n++] = null !== $item ? paramFlowItemList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['StatDurationSec'])) {
            $model->statDurationSec = $map['StatDurationSec'];
        }
        if (isset($map['BurstCount'])) {
            $model->burstCount = $map['BurstCount'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['MaxQueueingTimeMs'])) {
            $model->maxQueueingTimeMs = $map['MaxQueueingTimeMs'];
        }
        if (isset($map['ControlBehavior'])) {
            $model->controlBehavior = $map['ControlBehavior'];
        }
        if (isset($map['MetricType'])) {
            $model->metricType = $map['MetricType'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['Enable'])) {
            $model->enable = $map['Enable'];
        }

        return $model;
    }
}
