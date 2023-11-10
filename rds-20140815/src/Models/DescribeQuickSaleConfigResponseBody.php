<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rds\V20140815\Models;

use AlibabaCloud\Tea\Model;

class DescribeQuickSaleConfigResponseBody extends Model
{
    /**
     * @description The product code. Valid values:
     *
     *   rds: The instance is a subscription instance.
     *   bards: The instance is a pay-as-you-go instance.
     *
     * @example rds
     *
     * @var string
     */
    public $commodity;

    /**
     * @description The configuration details of the product.
     *
     * @var mixed[]
     */
    public $items;

    /**
     * @description The request ID.
     *
     * @example 5DFFE9EC-3369-5937-A4E2-507C0C86A4C6
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'commodity' => 'Commodity',
        'items'     => 'Items',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodity) {
            $res['Commodity'] = $this->commodity;
        }
        if (null !== $this->items) {
            $res['Items'] = $this->items;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeQuickSaleConfigResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Commodity'])) {
            $model->commodity = $map['Commodity'];
        }
        if (isset($map['Items'])) {
            $model->items = $map['Items'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
