<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResellerTrade\V20191227\Models\QueryEcoRelationResponseBody\data;

use AlibabaCloud\Tea\Model;

class resellerProductModeDO extends Model
{
    /**
     * @var int
     */
    public $isService;

    /**
     * @var string
     */
    public $productCode;

    /**
     * @var string
     */
    public $productName;
    protected $_name = [
        'isService'   => 'IsService',
        'productCode' => 'ProductCode',
        'productName' => 'ProductName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->isService) {
            $res['IsService'] = $this->isService;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return resellerProductModeDO
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IsService'])) {
            $model->isService = $map['IsService'];
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
