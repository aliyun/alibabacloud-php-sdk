<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\QueryItemsResponseBody\data\items;

use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\QueryItemsResponseBody\data\items\skus\saleProps;
use AlibabaCloud\Tea\Model;

class skus extends Model
{
    /**
     * @var int
     */
    public $status;

    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $skuId;

    /**
     * @var saleProps[]
     */
    public $saleProps;

    /**
     * @var string
     */
    public $itemId;

    /**
     * @var int
     */
    public $salePrice;

    /**
     * @var int
     */
    public $originPrice;

    /**
     * @var int
     */
    public $modifyTime;
    protected $_name = [
        'status'      => 'Status',
        'createTime'  => 'CreateTime',
        'skuId'       => 'SkuId',
        'saleProps'   => 'SaleProps',
        'itemId'      => 'ItemId',
        'salePrice'   => 'SalePrice',
        'originPrice' => 'OriginPrice',
        'modifyTime'  => 'ModifyTime',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
        }
        if (null !== $this->saleProps) {
            $res['SaleProps'] = [];
            if (null !== $this->saleProps && \is_array($this->saleProps)) {
                $n = 0;
                foreach ($this->saleProps as $item) {
                    $res['SaleProps'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->salePrice) {
            $res['SalePrice'] = $this->salePrice;
        }
        if (null !== $this->originPrice) {
            $res['OriginPrice'] = $this->originPrice;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return skus
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }
        if (isset($map['SaleProps'])) {
            if (!empty($map['SaleProps'])) {
                $model->saleProps = [];
                $n                = 0;
                foreach ($map['SaleProps'] as $item) {
                    $model->saleProps[$n++] = null !== $item ? saleProps::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['SalePrice'])) {
            $model->salePrice = $map['SalePrice'];
        }
        if (isset($map['OriginPrice'])) {
            $model->originPrice = $map['OriginPrice'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }

        return $model;
    }
}
