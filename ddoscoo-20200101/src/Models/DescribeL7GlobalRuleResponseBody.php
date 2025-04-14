<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeL7GlobalRuleResponseBody\globalRules;

class DescribeL7GlobalRuleResponseBody extends Model
{
    /**
     * @var globalRules[]
     */
    public $globalRules;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'globalRules' => 'GlobalRules',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->globalRules)) {
            Model::validateArray($this->globalRules);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->globalRules) {
            if (\is_array($this->globalRules)) {
                $res['GlobalRules'] = [];
                $n1 = 0;
                foreach ($this->globalRules as $item1) {
                    $res['GlobalRules'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['GlobalRules'])) {
            if (!empty($map['GlobalRules'])) {
                $model->globalRules = [];
                $n1 = 0;
                foreach ($map['GlobalRules'] as $item1) {
                    $model->globalRules[$n1++] = globalRules::fromMap($item1);
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
