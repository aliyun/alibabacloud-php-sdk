<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dmsenterprise\V20181101\Models\CreateOrderResponseBody;

use AlibabaCloud\Tea\Model;

class createOrderResult extends Model
{
    /**
     * @var int[]
     */
    public $orderIds;
    protected $_name = [
        'orderIds' => 'OrderIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->orderIds) {
            $res['OrderIds'] = $this->orderIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return createOrderResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OrderIds'])) {
            if (!empty($map['OrderIds'])) {
                $model->orderIds = $map['OrderIds'];
            }
        }

        return $model;
    }
}
