<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\MerchandisePriceTagDetectionResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aidge\V20260428\Models\MerchandisePriceTagDetectionResponseBody\data\result\grounding;
use AlibabaCloud\SDK\Aidge\V20260428\Models\MerchandisePriceTagDetectionResponseBody\data\result\priceTags;

class result extends Model
{
    /**
     * @var grounding
     */
    public $grounding;

    /**
     * @var priceTags[]
     */
    public $priceTags;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'grounding' => 'Grounding',
        'priceTags' => 'PriceTags',
        'type' => 'Type',
    ];

    public function validate()
    {
        if (null !== $this->grounding) {
            $this->grounding->validate();
        }
        if (\is_array($this->priceTags)) {
            Model::validateArray($this->priceTags);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->grounding) {
            $res['Grounding'] = null !== $this->grounding ? $this->grounding->toArray($noStream) : $this->grounding;
        }

        if (null !== $this->priceTags) {
            if (\is_array($this->priceTags)) {
                $res['PriceTags'] = [];
                $n1 = 0;
                foreach ($this->priceTags as $item1) {
                    $res['PriceTags'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (isset($map['PriceTags'])) {
            if (!empty($map['PriceTags'])) {
                $model->priceTags = [];
                $n1 = 0;
                foreach ($map['PriceTags'] as $item1) {
                    $model->priceTags[$n1] = priceTags::fromMap($item1);
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
