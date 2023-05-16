<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlStockResponseBody\saleControl\saleControlItems\saleControlItem;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlStockResponseBody\saleControl\saleControlItems\saleControlItem\basicSaleControl\moduleValue;
use AlibabaCloud\Tea\Model;

class basicSaleControl extends Model
{
    /**
     * @var moduleValue
     */
    public $moduleValue;

    /**
     * @var string
     */
    public $stockValue;
    protected $_name = [
        'moduleValue' => 'ModuleValue',
        'stockValue'  => 'StockValue',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->moduleValue) {
            $res['ModuleValue'] = null !== $this->moduleValue ? $this->moduleValue->toMap() : null;
        }
        if (null !== $this->stockValue) {
            $res['StockValue'] = $this->stockValue;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return basicSaleControl
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModuleValue'])) {
            $model->moduleValue = moduleValue::fromMap($map['ModuleValue']);
        }
        if (isset($map['StockValue'])) {
            $model->stockValue = $map['StockValue'];
        }

        return $model;
    }
}
