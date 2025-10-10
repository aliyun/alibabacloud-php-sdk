<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Mhub\V20170825\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Mhub\V20170825\Models\ListProductsResponseBody\productInfos;

class ListProductsResponseBody extends Model
{
    /**
     * @var productInfos
     */
    public $productInfos;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $total;

    /**
     * @var string
     */
    public $ubsmsStatus;
    protected $_name = [
        'productInfos' => 'ProductInfos',
        'requestId' => 'RequestId',
        'total' => 'Total',
        'ubsmsStatus' => 'UbsmsStatus',
    ];

    public function validate()
    {
        if (null !== $this->productInfos) {
            $this->productInfos->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->productInfos) {
            $res['ProductInfos'] = null !== $this->productInfos ? $this->productInfos->toArray($noStream) : $this->productInfos;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->total) {
            $res['Total'] = $this->total;
        }

        if (null !== $this->ubsmsStatus) {
            $res['UbsmsStatus'] = $this->ubsmsStatus;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ProductInfos'])) {
            $model->productInfos = productInfos::fromMap($map['ProductInfos']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Total'])) {
            $model->total = $map['Total'];
        }

        if (isset($map['UbsmsStatus'])) {
            $model->ubsmsStatus = $map['UbsmsStatus'];
        }

        return $model;
    }
}
