<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XgipPop\V20220520\Models\ChargeFlowResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $customerFlowRequestId;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var bool
     */
    public $status;
    protected $_name = [
        'customerFlowRequestId' => 'CustomerFlowRequestId',
        'mobile'                => 'Mobile',
        'status'                => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->customerFlowRequestId) {
            $res['CustomerFlowRequestId'] = $this->customerFlowRequestId;
        }
        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
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
        if (isset($map['CustomerFlowRequestId'])) {
            $model->customerFlowRequestId = $map['CustomerFlowRequestId'];
        }
        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
