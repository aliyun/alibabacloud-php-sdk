<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\CreateApplicationScalingRuleResponseBody;

use AlibabaCloud\SDK\Sae\V20190506\Models\CreateApplicationScalingRuleResponseBody\data\metric;
use AlibabaCloud\SDK\Sae\V20190506\Models\CreateApplicationScalingRuleResponseBody\data\timer;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @example 7171a6ca-d1cd-4928-8642-7d5cfe69****
     *
     * @var string
     */
    public $appId;

    /**
     * @example 1616642248938
     *
     * @var int
     */
    public $createTime;

    /**
     * @example 1641882854484
     *
     * @var int
     */
    public $lastDisableTime;

    /**
     * @var metric
     */
    public $metric;

    /**
     * @example true
     *
     * @var bool
     */
    public $scaleRuleEnabled;

    /**
     * @example test
     *
     * @var string
     */
    public $scaleRuleName;

    /**
     * @example timing
     *
     * @var string
     */
    public $scaleRuleType;

    /**
     * @var timer
     */
    public $timer;

    /**
     * @example 1616642248938
     *
     * @var int
     */
    public $updateTime;
    protected $_name = [
        'appId'            => 'AppId',
        'createTime'       => 'CreateTime',
        'lastDisableTime'  => 'LastDisableTime',
        'metric'           => 'Metric',
        'scaleRuleEnabled' => 'ScaleRuleEnabled',
        'scaleRuleName'    => 'ScaleRuleName',
        'scaleRuleType'    => 'ScaleRuleType',
        'timer'            => 'Timer',
        'updateTime'       => 'UpdateTime',
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
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->lastDisableTime) {
            $res['LastDisableTime'] = $this->lastDisableTime;
        }
        if (null !== $this->metric) {
            $res['Metric'] = null !== $this->metric ? $this->metric->toMap() : null;
        }
        if (null !== $this->scaleRuleEnabled) {
            $res['ScaleRuleEnabled'] = $this->scaleRuleEnabled;
        }
        if (null !== $this->scaleRuleName) {
            $res['ScaleRuleName'] = $this->scaleRuleName;
        }
        if (null !== $this->scaleRuleType) {
            $res['ScaleRuleType'] = $this->scaleRuleType;
        }
        if (null !== $this->timer) {
            $res['Timer'] = null !== $this->timer ? $this->timer->toMap() : null;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['LastDisableTime'])) {
            $model->lastDisableTime = $map['LastDisableTime'];
        }
        if (isset($map['Metric'])) {
            $model->metric = metric::fromMap($map['Metric']);
        }
        if (isset($map['ScaleRuleEnabled'])) {
            $model->scaleRuleEnabled = $map['ScaleRuleEnabled'];
        }
        if (isset($map['ScaleRuleName'])) {
            $model->scaleRuleName = $map['ScaleRuleName'];
        }
        if (isset($map['ScaleRuleType'])) {
            $model->scaleRuleType = $map['ScaleRuleType'];
        }
        if (isset($map['Timer'])) {
            $model->timer = timer::fromMap($map['Timer']);
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
