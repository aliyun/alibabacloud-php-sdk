<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20190801\Models;

use AlibabaCloud\Tea\Model;

class RefreshTaobaoItemRequest extends Model
{
    /**
     * @var string
     */
    public $outerId;

    /**
     * @var string
     */
    public $skuId;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $storeId;

    /**
     * @var string
     */
    public $taobaoItemId;
    protected $_name = [
        'outerId'      => 'OuterId',
        'skuId'        => 'SkuId',
        'storeId'      => 'StoreId',
        'taobaoItemId' => 'TaobaoItemId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->outerId) {
            $res['OuterId'] = $this->outerId;
        }
        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
        }
        if (null !== $this->storeId) {
            $res['StoreId'] = $this->storeId;
        }
        if (null !== $this->taobaoItemId) {
            $res['TaobaoItemId'] = $this->taobaoItemId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RefreshTaobaoItemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['OuterId'])) {
            $model->outerId = $map['OuterId'];
        }
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }
        if (isset($map['StoreId'])) {
            $model->storeId = $map['StoreId'];
        }
        if (isset($map['TaobaoItemId'])) {
            $model->taobaoItemId = $map['TaobaoItemId'];
        }

        return $model;
    }
}
