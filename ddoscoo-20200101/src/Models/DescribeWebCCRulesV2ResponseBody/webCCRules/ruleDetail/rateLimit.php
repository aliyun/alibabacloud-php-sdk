<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebCCRulesV2ResponseBody\webCCRules\ruleDetail;

use AlibabaCloud\Tea\Model;

class rateLimit extends Model
{
    /**
     * @example 60
     *
     * @var int
     */
    public $interval;

    /**
     * @example action
     *
     * @var string
     */
    public $subKey;

    /**
     * @example ip
     *
     * @var string
     */
    public $target;

    /**
     * @example 20
     *
     * @var int
     */
    public $threshold;

    /**
     * @example 15
     *
     * @var int
     */
    public $ttl;
    protected $_name = [
        'interval'  => 'Interval',
        'subKey'    => 'SubKey',
        'target'    => 'Target',
        'threshold' => 'Threshold',
        'ttl'       => 'Ttl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->interval) {
            $res['Interval'] = $this->interval;
        }
        if (null !== $this->subKey) {
            $res['SubKey'] = $this->subKey;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }
        if (null !== $this->threshold) {
            $res['Threshold'] = $this->threshold;
        }
        if (null !== $this->ttl) {
            $res['Ttl'] = $this->ttl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rateLimit
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Interval'])) {
            $model->interval = $map['Interval'];
        }
        if (isset($map['SubKey'])) {
            $model->subKey = $map['SubKey'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }
        if (isset($map['Threshold'])) {
            $model->threshold = $map['Threshold'];
        }
        if (isset($map['Ttl'])) {
            $model->ttl = $map['Ttl'];
        }

        return $model;
    }
}
