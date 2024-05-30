<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebCCRulesV2ResponseBody\webCCRules;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebCCRulesV2ResponseBody\webCCRules\ruleDetail\condition;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebCCRulesV2ResponseBody\webCCRules\ruleDetail\rateLimit;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebCCRulesV2ResponseBody\webCCRules\ruleDetail\statistics;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebCCRulesV2ResponseBody\webCCRules\ruleDetail\statusCode;
use AlibabaCloud\Tea\Model;

class ruleDetail extends Model
{
    /**
     * @example block
     *
     * @var string
     */
    public $action;

    /**
     * @var condition[]
     */
    public $condition;

    /**
     * @var int
     */
    public $count;

    /**
     * @example 60
     *
     * @var int
     */
    public $interval;

    /**
     * @var string
     */
    public $mode;

    /**
     * @example ccauto14
     *
     * @var string
     */
    public $name;

    /**
     * @var rateLimit
     */
    public $rateLimit;

    /**
     * @var statistics
     */
    public $statistics;

    /**
     * @var statusCode
     */
    public $statusCode;

    /**
     * @example 300
     *
     * @var int
     */
    public $ttl;

    /**
     * @example /p3shijihao
     *
     * @var string
     */
    public $uri;
    protected $_name = [
        'action'     => 'Action',
        'condition'  => 'Condition',
        'count'      => 'Count',
        'interval'   => 'Interval',
        'mode'       => 'Mode',
        'name'       => 'Name',
        'rateLimit'  => 'RateLimit',
        'statistics' => 'Statistics',
        'statusCode' => 'StatusCode',
        'ttl'        => 'Ttl',
        'uri'        => 'Uri',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }
        if (null !== $this->condition) {
            $res['Condition'] = [];
            if (null !== $this->condition && \is_array($this->condition)) {
                $n = 0;
                foreach ($this->condition as $item) {
                    $res['Condition'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->count) {
            $res['Count'] = $this->count;
        }
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->mode) {
            $res['Mode'] = $this->mode;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->rateLimit) {
            $res['RateLimit'] = null !== $this->rateLimit ? $this->rateLimit->toMap() : null;
        }
        if (null !== $this->statistics) {
            $res['Statistics'] = null !== $this->statistics ? $this->statistics->toMap() : null;
        }
        if (null !== $this->statusCode) {
            $res['StatusCode'] = null !== $this->statusCode ? $this->statusCode->toMap() : null;
        }
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }
        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ruleDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }
        if (isset($map['Condition'])) {
            if (!empty($map['Condition'])) {
                $model->condition = [];
                $n                = 0;
                foreach ($map['Condition'] as $item) {
                    $model->condition[$n++] = null !== $item ? condition::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Count'])) {
            $model->count = $map['Count'];
        }
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['Mode'])) {
            $model->mode = $map['Mode'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RateLimit'])) {
            $model->rateLimit = rateLimit::fromMap($map['RateLimit']);
        }
        if (isset($map['Statistics'])) {
            $model->statistics = statistics::fromMap($map['Statistics']);
        }
        if (isset($map['StatusCode'])) {
            $model->statusCode = statusCode::fromMap($map['StatusCode']);
        }
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }
        if (isset($map['Uri'])) {
            $model->uri = $map['Uri'];
        }

        return $model;
    }
}
