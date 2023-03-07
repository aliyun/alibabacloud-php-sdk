<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeVpcFirewallListResponseBody\vpcFirewalls;
use AlibabaCloud\Tea\Model;

class DescribeVpcFirewallListResponseBody extends Model
{
    /**
     * @description The ID of the request.
     *
     * @example 850A84D6-0DE4-4797-A1E8-00090125k8g2
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of VPC firewalls.
     *
     * @example 10
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description An array that consists of the details about the VPC firewalls.
     *
     * @var vpcFirewalls[]
     */
    public $vpcFirewalls;
    protected $_name = [
        'requestId'    => 'RequestId',
        'totalCount'   => 'TotalCount',
        'vpcFirewalls' => 'VpcFirewalls',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->vpcFirewalls) {
            $res['VpcFirewalls'] = [];
            if (null !== $this->vpcFirewalls && \is_array($this->vpcFirewalls)) {
                $n = 0;
                foreach ($this->vpcFirewalls as $item) {
                    $res['VpcFirewalls'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVpcFirewallListResponseBody
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
        if (isset($map['VpcFirewalls'])) {
            if (!empty($map['VpcFirewalls'])) {
                $model->vpcFirewalls = [];
                $n                   = 0;
                foreach ($map['VpcFirewalls'] as $item) {
                    $model->vpcFirewalls[$n++] = null !== $item ? vpcFirewalls::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
