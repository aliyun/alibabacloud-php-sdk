<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeReservationDemandCommittedAmountResponseBody\committedAmountInfo;
use AlibabaCloud\Tea\Model;

class DescribeReservationDemandCommittedAmountResponseBody extends Model
{
    /**
     * @var committedAmountInfo
     */
    public $committedAmountInfo;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'committedAmountInfo' => 'CommittedAmountInfo',
        'requestId'           => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->committedAmountInfo) {
            $res['CommittedAmountInfo'] = null !== $this->committedAmountInfo ? $this->committedAmountInfo->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeReservationDemandCommittedAmountResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommittedAmountInfo'])) {
            $model->committedAmountInfo = committedAmountInfo::fromMap($map['CommittedAmountInfo']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
