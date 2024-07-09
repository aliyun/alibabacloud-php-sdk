<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeStatisticSummaryResponseBody\vpcRequestTops;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeStatisticSummaryResponseBody\zoneRequestTops;
use AlibabaCloud\Tea\Model;

class DescribeStatisticSummaryResponseBody extends Model
{
    /**
     * @description The request ID.
     *
     * @example A73F3BD0-B1A8-42A9-A9B6-689BBABC4891
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The total number of entries returned.
     *
     * @example 2254
     *
     * @var int
     */
    public $totalCount;

    /**
     * @description The top 3 virtual private clouds (VPCs) that initiate the largest number of DNS requests.
     *
     * @var vpcRequestTops
     */
    public $vpcRequestTops;

    /**
     * @description The top 3 zones with the largest number of DNS requests.
     *
     * @var zoneRequestTops
     */
    public $zoneRequestTops;
    protected $_name = [
        'requestId'       => 'RequestId',
        'totalCount'      => 'TotalCount',
        'vpcRequestTops'  => 'VpcRequestTops',
        'zoneRequestTops' => 'ZoneRequestTops',
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
        if (null !== $this->vpcRequestTops) {
            $res['VpcRequestTops'] = null !== $this->vpcRequestTops ? $this->vpcRequestTops->toMap() : null;
        }
        if (null !== $this->zoneRequestTops) {
            $res['ZoneRequestTops'] = null !== $this->zoneRequestTops ? $this->zoneRequestTops->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeStatisticSummaryResponseBody
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
        if (isset($map['VpcRequestTops'])) {
            $model->vpcRequestTops = vpcRequestTops::fromMap($map['VpcRequestTops']);
        }
        if (isset($map['ZoneRequestTops'])) {
            $model->zoneRequestTops = zoneRequestTops::fromMap($map['ZoneRequestTops']);
        }

        return $model;
    }
}
