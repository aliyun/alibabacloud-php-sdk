<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Dara\Model;

class ModifyCustomizeFlowStrategyListShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $strategyObjectShrink;
    protected $_name = [
        'productType' => 'ProductType',
        'strategyObjectShrink' => 'StrategyObject',
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

        if (null !== $this->strategyObjectShrink) {
            $res['StrategyObject'] = $this->strategyObjectShrink;
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

        if (isset($map['StrategyObject'])) {
            $model->strategyObjectShrink = $map['StrategyObject'];
        }

        return $model;
    }
}
