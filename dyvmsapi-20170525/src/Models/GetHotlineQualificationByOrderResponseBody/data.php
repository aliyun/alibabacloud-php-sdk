<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\GetHotlineQualificationByOrderResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The ID of the qualification application ticket.
     *
     * @example 22456****
     *
     * @var string
     */
    public $orderId;

    /**
     * @description The qualification ID.
     *
     * @example 1478*****
     *
     * @var string
     */
    public $qualificationId;

    /**
     * @description The qualification state. Valid values:
     *
     *   **NORMAL**
     *   **OTHER**
     *
     * @example NORMAL
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'orderId'         => 'OrderId',
        'qualificationId' => 'QualificationId',
        'status'          => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->qualificationId) {
            $res['QualificationId'] = $this->qualificationId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['QualificationId'])) {
            $model->qualificationId = $map['QualificationId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
