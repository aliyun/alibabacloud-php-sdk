<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallV2RoutePolicyListResponseBody\trFirewallRoutePolicies;
use AlibabaCloud\Tea\Model;

class DescribeTrFirewallV2RoutePolicyListResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 95EB5F3A-67FE-5780-92BD-5ECBA772AB7E
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 1
     *
     * @var string
     */
    public $totalCount;

    /**
     * @description The routing policies.
     *
     * @var trFirewallRoutePolicies[]
     */
    public $trFirewallRoutePolicies;
    protected $_name = [
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'trFirewallRoutePolicies' => 'TrFirewallRoutePolicies',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->trFirewallRoutePolicies) {
            $res['TrFirewallRoutePolicies'] = [];
            if (null !== $this->trFirewallRoutePolicies && \is_array($this->trFirewallRoutePolicies)) {
                $n = 0;
                foreach ($this->trFirewallRoutePolicies as $item) {
                    $res['TrFirewallRoutePolicies'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTrFirewallV2RoutePolicyListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['TrFirewallRoutePolicies'])) {
            if (!empty($map['TrFirewallRoutePolicies'])) {
                $model->trFirewallRoutePolicies = [];
                $n = 0;
                foreach ($map['TrFirewallRoutePolicies'] as $item) {
                    $model->trFirewallRoutePolicies[$n++] = null !== $item ? trFirewallRoutePolicies::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
