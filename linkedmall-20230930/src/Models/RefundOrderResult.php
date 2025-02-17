<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class RefundOrderResult extends Model
{
    /**
     * @var string
     */
    public $disputeId;
    /**
     * @var int
     */
    public $disputeStatus;
    /**
     * @var string
     */
    public $orderLineId;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'disputeId'     => 'disputeId',
        'disputeStatus' => 'disputeStatus',
        'orderLineId'   => 'orderLineId',
        'requestId'     => 'requestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->disputeId) {
            $res['disputeId'] = $this->disputeId;
        }

        if (null !== $this->disputeStatus) {
            $res['disputeStatus'] = $this->disputeStatus;
        }

        if (null !== $this->orderLineId) {
            $res['orderLineId'] = $this->orderLineId;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['disputeId'])) {
            $model->disputeId = $map['disputeId'];
        }

        if (isset($map['disputeStatus'])) {
            $model->disputeStatus = $map['disputeStatus'];
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
