<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models\EstimatedPriceQueryV2ResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\BtripOpen\V20220520\Models\ModulePriceMapValue;

class module extends Model
{
    /**
     * @var string
     */
    public $bizType;

    /**
     * @var ModulePriceMapValue[]
     */
    public $priceMap;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'bizType' => 'biz_type',
        'priceMap' => 'price_map',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->priceMap)) {
            Model::validateArray($this->priceMap);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizType) {
            $res['biz_type'] = $this->bizType;
        }

        if (null !== $this->priceMap) {
            if (\is_array($this->priceMap)) {
                $res['price_map'] = [];
                foreach ($this->priceMap as $key1 => $value1) {
                    $res['price_map'][$key1] = null !== $value1 ? $value1->toArray($noStream) : $value1;
                }
            }
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['biz_type'])) {
            $model->bizType = $map['biz_type'];
        }

        if (isset($map['price_map'])) {
            if (!empty($map['price_map'])) {
                $model->priceMap = [];
                foreach ($map['price_map'] as $key1 => $value1) {
                    $model->priceMap[$key1] = ModulePriceMapValue::fromMap($value1);
                }
            }
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
