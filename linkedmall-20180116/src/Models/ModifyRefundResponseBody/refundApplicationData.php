<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\ModifyRefundResponseBody;

use AlibabaCloud\Tea\Model;

class refundApplicationData extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $disputeStatus;

    /**
     * @example 0
     *
     * @var int
     */
    public $disputeType;

    /**
     * @example 37******31
     *
     * @var string
     */
    public $subLmOrderId;
    protected $_name = [
        'disputeStatus' => 'DisputeStatus',
        'disputeType'   => 'DisputeType',
        'subLmOrderId'  => 'SubLmOrderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->disputeStatus) {
            $res['DisputeStatus'] = $this->disputeStatus;
        }
        if (null !== $this->disputeType) {
            $res['DisputeType'] = $this->disputeType;
        }
        if (null !== $this->subLmOrderId) {
            $res['SubLmOrderId'] = $this->subLmOrderId;
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
        if (isset($map['DisputeStatus'])) {
            $model->disputeStatus = $map['DisputeStatus'];
        }
        if (isset($map['DisputeType'])) {
            $model->disputeType = $map['DisputeType'];
        }
        if (isset($map['SubLmOrderId'])) {
            $model->subLmOrderId = $map['SubLmOrderId'];
        }

        return $model;
    }
}
