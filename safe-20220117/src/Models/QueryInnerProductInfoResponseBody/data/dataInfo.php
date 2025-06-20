<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Safe\V20220117\Models\QueryInnerProductInfoResponseBody\data;

use AlibabaCloud\Dara\Model;

class dataInfo extends Model
{
    /**
     * @var string
     */
    public $innerProductCode;

    /**
     * @var string
     */
    public $innerProductName;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $productName;
    protected $_name = [
        'innerProductCode' => 'InnerProductCode',
        'innerProductName' => 'InnerProductName',
        'productCode' => 'ProductCode',
        'productName' => 'ProductName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->innerProductCode) {
            $res['InnerProductCode'] = $this->innerProductCode;
        }

        if (null !== $this->innerProductName) {
            $res['InnerProductName'] = $this->innerProductName;
        }

        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
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
        if (isset($map['InnerProductCode'])) {
            $model->innerProductCode = $map['InnerProductCode'];
        }

        if (isset($map['InnerProductName'])) {
            $model->innerProductName = $map['InnerProductName'];
        }

        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }

        return $model;
    }
}
