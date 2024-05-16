<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class GetPermissionApplyOrderDetailRequest extends Model
{
    /**
     * @description The ID of the permission request order. You can call the ListPermissionApplyOrders operation to obtain the order ID.
     *
     * This parameter is required.
     * @example 48f36729-05f9-4a40-9286-933fd940f30a
     *
     * @var string
     */
    public $flowId;
    protected $_name = [
        'flowId' => 'FlowId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->flowId) {
            $res['FlowId'] = $this->flowId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPermissionApplyOrderDetailRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FlowId'])) {
            $model->flowId = $map['FlowId'];
        }

        return $model;
    }
}
