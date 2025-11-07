<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudauth\V20190307\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudauth\V20190307\Models\ModifyCustomizeFlowStrategyListRequest\strategyObject;

class ModifyCustomizeFlowStrategyListRequest extends Model
{
    /**
     * @var string
     */
    public $productType;

    /**
     * @var strategyObject[]
     */
    public $strategyObject;
    protected $_name = [
        'productType' => 'ProductType',
        'strategyObject' => 'StrategyObject',
    ];

    public function validate()
    {
        if (\is_array($this->strategyObject)) {
            Model::validateArray($this->strategyObject);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }

        if (null !== $this->strategyObject) {
            if (\is_array($this->strategyObject)) {
                $res['StrategyObject'] = [];
                $n1 = 0;
                foreach ($this->strategyObject as $item1) {
                    $res['StrategyObject'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['StrategyObject'])) {
                $model->strategyObject = [];
                $n1 = 0;
                foreach ($map['StrategyObject'] as $item1) {
                    $model->strategyObject[$n1] = strategyObject::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
