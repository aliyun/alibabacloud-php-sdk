<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeNetworkRulesResponseBody\networkRules;
use AlibabaCloud\Tea\Model;

class DescribeNetworkRulesResponseBody extends Model
{
    /**
     * @description The details of a port forwarding rule.
     *
     * @var networkRules[]
     */
    public $networkRules;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example 8597F235-FA5E-4FC7-BAD9-E4C0B01BC771
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of returned port forwarding rules.
     *
     * @example 1
     *
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'networkRules' => 'NetworkRules',
        'requestId'    => 'RequestId',
        'totalCount'   => 'TotalCount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
