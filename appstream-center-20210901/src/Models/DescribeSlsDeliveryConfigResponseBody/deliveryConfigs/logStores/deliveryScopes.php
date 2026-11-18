<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Appstreamcenter\V20210901\Models\DescribeSlsDeliveryConfigResponseBody\deliveryConfigs\logStores;

use AlibabaCloud\Dara\Model;

class deliveryScopes extends Model
{
    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'productType' => 'ProductType',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
