<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeNetworkRulesResponseBody\networkRules;
use AlibabaCloud\Tea\Model;

class DescribeNetworkRulesResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var networkRules[]
     */
    public $networkRules;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'totalCount'   => 'TotalCount',
        'networkRules' => 'NetworkRules',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->networkRules) {
            $res['NetworkRules'] = [];
            if (null !== $this->networkRules && \is_array($this->networkRules)) {
                $n = 0;
                foreach ($this->networkRules as $item) {
                    $res['NetworkRules'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeNetworkRulesResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['NetworkRules'])) {
            if (!empty($map['NetworkRules'])) {
                $model->networkRules = [];
                $n                   = 0;
                foreach ($map['NetworkRules'] as $item) {
                    $model->networkRules[$n++] = null !== $item ? networkRules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
