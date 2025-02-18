<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class SearchProductsRequest extends Model
{
    /**
     * @var string
     */
    public $brandName;
    /**
     * @var string[]
     */
    public $categoryIds;
    /**
     * @var string
     */
    public $createEndTime;
    /**
     * @var string
     */
    public $createStartTime;
    /**
     * @var int
     */
    public $distributionHighPrice;
    /**
     * @var int
     */
    public $distributionHighPriceRatio;
    /**
     * @var int
     */
    public $distributionLowPrice;
    /**
     * @var int
     */
    public $distributionLowPriceRatio;
    /**
     * @var int
     */
    public $highMarkPrice;
    /**
     * @var int
     */
    public $highPrice;
    /**
     * @var bool
     */
    public $inGroup;
    /**
     * @var string
     */
    public $inGroupEndTime;
    /**
     * @var string
     */
    public $inGroupStartTime;
    /**
     * @var string
     */
    public $inventoryRiskLevel;
    /**
     * @var string
     */
    public $lmItemId;
    /**
     * @var int
     */
    public $lowMarkPrice;
    /**
     * @var int
     */
    public $lowPrice;
    /**
     * @var string
     */
    public $modifyEndTime;
    /**
     * @var string
     */
    public $modifyStartTime;
    /**
     * @var string
     */
    public $orderBy;
    /**
     * @var string
     */
    public $orderDirection;
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
    public $platform;
    /**
     * @var string
     */
    public $productId;
    /**
     * @var string
     */
    public $productName;
    /**
     * @var string
     */
    public $productStatus;
    /**
     * @var string
     */
    public $purchaserId;
    /**
     * @var string
     */
    public $taxRate;
    /**
     * @var string
     */
    public $tradeModeAndCredit;
    protected $_name = [
        'brandName'                  => 'brandName',
        'categoryIds'                => 'categoryIds',
        'createEndTime'              => 'createEndTime',
        'createStartTime'            => 'createStartTime',
        'distributionHighPrice'      => 'distributionHighPrice',
        'distributionHighPriceRatio' => 'distributionHighPriceRatio',
        'distributionLowPrice'       => 'distributionLowPrice',
        'distributionLowPriceRatio'  => 'distributionLowPriceRatio',
        'highMarkPrice'              => 'highMarkPrice',
        'highPrice'                  => 'highPrice',
        'inGroup'                    => 'inGroup',
        'inGroupEndTime'             => 'inGroupEndTime',
        'inGroupStartTime'           => 'inGroupStartTime',
        'inventoryRiskLevel'         => 'inventoryRiskLevel',
        'lmItemId'                   => 'lmItemId',
        'lowMarkPrice'               => 'lowMarkPrice',
        'lowPrice'                   => 'lowPrice',
        'modifyEndTime'              => 'modifyEndTime',
        'modifyStartTime'            => 'modifyStartTime',
        'orderBy'                    => 'orderBy',
        'orderDirection'             => 'orderDirection',
        'pageNumber'                 => 'pageNumber',
        'pageSize'                   => 'pageSize',
        'platform'                   => 'platform',
        'productId'                  => 'productId',
        'productName'                => 'productName',
        'productStatus'              => 'productStatus',
        'purchaserId'                => 'purchaserId',
        'taxRate'                    => 'taxRate',
        'tradeModeAndCredit'         => 'tradeModeAndCredit',
    ];

    public function validate()
    {
        if (\is_array($this->categoryIds)) {
            Model::validateArray($this->categoryIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->brandName) {
            $res['brandName'] = $this->brandName;
        }

        if (null !== $this->categoryIds) {
            if (\is_array($this->categoryIds)) {
                $res['categoryIds'] = [];
                $n1                 = 0;
                foreach ($this->categoryIds as $item1) {
                    $res['categoryIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->createEndTime) {
            $res['createEndTime'] = $this->createEndTime;
        }

        if (null !== $this->createStartTime) {
            $res['createStartTime'] = $this->createStartTime;
        }

        if (null !== $this->distributionHighPrice) {
            $res['distributionHighPrice'] = $this->distributionHighPrice;
        }

        if (null !== $this->distributionHighPriceRatio) {
            $res['distributionHighPriceRatio'] = $this->distributionHighPriceRatio;
        }

        if (null !== $this->distributionLowPrice) {
            $res['distributionLowPrice'] = $this->distributionLowPrice;
        }

        if (null !== $this->distributionLowPriceRatio) {
            $res['distributionLowPriceRatio'] = $this->distributionLowPriceRatio;
        }

        if (null !== $this->highMarkPrice) {
            $res['highMarkPrice'] = $this->highMarkPrice;
        }

        if (null !== $this->highPrice) {
            $res['highPrice'] = $this->highPrice;
        }

        if (null !== $this->inGroup) {
            $res['inGroup'] = $this->inGroup;
        }

        if (null !== $this->inGroupEndTime) {
            $res['inGroupEndTime'] = $this->inGroupEndTime;
        }

        if (null !== $this->inGroupStartTime) {
            $res['inGroupStartTime'] = $this->inGroupStartTime;
        }

        if (null !== $this->inventoryRiskLevel) {
            $res['inventoryRiskLevel'] = $this->inventoryRiskLevel;
        }

        if (null !== $this->lmItemId) {
            $res['lmItemId'] = $this->lmItemId;
        }

        if (null !== $this->lowMarkPrice) {
            $res['lowMarkPrice'] = $this->lowMarkPrice;
        }

        if (null !== $this->lowPrice) {
            $res['lowPrice'] = $this->lowPrice;
        }

        if (null !== $this->modifyEndTime) {
            $res['modifyEndTime'] = $this->modifyEndTime;
        }

        if (null !== $this->modifyStartTime) {
            $res['modifyStartTime'] = $this->modifyStartTime;
        }

        if (null !== $this->orderBy) {
            $res['orderBy'] = $this->orderBy;
        }

        if (null !== $this->orderDirection) {
            $res['orderDirection'] = $this->orderDirection;
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->platform) {
            $res['platform'] = $this->platform;
        }

        if (null !== $this->productId) {
            $res['productId'] = $this->productId;
        }

        if (null !== $this->productName) {
            $res['productName'] = $this->productName;
        }

        if (null !== $this->productStatus) {
            $res['productStatus'] = $this->productStatus;
        }

        if (null !== $this->purchaserId) {
            $res['purchaserId'] = $this->purchaserId;
        }

        if (null !== $this->taxRate) {
            $res['taxRate'] = $this->taxRate;
        }

        if (null !== $this->tradeModeAndCredit) {
            $res['tradeModeAndCredit'] = $this->tradeModeAndCredit;
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
        if (isset($map['brandName'])) {
            $model->brandName = $map['brandName'];
        }

        if (isset($map['categoryIds'])) {
            if (!empty($map['categoryIds'])) {
                $model->categoryIds = [];
                $n1                 = 0;
                foreach ($map['categoryIds'] as $item1) {
                    $model->categoryIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['createEndTime'])) {
            $model->createEndTime = $map['createEndTime'];
        }

        if (isset($map['createStartTime'])) {
            $model->createStartTime = $map['createStartTime'];
        }

        if (isset($map['distributionHighPrice'])) {
            $model->distributionHighPrice = $map['distributionHighPrice'];
        }

        if (isset($map['distributionHighPriceRatio'])) {
            $model->distributionHighPriceRatio = $map['distributionHighPriceRatio'];
        }

        if (isset($map['distributionLowPrice'])) {
            $model->distributionLowPrice = $map['distributionLowPrice'];
        }

        if (isset($map['distributionLowPriceRatio'])) {
            $model->distributionLowPriceRatio = $map['distributionLowPriceRatio'];
        }

        if (isset($map['highMarkPrice'])) {
            $model->highMarkPrice = $map['highMarkPrice'];
        }

        if (isset($map['highPrice'])) {
            $model->highPrice = $map['highPrice'];
        }

        if (isset($map['inGroup'])) {
            $model->inGroup = $map['inGroup'];
        }

        if (isset($map['inGroupEndTime'])) {
            $model->inGroupEndTime = $map['inGroupEndTime'];
        }

        if (isset($map['inGroupStartTime'])) {
            $model->inGroupStartTime = $map['inGroupStartTime'];
        }

        if (isset($map['inventoryRiskLevel'])) {
            $model->inventoryRiskLevel = $map['inventoryRiskLevel'];
        }

        if (isset($map['lmItemId'])) {
            $model->lmItemId = $map['lmItemId'];
        }

        if (isset($map['lowMarkPrice'])) {
            $model->lowMarkPrice = $map['lowMarkPrice'];
        }

        if (isset($map['lowPrice'])) {
            $model->lowPrice = $map['lowPrice'];
        }

        if (isset($map['modifyEndTime'])) {
            $model->modifyEndTime = $map['modifyEndTime'];
        }

        if (isset($map['modifyStartTime'])) {
            $model->modifyStartTime = $map['modifyStartTime'];
        }

        if (isset($map['orderBy'])) {
            $model->orderBy = $map['orderBy'];
        }

        if (isset($map['orderDirection'])) {
            $model->orderDirection = $map['orderDirection'];
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['platform'])) {
            $model->platform = $map['platform'];
        }

        if (isset($map['productId'])) {
            $model->productId = $map['productId'];
        }

        if (isset($map['productName'])) {
            $model->productName = $map['productName'];
        }

        if (isset($map['productStatus'])) {
            $model->productStatus = $map['productStatus'];
        }

        if (isset($map['purchaserId'])) {
            $model->purchaserId = $map['purchaserId'];
        }

        if (isset($map['taxRate'])) {
            $model->taxRate = $map['taxRate'];
        }

        if (isset($map['tradeModeAndCredit'])) {
            $model->tradeModeAndCredit = $map['tradeModeAndCredit'];
        }

        return $model;
    }
}
