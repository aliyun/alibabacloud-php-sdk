<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnWafRuleResponseBody\rule;

class DescribeDcdnWafRuleResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var rule
     */
    public $rule;
    protected $_name = [
        'requestId' => 'RequestId',
        'rule' => 'Rule',
    ];

    public function validate()
    {
        if (null !== $this->rule) {
            $this->rule->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->rule) {
            $res['Rule'] = null !== $this->rule ? $this->rule->toArray($noStream) : $this->rule;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Rule'])) {
            $model->rule = rule::fromMap($map['Rule']);
        }

        return $model;
    }
}
