<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlStockResponseBody\saleControl;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ens\V20171110\Models\DescribeEnsSaleControlStockResponseBody\saleControl\saleControlItems\saleControlItem;

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
        'moduleCode' => 'ModuleCode',
        'saleControlItem' => 'SaleControlItem',
    ];

    public function validate()
    {
        if (null !== $this->saleControlItem) {
            $this->saleControlItem->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->moduleCode) {
            $res['ModuleCode'] = $this->moduleCode;
        }

        if (null !== $this->saleControlItem) {
            $res['SaleControlItem'] = null !== $this->saleControlItem ? $this->saleControlItem->toArray($noStream) : $this->saleControlItem;
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
        if (isset($map['ModuleCode'])) {
            $model->moduleCode = $map['ModuleCode'];
        }

        if (isset($map['SaleControlItem'])) {
            $model->saleControlItem = saleControlItem::fromMap($map['SaleControlItem']);
        }

        return $model;
    }
}
