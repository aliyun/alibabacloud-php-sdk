<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\MerchandisePlacementDetectionLiteResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aidge\V20260428\Models\MerchandisePlacementDetectionLiteResponseBody\data\result\grounding;
use AlibabaCloud\SDK\Aidge\V20260428\Models\MerchandisePlacementDetectionLiteResponseBody\data\result\products;

class result extends Model
{
    /**
     * @var grounding
     */
    public $grounding;

    /**
     * @var products[]
     */
    public $products;

    /**
     * @var string[]
     */
    public $skuIds;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'grounding' => 'Grounding',
        'products' => 'Products',
        'skuIds' => 'SkuIds',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->grounding) {
            $this->grounding->validate();
        }
        if (\is_array($this->products)) {
            Model::validateArray($this->products);
        }
        if (\is_array($this->skuIds)) {
            Model::validateArray($this->skuIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->grounding) {
            $res['Grounding'] = null !== $this->grounding ? $this->grounding->toArray($noStream) : $this->grounding;
        }

        if (null !== $this->products) {
            if (\is_array($this->products)) {
                $res['Products'] = [];
                $n1 = 0;
                foreach ($this->products as $item1) {
                    $res['Products'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->skuIds) {
            if (\is_array($this->skuIds)) {
                $res['SkuIds'] = [];
                $n1 = 0;
                foreach ($this->skuIds as $item1) {
                    $res['SkuIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->type) {
            $res['Type'] = $this->type;
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
        if (isset($map['Grounding'])) {
            $model->grounding = grounding::fromMap($map['Grounding']);
        }

        if (isset($map['Products'])) {
            if (!empty($map['Products'])) {
                $model->products = [];
                $n1 = 0;
                foreach ($map['Products'] as $item1) {
                    $model->products[$n1] = products::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SkuIds'])) {
            if (!empty($map['SkuIds'])) {
                $model->skuIds = [];
                $n1 = 0;
                foreach ($map['SkuIds'] as $item1) {
                    $model->skuIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
