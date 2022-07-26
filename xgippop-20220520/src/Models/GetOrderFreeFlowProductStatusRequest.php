<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XgipPop\V20220520\Models;

use AlibabaCloud\Tea\Model;

class GetOrderFreeFlowProductStatusRequest extends Model
{
    /**
     * @var int
     */
    public $aliUid;

    /**
     * @var string
     */
    public $customerFlowOrderId;
    protected $_name = [
        'aliUid'              => 'AliUid',
        'customerFlowOrderId' => 'CustomerFlowOrderId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['AliUid'] = $this->aliUid;
        }
        if (null !== $this->customerFlowOrderId) {
            $res['CustomerFlowOrderId'] = $this->customerFlowOrderId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOrderFreeFlowProductStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AliUid'])) {
            $model->aliUid = $map['AliUid'];
        }
        if (isset($map['CustomerFlowOrderId'])) {
            $model->customerFlowOrderId = $map['CustomerFlowOrderId'];
        }

        return $model;
    }
}
