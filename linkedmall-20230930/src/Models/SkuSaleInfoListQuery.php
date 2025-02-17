<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class SkuSaleInfoListQuery extends Model
{
    /**
     * @var string
     */
    public $divisionCode;
    /**
     * @var string
     */
    public $purchaserId;
    /**
     * @var SkuQueryParam[]
     */
    public $skuQueryParams;
    protected $_name = [
        'divisionCode'   => 'divisionCode',
        'purchaserId'    => 'purchaserId',
        'skuQueryParams' => 'skuQueryParams',
    ];

    public function validate()
    {
        if (\is_array($this->skuQueryParams)) {
            Model::validateArray($this->skuQueryParams);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->divisionCode) {
            $res['divisionCode'] = $this->divisionCode;
        }

        if (null !== $this->purchaserId) {
            $res['purchaserId'] = $this->purchaserId;
        }

        if (null !== $this->skuQueryParams) {
            if (\is_array($this->skuQueryParams)) {
                $res['skuQueryParams'] = [];
                $n1                    = 0;
                foreach ($this->skuQueryParams as $item1) {
                    $res['skuQueryParams'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['divisionCode'])) {
            $model->divisionCode = $map['divisionCode'];
        }

        if (isset($map['purchaserId'])) {
            $model->purchaserId = $map['purchaserId'];
        }

        if (isset($map['skuQueryParams'])) {
            if (!empty($map['skuQueryParams'])) {
                $model->skuQueryParams = [];
                $n1                    = 0;
                foreach ($map['skuQueryParams'] as $item1) {
                    $model->skuQueryParams[$n1++] = SkuQueryParam::fromMap($item1);
                }
            }
        }

        return $model;
    }
}
