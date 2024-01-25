<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudesl\V20200201\Models\DescribeBindersResponseBody;

use AlibabaCloud\Tea\Model;

class eslItemBindInfos extends Model
{
    /**
     * @example 690
     *
     * @var string
     */
    public $actionPrice;

    /**
     * @example true
     *
     * @var bool
     */
    public $bePromotion;

    /**
     * @example b4adf048-f36d-4da5-a8bb-ab4adbd5eb04
     *
     * @var string
     */
    public $bindId;

    /**
     * @example 2
     *
     * @var string
     */
    public $containerName;

    /**
     * @example 18bc5a63****
     *
     * @var string
     */
    public $eslBarCode;

    /**
     * @example 11:22:33:44:55:66
     *
     * @var string
     */
    public $eslConnectAp;

    /**
     * @example AESL0213
     *
     * @var string
     */
    public $eslModel;

    /**
     * @example kUzlfuzgayDo5uTXW3D66Q
     *
     * @var string
     */
    public $eslPic;

    /**
     * @example ESL_STATUS_ONLINE
     *
     * @var string
     */
    public $eslStatus;

    /**
     * @example 1656469716000
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @example 690560583****
     *
     * @var string
     */
    public $itemBarCode;

    /**
     * @example 1234567
     *
     * @var string
     */
    public $itemId;

    /**
     * @var string
     */
    public $itemShortTitle;

    /**
     * @var string
     */
    public $itemTitle;

    /**
     * @example 500
     *
     * @var string
     */
    public $originalPrice;

    /**
     * @example 187
     *
     * @var string
     */
    public $priceUnit;

    /**
     * @example 2020-03-17T07:05:34Z
     *
     * @var string
     */
    public $promotionEnd;

    /**
     * @example 2020-03-16T07:05:34Z
     *
     * @var string
     */
    public $promotionStart;

    /**
     * @var string
     */
    public $promotionText;

    /**
     * @description SkuID。
     *
     * @example 124
     *
     * @var string
     */
    public $skuId;

    /**
     * @example s-pdwrrnkufn
     *
     * @var string
     */
    public $storeId;

    /**
     * @example 123456
     *
     * @var string
     */
    public $templateId;

    /**
     * @example 123456
     *
     * @var string
     */
    public $templateSceneId;
    protected $_name = [
        'actionPrice'     => 'ActionPrice',
        'bePromotion'     => 'BePromotion',
        'bindId'          => 'BindId',
        'containerName'   => 'ContainerName',
        'eslBarCode'      => 'EslBarCode',
        'eslConnectAp'    => 'EslConnectAp',
        'eslModel'        => 'EslModel',
        'eslPic'          => 'EslPic',
        'eslStatus'       => 'EslStatus',
        'gmtModified'     => 'GmtModified',
        'itemBarCode'     => 'ItemBarCode',
        'itemId'          => 'ItemId',
        'itemShortTitle'  => 'ItemShortTitle',
        'itemTitle'       => 'ItemTitle',
        'originalPrice'   => 'OriginalPrice',
        'priceUnit'       => 'PriceUnit',
        'promotionEnd'    => 'PromotionEnd',
        'promotionStart'  => 'PromotionStart',
        'promotionText'   => 'PromotionText',
        'skuId'           => 'SkuId',
        'storeId'         => 'StoreId',
        'templateId'      => 'TemplateId',
        'templateSceneId' => 'TemplateSceneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionPrice) {
            $res['ActionPrice'] = $this->actionPrice;
        }
        if (null !== $this->bePromotion) {
            $res['BePromotion'] = $this->bePromotion;
        }
        if (null !== $this->bindId) {
            $res['BindId'] = $this->bindId;
        }
        if (null !== $this->containerName) {
            $res['ContainerName'] = $this->containerName;
        }
        if (null !== $this->eslBarCode) {
            $res['EslBarCode'] = $this->eslBarCode;
        }
        if (null !== $this->eslConnectAp) {
            $res['EslConnectAp'] = $this->eslConnectAp;
        }
        if (null !== $this->eslModel) {
            $res['EslModel'] = $this->eslModel;
        }
        if (null !== $this->eslPic) {
            $res['EslPic'] = $this->eslPic;
        }
        if (null !== $this->eslStatus) {
            $res['EslStatus'] = $this->eslStatus;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->itemBarCode) {
            $res['ItemBarCode'] = $this->itemBarCode;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->itemShortTitle) {
            $res['ItemShortTitle'] = $this->itemShortTitle;
        }
        if (null !== $this->itemTitle) {
            $res['ItemTitle'] = $this->itemTitle;
        }
        if (null !== $this->originalPrice) {
            $res['OriginalPrice'] = $this->originalPrice;
        }
        if (null !== $this->priceUnit) {
            $res['PriceUnit'] = $this->priceUnit;
        }
        if (null !== $this->promotionEnd) {
            $res['PromotionEnd'] = $this->promotionEnd;
        }
        if (null !== $this->promotionStart) {
            $res['PromotionStart'] = $this->promotionStart;
        }
        if (null !== $this->promotionText) {
            $res['PromotionText'] = $this->promotionText;
        }
        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
        }
        if (null !== $this->storeId) {
            $res['StoreId'] = $this->storeId;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateSceneId) {
            $res['TemplateSceneId'] = $this->templateSceneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return eslItemBindInfos
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionPrice'])) {
            $model->actionPrice = $map['ActionPrice'];
        }
        if (isset($map['BePromotion'])) {
            $model->bePromotion = $map['BePromotion'];
        }
        if (isset($map['BindId'])) {
            $model->bindId = $map['BindId'];
        }
        if (isset($map['ContainerName'])) {
            $model->containerName = $map['ContainerName'];
        }
        if (isset($map['EslBarCode'])) {
            $model->eslBarCode = $map['EslBarCode'];
        }
        if (isset($map['EslConnectAp'])) {
            $model->eslConnectAp = $map['EslConnectAp'];
        }
        if (isset($map['EslModel'])) {
            $model->eslModel = $map['EslModel'];
        }
        if (isset($map['EslPic'])) {
            $model->eslPic = $map['EslPic'];
        }
        if (isset($map['EslStatus'])) {
            $model->eslStatus = $map['EslStatus'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['ItemBarCode'])) {
            $model->itemBarCode = $map['ItemBarCode'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['ItemShortTitle'])) {
            $model->itemShortTitle = $map['ItemShortTitle'];
        }
        if (isset($map['ItemTitle'])) {
            $model->itemTitle = $map['ItemTitle'];
        }
        if (isset($map['OriginalPrice'])) {
            $model->originalPrice = $map['OriginalPrice'];
        }
        if (isset($map['PriceUnit'])) {
            $model->priceUnit = $map['PriceUnit'];
        }
        if (isset($map['PromotionEnd'])) {
            $model->promotionEnd = $map['PromotionEnd'];
        }
        if (isset($map['PromotionStart'])) {
            $model->promotionStart = $map['PromotionStart'];
        }
        if (isset($map['PromotionText'])) {
            $model->promotionText = $map['PromotionText'];
        }
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }
        if (isset($map['StoreId'])) {
            $model->storeId = $map['StoreId'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateSceneId'])) {
            $model->templateSceneId = $map['TemplateSceneId'];
        }

        return $model;
    }
}
