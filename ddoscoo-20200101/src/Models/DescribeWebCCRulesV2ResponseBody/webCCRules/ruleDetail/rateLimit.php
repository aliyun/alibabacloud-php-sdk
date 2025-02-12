<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeWebCCRulesV2ResponseBody\webCCRules\ruleDetail;

use AlibabaCloud\Dara\Model;

class rateLimit extends Model
{
    /**
     * @var int
     */
    public $interval;
    /**
     * @var string
     */
    public $subKey;
    /**
     * @var string
     */
    public $target;
    /**
     * @var int
     */
    public $threshold;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
