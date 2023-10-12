<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribeTrFirewallsV2ListResponseBody\vpcTrFirewalls;
use AlibabaCloud\Tea\Model;

class DescribeTrFirewallsV2ListResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example 1471E2EC-F706-5F11-A79B-BD583ACB8297
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 6
     *
     * @var string
     */
    public $totalCount;

    /**
     * @description The VPC firewalls.
     *
     * @var vpcTrFirewalls[]
     */
    public $vpcTrFirewalls;
    protected $_name = [
        'requestId'      => 'RequestId',
        'totalCount'     => 'TotalCount',
        'vpcTrFirewalls' => 'VpcTrFirewalls',
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
        if (null !== $this->vpcTrFirewalls) {
            $res['VpcTrFirewalls'] = [];
            if (null !== $this->vpcTrFirewalls && \is_array($this->vpcTrFirewalls)) {
                $n = 0;
                foreach ($this->vpcTrFirewalls as $item) {
                    $res['VpcTrFirewalls'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTrFirewallsV2ListResponseBody
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
        if (isset($map['VpcTrFirewalls'])) {
            if (!empty($map['VpcTrFirewalls'])) {
                $model->vpcTrFirewalls = [];
                $n                     = 0;
                foreach ($map['VpcTrFirewalls'] as $item) {
                    $model->vpcTrFirewalls[$n++] = null !== $item ? vpcTrFirewalls::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
