<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardbx\V20200202\Models;

use AlibabaCloud\SDK\Polardbx\V20200202\Models\GetPolarXPriceResponseBody\orderPriceList;
use AlibabaCloud\Tea\Model;

class GetPolarXPriceResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var orderPriceList[]
     */
    public $orderPriceList;
    protected $_name = [
        'requestId'      => 'RequestId',
        'orderPriceList' => 'OrderPriceList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->orderPriceList) {
            $res['OrderPriceList'] = [];
            if (null !== $this->orderPriceList && \is_array($this->orderPriceList)) {
                $n = 0;
                foreach ($this->orderPriceList as $item) {
                    $res['OrderPriceList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetPolarXPriceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['OrderPriceList'])) {
            if (!empty($map['OrderPriceList'])) {
                $model->orderPriceList = [];
                $n                     = 0;
                foreach ($map['OrderPriceList'] as $item) {
                    $model->orderPriceList[$n++] = null !== $item ? orderPriceList::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
