<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallV2RoutePolicyListResponseBody\trFirewallRoutePolicies;

class DescribeTrFirewallV2RoutePolicyListResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $totalCount;

    /**
     * @var trFirewallRoutePolicies[]
     */
    public $trFirewallRoutePolicies;
    protected $_name = [
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'trFirewallRoutePolicies' => 'TrFirewallRoutePolicies',
    ];

    public function validate()
    {
        if (\is_array($this->trFirewallRoutePolicies)) {
            Model::validateArray($this->trFirewallRoutePolicies);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }

        if (null !== $this->trFirewallRoutePolicies) {
            if (\is_array($this->trFirewallRoutePolicies)) {
                $res['TrFirewallRoutePolicies'] = [];
                $n1 = 0;
                foreach ($this->trFirewallRoutePolicies as $item1) {
                    $res['TrFirewallRoutePolicies'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
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

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        if (isset($map['TrFirewallRoutePolicies'])) {
            if (!empty($map['TrFirewallRoutePolicies'])) {
                $model->trFirewallRoutePolicies = [];
                $n1 = 0;
                foreach ($map['TrFirewallRoutePolicies'] as $item1) {
                    $model->trFirewallRoutePolicies[$n1++] = trFirewallRoutePolicies::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
