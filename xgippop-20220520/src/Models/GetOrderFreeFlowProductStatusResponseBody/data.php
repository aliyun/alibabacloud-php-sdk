<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XgipPop\V20220520\Models\GetOrderFreeFlowProductStatusResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $customerFlowOrderId;

    /**
     * @var string
     */
    public $customerFlowRequestId;

    /**
     * @var string
     */
    public $error;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'customerFlowOrderId'   => 'CustomerFlowOrderId',
        'customerFlowRequestId' => 'CustomerFlowRequestId',
        'error'                 => 'Error',
        'status'                => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customerFlowOrderId) {
            $res['CustomerFlowOrderId'] = $this->customerFlowOrderId;
        }
        if (null !== $this->customerFlowRequestId) {
            $res['CustomerFlowRequestId'] = $this->customerFlowRequestId;
        }
        if (null !== $this->error) {
            $res['Error'] = $this->error;
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
        if (isset($map['CustomerFlowOrderId'])) {
            $model->customerFlowOrderId = $map['CustomerFlowOrderId'];
        }
        if (isset($map['CustomerFlowRequestId'])) {
            $model->customerFlowRequestId = $map['CustomerFlowRequestId'];
        }
        if (isset($map['Error'])) {
            $model->error = $map['Error'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
