<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallsV2RouteListResponseBody\firewallRouteDetailList;
use AlibabaCloud\Tea\Model;

class DescribeTrFirewallsV2RouteListResponseBody extends Model
{
    /**
     * @var firewallRouteDetailList[]
     */
    public $firewallRouteDetailList;

    /**
     * @example ABF190A2-B4D0-53F6-995A-5690A721F91C
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'firewallRouteDetailList' => 'FirewallRouteDetailList',
        'requestId'               => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->firewallRouteDetailList) {
            $res['FirewallRouteDetailList'] = [];
            if (null !== $this->firewallRouteDetailList && \is_array($this->firewallRouteDetailList)) {
                $n = 0;
                foreach ($this->firewallRouteDetailList as $item) {
                    $res['FirewallRouteDetailList'][$n++] = null !== $item ? $item->toMap() : $item;
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
     * @return DescribeTrFirewallsV2RouteListResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FirewallRouteDetailList'])) {
            if (!empty($map['FirewallRouteDetailList'])) {
                $model->firewallRouteDetailList = [];
                $n                              = 0;
                foreach ($map['FirewallRouteDetailList'] as $item) {
                    $model->firewallRouteDetailList[$n++] = null !== $item ? firewallRouteDetailList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
