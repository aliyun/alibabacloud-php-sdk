<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class RefundOrderResult extends Model
{
    /**
     * @example 6693****4352
     *
     * @var string
     */
    public $disputeId;

    /**
     * @example 1
     *
     * @var int
     */
    public $disputeStatus;

    /**
     * @example 1
     *
     * @var int
     */
    public $disputeType;

    /**
     * @example 6692****5458
     *
     * @var string
     */
    public $orderLineId;

    /**
     * @example 3239281273464326823
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'disputeId'     => 'disputeId',
        'disputeStatus' => 'disputeStatus',
        'disputeType'   => 'disputeType',
        'orderLineId'   => 'orderLineId',
        'requestId'     => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->disputeId) {
            $res['disputeId'] = $this->disputeId;
        }
        if (null !== $this->disputeStatus) {
            $res['disputeStatus'] = $this->disputeStatus;
        }
        if (null !== $this->disputeType) {
            $res['disputeType'] = $this->disputeType;
        }
        if (null !== $this->orderLineId) {
            $res['orderLineId'] = $this->orderLineId;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RefundOrderResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['disputeId'])) {
            $model->disputeId = $map['disputeId'];
        }
        if (isset($map['disputeStatus'])) {
            $model->disputeStatus = $map['disputeStatus'];
        }
        if (isset($map['disputeType'])) {
            $model->disputeType = $map['disputeType'];
        }
        if (isset($map['orderLineId'])) {
            $model->orderLineId = $map['orderLineId'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
