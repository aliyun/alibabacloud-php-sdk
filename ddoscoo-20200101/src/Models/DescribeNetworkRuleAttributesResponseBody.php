<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeNetworkRuleAttributesResponseBody\networkRuleAttributes;

class DescribeNetworkRuleAttributesResponseBody extends Model
{
    /**
     * @var networkRuleAttributes[]
     */
    public $networkRuleAttributes;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'networkRuleAttributes' => 'NetworkRuleAttributes',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->networkRuleAttributes)) {
            Model::validateArray($this->networkRuleAttributes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->networkRuleAttributes) {
            if (\is_array($this->networkRuleAttributes)) {
                $res['NetworkRuleAttributes'] = [];
                $n1 = 0;
                foreach ($this->networkRuleAttributes as $item1) {
                    $res['NetworkRuleAttributes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
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
        if (isset($map['NetworkRuleAttributes'])) {
            if (!empty($map['NetworkRuleAttributes'])) {
                $model->networkRuleAttributes = [];
                $n1 = 0;
                foreach ($map['NetworkRuleAttributes'] as $item1) {
                    $model->networkRuleAttributes[$n1] = networkRuleAttributes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
