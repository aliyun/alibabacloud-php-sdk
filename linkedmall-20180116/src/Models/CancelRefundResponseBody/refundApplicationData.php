<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\CancelRefundResponseBody;

use AlibabaCloud\Tea\Model;

class refundApplicationData extends Model
{
    /**
     * @var int
     */
    public $disputeType;

    /**
     * @var string
     */
    public $subLmOrderId;

    /**
     * @var int
     */
    public $disputeStatus;
    protected $_name = [
        'disputeType'   => 'DisputeType',
        'subLmOrderId'  => 'SubLmOrderId',
        'disputeStatus' => 'DisputeStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->disputeType) {
            $res['DisputeType'] = $this->disputeType;
        }
        if (null !== $this->subLmOrderId) {
            $res['SubLmOrderId'] = $this->subLmOrderId;
        }
        if (null !== $this->disputeStatus) {
            $res['DisputeStatus'] = $this->disputeStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return refundApplicationData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DisputeType'])) {
            $model->disputeType = $map['DisputeType'];
        }
        if (isset($map['SubLmOrderId'])) {
            $model->subLmOrderId = $map['SubLmOrderId'];
        }
        if (isset($map['DisputeStatus'])) {
            $model->disputeStatus = $map['DisputeStatus'];
        }

        return $model;
    }
}
