<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Tea\Model;

class SkuSaleInfoListQuery extends Model
{
    /**
     * @example 110000
     *
     * @var string
     */
    public $divisionCode;

    /**
     * @description This parameter is required.
     *
     * @example 21000017
     *
     * @var string
     */
    public $purchaserId;

    /**
     * @description This parameter is required.
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->divisionCode) {
            $res['divisionCode'] = $this->divisionCode;
        }
        if (null !== $this->purchaserId) {
            $res['purchaserId'] = $this->purchaserId;
        }
        if (null !== $this->skuQueryParams) {
            $res['skuQueryParams'] = [];
            if (null !== $this->skuQueryParams && \is_array($this->skuQueryParams)) {
                $n = 0;
                foreach ($this->skuQueryParams as $item) {
                    $res['skuQueryParams'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SkuSaleInfoListQuery
     */
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
                $n                     = 0;
                foreach ($map['skuQueryParams'] as $item) {
                    $model->skuQueryParams[$n++] = null !== $item ? SkuQueryParam::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
