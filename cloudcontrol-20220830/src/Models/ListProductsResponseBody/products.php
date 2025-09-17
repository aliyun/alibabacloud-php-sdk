<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudcontrol\V20220830\Models\ListProductsResponseBody;

use AlibabaCloud\Dara\Model;

class products extends Model
{
    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $productName;
    protected $_name = [
        'productCode' => 'productCode',
        'productName' => 'productName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->productCode) {
            $res['productCode'] = $this->productCode;
        }

        if (null !== $this->productName) {
            $res['productName'] = $this->productName;
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
        if (isset($map['productCode'])) {
            $model->productCode = $map['productCode'];
        }

        if (isset($map['productName'])) {
            $model->productName = $map['productName'];
        }

        return $model;
    }
}
