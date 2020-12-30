<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeStatisticSummaryResponseBody\vpcRequestTops;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeStatisticSummaryResponseBody\zoneRequestTops;
use AlibabaCloud\Tea\Model;

class DescribeStatisticSummaryResponseBody extends Model
{
    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var zoneRequestTops
     */
    public $zoneRequestTops;

    /**
     * @var vpcRequestTops
     */
    public $vpcRequestTops;
    protected $_name = [
        'totalCount'      => 'TotalCount',
        'requestId'       => 'RequestId',
        'zoneRequestTops' => 'ZoneRequestTops',
        'vpcRequestTops'  => 'VpcRequestTops',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->zoneRequestTops) {
            $res['ZoneRequestTops'] = null !== $this->zoneRequestTops ? $this->zoneRequestTops->toMap() : null;
        }
        if (null !== $this->vpcRequestTops) {
            $res['VpcRequestTops'] = null !== $this->vpcRequestTops ? $this->vpcRequestTops->toMap() : null;
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
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ZoneRequestTops'])) {
            $model->zoneRequestTops = zoneRequestTops::fromMap($map['ZoneRequestTops']);
        }
        if (isset($map['VpcRequestTops'])) {
            $model->vpcRequestTops = vpcRequestTops::fromMap($map['VpcRequestTops']);
        }

        return $model;
    }
}
