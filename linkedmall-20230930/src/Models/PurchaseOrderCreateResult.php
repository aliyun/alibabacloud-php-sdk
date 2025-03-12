<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class PurchaseOrderCreateResult extends Model
{
    /**
     * @example 6692****5696
     *
     * @var string
     */
    public $purchaseOrderId;

    /**
     * @example 3239281273464326823
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'purchaseOrderId' => 'purchaseOrderId',
        'requestId'       => 'requestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->purchaseOrderId) {
            $res['purchaseOrderId'] = $this->purchaseOrderId;
        }
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PurchaseOrderCreateResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['purchaseOrderId'])) {
            $model->purchaseOrderId = $map['purchaseOrderId'];
        }
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
