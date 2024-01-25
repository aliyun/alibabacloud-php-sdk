<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20200201\Models;

use AlibabaCloud\Tea\Model;

class DescribeItemsRequest extends Model
{
    /**
     * @example true
     *
     * @var bool
     */
    public $bePromotion;

    /**
     * @example {}
     *
     * @var string
     */
    public $extraParams;

    /**
     * @example 6941297417178
     *
     * @var string
     */
    public $itemBarCode;

    /**
     * @example 6959294202901
     *
     * @var string
     */
    public $itemId;

    /**
     * @var string
     */
    public $itemTitle;

    /**
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description SkuID。
     *
     * @example 1234565
     *
     * @var string
     */
    public $skuId;

    /**
     * @example s-dxsxx****
     *
     * @var string
     */
    public $storeId;
    protected $_name = [
        'bePromotion' => 'BePromotion',
        'extraParams' => 'ExtraParams',
        'itemBarCode' => 'ItemBarCode',
        'itemId'      => 'ItemId',
        'itemTitle'   => 'ItemTitle',
        'pageNumber'  => 'PageNumber',
        'pageSize'    => 'PageSize',
        'skuId'       => 'SkuId',
        'storeId'     => 'StoreId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bePromotion) {
            $res['BePromotion'] = $this->bePromotion;
        }
        if (null !== $this->extraParams) {
            $res['ExtraParams'] = $this->extraParams;
        }
        if (null !== $this->itemBarCode) {
            $res['ItemBarCode'] = $this->itemBarCode;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->itemTitle) {
            $res['ItemTitle'] = $this->itemTitle;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
        }
        if (null !== $this->storeId) {
            $res['StoreId'] = $this->storeId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeItemsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BePromotion'])) {
            $model->bePromotion = $map['BePromotion'];
        }
        if (isset($map['ExtraParams'])) {
            $model->extraParams = $map['ExtraParams'];
        }
        if (isset($map['ItemBarCode'])) {
            $model->itemBarCode = $map['ItemBarCode'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['ItemTitle'])) {
            $model->itemTitle = $map['ItemTitle'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }
        if (isset($map['StoreId'])) {
            $model->storeId = $map['StoreId'];
        }

        return $model;
    }
}
