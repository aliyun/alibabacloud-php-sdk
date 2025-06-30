<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Pvtz\V20180101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeStatisticSummaryResponseBody\vpcRequestTops;
use AlibabaCloud\SDK\Pvtz\V20180101\Models\DescribeStatisticSummaryResponseBody\zoneRequestTops;

class DescribeStatisticSummaryResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var vpcRequestTops
     */
    public $vpcRequestTops;

    /**
     * @var zoneRequestTops
     */
    public $zoneRequestTops;
    protected $_name = [
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
        'vpcRequestTops' => 'VpcRequestTops',
        'zoneRequestTops' => 'ZoneRequestTops',
    ];

    public function validate()
    {
        if (null !== $this->vpcRequestTops) {
            $this->vpcRequestTops->validate();
        }
        if (null !== $this->zoneRequestTops) {
            $this->zoneRequestTops->validate();
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

        if (null !== $this->vpcRequestTops) {
            $res['VpcRequestTops'] = null !== $this->vpcRequestTops ? $this->vpcRequestTops->toArray($noStream) : $this->vpcRequestTops;
        }

        if (null !== $this->zoneRequestTops) {
            $res['ZoneRequestTops'] = null !== $this->zoneRequestTops ? $this->zoneRequestTops->toArray($noStream) : $this->zoneRequestTops;
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

        if (isset($map['VpcRequestTops'])) {
            $model->vpcRequestTops = vpcRequestTops::fromMap($map['VpcRequestTops']);
        }

        if (isset($map['ZoneRequestTops'])) {
            $model->zoneRequestTops = zoneRequestTops::fromMap($map['ZoneRequestTops']);
        }

        return $model;
    }
}
