<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeNetworkRuleAttributesResponseBody\networkRuleAttributes;
use AlibabaCloud\Tea\Model;

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
        'requestId'             => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->networkRuleAttributes) {
            $res['NetworkRuleAttributes'] = [];
            if (null !== $this->networkRuleAttributes && \is_array($this->networkRuleAttributes)) {
                $n = 0;
                foreach ($this->networkRuleAttributes as $item) {
                    $res['NetworkRuleAttributes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNetworkRuleAttributesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NetworkRuleAttributes'])) {
            if (!empty($map['NetworkRuleAttributes'])) {
                $model->networkRuleAttributes = [];
                $n                            = 0;
                foreach ($map['NetworkRuleAttributes'] as $item) {
                    $model->networkRuleAttributes[$n++] = null !== $item ? networkRuleAttributes::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
