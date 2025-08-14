<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallsV2RouteListResponseBody\firewallRouteDetailList;

class DescribeTrFirewallsV2RouteListResponseBody extends Model
{
    /**
     * @var firewallRouteDetailList[]
     */
    public $firewallRouteDetailList;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'firewallRouteDetailList' => 'FirewallRouteDetailList',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (\is_array($this->firewallRouteDetailList)) {
            Model::validateArray($this->firewallRouteDetailList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->firewallRouteDetailList) {
            if (\is_array($this->firewallRouteDetailList)) {
                $res['FirewallRouteDetailList'] = [];
                $n1 = 0;
                foreach ($this->firewallRouteDetailList as $item1) {
                    $res['FirewallRouteDetailList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['FirewallRouteDetailList'])) {
            if (!empty($map['FirewallRouteDetailList'])) {
                $model->firewallRouteDetailList = [];
                $n1 = 0;
                foreach ($map['FirewallRouteDetailList'] as $item1) {
                    $model->firewallRouteDetailList[$n1] = firewallRouteDetailList::fromMap($item1);
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
