<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebCCRulesV2ResponseBody\webCCRules;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebCCRulesV2ResponseBody\webCCRules\ruleDetail\condition;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebCCRulesV2ResponseBody\webCCRules\ruleDetail\rateLimit;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebCCRulesV2ResponseBody\webCCRules\ruleDetail\statistics;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebCCRulesV2ResponseBody\webCCRules\ruleDetail\statusCode;

class ruleDetail extends Model
{
    /**
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
     * @var int
     */
    public $interval;
    /**
     * @var string
     */
    public $mode;
    /**
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
     * @var int
     */
    public $ttl;
    /**
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
        if (\is_array($this->condition)) {
            Model::validateArray($this->condition);
        }
        if (null !== $this->rateLimit) {
            $this->rateLimit->validate();
        }
        if (null !== $this->statistics) {
            $this->statistics->validate();
        }
        if (null !== $this->statusCode) {
            $this->statusCode->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['Action'] = $this->action;
        }

        if (null !== $this->condition) {
            if (\is_array($this->condition)) {
                $res['Condition'] = [];
                $n1               = 0;
                foreach ($this->condition as $item1) {
                    $res['Condition'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
            $res['RateLimit'] = null !== $this->rateLimit ? $this->rateLimit->toArray($noStream) : $this->rateLimit;
        }

        if (null !== $this->statistics) {
            $res['Statistics'] = null !== $this->statistics ? $this->statistics->toArray($noStream) : $this->statistics;
        }

        if (null !== $this->statusCode) {
            $res['StatusCode'] = null !== $this->statusCode ? $this->statusCode->toArray($noStream) : $this->statusCode;
        }

        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }

        if (null !== $this->uri) {
            $res['Uri'] = $this->uri;
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
        if (isset($map['Action'])) {
            $model->action = $map['Action'];
        }

        if (isset($map['Condition'])) {
            if (!empty($map['Condition'])) {
                $model->condition = [];
                $n1               = 0;
                foreach ($map['Condition'] as $item1) {
                    $model->condition[$n1++] = condition::fromMap($item1);
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
