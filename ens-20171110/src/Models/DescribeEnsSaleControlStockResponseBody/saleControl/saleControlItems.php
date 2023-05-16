<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlStockResponseBody\saleControl;

use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlStockResponseBody\saleControl\saleControlItems\saleControlItem;
use AlibabaCloud\Tea\Model;

class saleControlItems extends Model
{
    /**
     * @var string
     */
    public $moduleCode;

    /**
     * @var saleControlItem
     */
    public $saleControlItem;
    protected $_name = [
        'moduleCode'      => 'ModuleCode',
        'saleControlItem' => 'SaleControlItem',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->moduleCode) {
            $res['ModuleCode'] = $this->moduleCode;
        }
        if (null !== $this->saleControlItem) {
            $res['SaleControlItem'] = null !== $this->saleControlItem ? $this->saleControlItem->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return saleControlItems
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ModuleCode'])) {
            $model->moduleCode = $map['ModuleCode'];
        }
        if (isset($map['SaleControlItem'])) {
            $model->saleControlItem = saleControlItem::fromMap($map['SaleControlItem']);
        }

        return $model;
    }
}
