<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20190801\Models;

use AlibabaCloud\Tea\Model;

class DescribeItemsRequest extends Model
{
    /**
     * @var bool
     */
    public $bePromotion;

    /**
     * @var string
     */
    public $itemBarCode;

    /**
     * @var int
     */
    public $itemId;

    /**
     * @var string
     */
    public $itemTitle;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

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
    protected $_name = [
        'bePromotion' => 'BePromotion',
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
