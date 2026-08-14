<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\DiduiAreaDeductionRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aidge\V20260428\Models\DiduiAreaDeductionRequest\products\boxes;

class products extends Model
{
    /**
     * @var boxes[]
     */
    public $boxes;

    /**
     * @var string
     */
    public $skuId;
    protected $_name = [
        'boxes' => 'Boxes',
        'skuId' => 'SkuId',
    ];

    public function validate()
    {
        if (\is_array($this->boxes)) {
            Model::validateArray($this->boxes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->boxes) {
            if (\is_array($this->boxes)) {
                $res['Boxes'] = [];
                $n1 = 0;
                foreach ($this->boxes as $item1) {
                    $res['Boxes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
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
        if (isset($map['Boxes'])) {
            if (!empty($map['Boxes'])) {
                $model->boxes = [];
                $n1 = 0;
                foreach ($map['Boxes'] as $item1) {
                    $model->boxes[$n1] = boxes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }

        return $model;
    }
}
