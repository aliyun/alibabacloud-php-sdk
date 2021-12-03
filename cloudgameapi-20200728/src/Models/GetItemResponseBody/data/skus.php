<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\GetItemResponseBody\data;

use AlibabaCloud\SDK\CloudGameAPI\V20200728\Models\GetItemResponseBody\data\skus\saleProps;
use AlibabaCloud\Tea\Model;

class skus extends Model
{
    /**
     * @var int
     */
    public $createTime;

    /**
     * @var string
     */
    public $itemId;

    /**
     * @var int
     */
    public $modifyTime;

    /**
     * @var int
     */
    public $originPrice;

    /**
     * @var int
     */
    public $salePrice;

    /**
     * @var saleProps[]
     */
    public $saleProps;

    /**
     * @var string
     */
    public $skuId;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'createTime'  => 'CreateTime',
        'itemId'      => 'ItemId',
        'modifyTime'  => 'ModifyTime',
        'originPrice' => 'OriginPrice',
        'salePrice'   => 'SalePrice',
        'saleProps'   => 'SaleProps',
        'skuId'       => 'SkuId',
        'status'      => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->originPrice) {
            $res['OriginPrice'] = $this->originPrice;
        }
        if (null !== $this->salePrice) {
            $res['SalePrice'] = $this->salePrice;
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
        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['OriginPrice'])) {
            $model->originPrice = $map['OriginPrice'];
        }
        if (isset($map['SalePrice'])) {
            $model->salePrice = $map['SalePrice'];
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
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
