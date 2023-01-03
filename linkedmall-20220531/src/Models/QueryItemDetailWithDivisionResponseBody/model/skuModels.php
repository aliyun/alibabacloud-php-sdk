<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models\QueryItemDetailWithDivisionResponseBody\model;

use AlibabaCloud\Tea\Model;

class skuModels extends Model
{
    /**
     * @example NULL
     *
     * @var string
     */
    public $canNotBeSoldCode;

    /**
     * @example NULL
     *
     * @var string
     */
    public $canNotBeSoldMassage;

    /**
     * @var string[]
     */
    public $customizedAttributeMap;

    /**
     * @example 401e6c8****39b05797ac841907ca
     *
     * @var string
     */
    public $distributionMallId;

    /**
     * @example {\"outShopId\":\"3163****7\"}
     *
     * @var string
     */
    public $extJson;

    /**
     * @example true
     *
     * @var bool
     */
    public $hasQuantity;

    /**
     * @var int
     */
    public $invoiceType;

    /**
     * @example 56090358****
     *
     * @var int
     */
    public $itemId;

    /**
     * @example 10026053-67222490****
     *
     * @var string
     */
    public $lmItemId;

    /**
     * @var string[]
     */
    public $lmSkuAttributeMap;

    /**
     * @example 3990
     *
     * @var int
     */
    public $priceCent;

    /**
     * @example -1
     *
     * @var int
     */
    public $quantity;

    /**
     * @example 788
     *
     * @var int
     */
    public $reservePrice;

    /**
     * @var string
     */
    public $simpleQuantity;

    /**
     * @example -1
     *
     * @var int
     */
    public $skuId;

    /**
     * @example img/12344***.jpg
     *
     * @var string
     */
    public $skuPicUrl;

    /**
     * @example 1627207:28320;5919063:6536025;12304035:75366283;122216431:27772
     *
     * @var string
     */
    public $skuPvs;

    /**
     * @var string
     */
    public $skuTitle;

    /**
     * @example 1
     *
     * @var int
     */
    public $status;

    /**
     * @example 9900
     *
     * @var int
     */
    public $supplierPrice;
    protected $_name = [
        'canNotBeSoldCode'       => 'CanNotBeSoldCode',
        'canNotBeSoldMassage'    => 'CanNotBeSoldMassage',
        'customizedAttributeMap' => 'CustomizedAttributeMap',
        'distributionMallId'     => 'DistributionMallId',
        'extJson'                => 'ExtJson',
        'hasQuantity'            => 'HasQuantity',
        'invoiceType'            => 'InvoiceType',
        'itemId'                 => 'ItemId',
        'lmItemId'               => 'LmItemId',
        'lmSkuAttributeMap'      => 'LmSkuAttributeMap',
        'priceCent'              => 'PriceCent',
        'quantity'               => 'Quantity',
        'reservePrice'           => 'ReservePrice',
        'simpleQuantity'         => 'SimpleQuantity',
        'skuId'                  => 'SkuId',
        'skuPicUrl'              => 'SkuPicUrl',
        'skuPvs'                 => 'SkuPvs',
        'skuTitle'               => 'SkuTitle',
        'status'                 => 'Status',
        'supplierPrice'          => 'SupplierPrice',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canNotBeSoldCode) {
            $res['CanNotBeSoldCode'] = $this->canNotBeSoldCode;
        }
        if (null !== $this->canNotBeSoldMassage) {
            $res['CanNotBeSoldMassage'] = $this->canNotBeSoldMassage;
        }
        if (null !== $this->customizedAttributeMap) {
            $res['CustomizedAttributeMap'] = $this->customizedAttributeMap;
        }
        if (null !== $this->distributionMallId) {
            $res['DistributionMallId'] = $this->distributionMallId;
        }
        if (null !== $this->extJson) {
            $res['ExtJson'] = $this->extJson;
        }
        if (null !== $this->hasQuantity) {
            $res['HasQuantity'] = $this->hasQuantity;
        }
        if (null !== $this->invoiceType) {
            $res['InvoiceType'] = $this->invoiceType;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
        }
        if (null !== $this->lmSkuAttributeMap) {
            $res['LmSkuAttributeMap'] = $this->lmSkuAttributeMap;
        }
        if (null !== $this->priceCent) {
            $res['PriceCent'] = $this->priceCent;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }
        if (null !== $this->reservePrice) {
            $res['ReservePrice'] = $this->reservePrice;
        }
        if (null !== $this->simpleQuantity) {
            $res['SimpleQuantity'] = $this->simpleQuantity;
        }
        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
        }
        if (null !== $this->skuPicUrl) {
            $res['SkuPicUrl'] = $this->skuPicUrl;
        }
        if (null !== $this->skuPvs) {
            $res['SkuPvs'] = $this->skuPvs;
        }
        if (null !== $this->skuTitle) {
            $res['SkuTitle'] = $this->skuTitle;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->supplierPrice) {
            $res['SupplierPrice'] = $this->supplierPrice;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return skuModels
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CanNotBeSoldCode'])) {
            $model->canNotBeSoldCode = $map['CanNotBeSoldCode'];
        }
        if (isset($map['CanNotBeSoldMassage'])) {
            $model->canNotBeSoldMassage = $map['CanNotBeSoldMassage'];
        }
        if (isset($map['CustomizedAttributeMap'])) {
            $model->customizedAttributeMap = $map['CustomizedAttributeMap'];
        }
        if (isset($map['DistributionMallId'])) {
            $model->distributionMallId = $map['DistributionMallId'];
        }
        if (isset($map['ExtJson'])) {
            $model->extJson = $map['ExtJson'];
        }
        if (isset($map['HasQuantity'])) {
            $model->hasQuantity = $map['HasQuantity'];
        }
        if (isset($map['InvoiceType'])) {
            $model->invoiceType = $map['InvoiceType'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }
        if (isset($map['LmSkuAttributeMap'])) {
            $model->lmSkuAttributeMap = $map['LmSkuAttributeMap'];
        }
        if (isset($map['PriceCent'])) {
            $model->priceCent = $map['PriceCent'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }
        if (isset($map['ReservePrice'])) {
            $model->reservePrice = $map['ReservePrice'];
        }
        if (isset($map['SimpleQuantity'])) {
            $model->simpleQuantity = $map['SimpleQuantity'];
        }
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }
        if (isset($map['SkuPicUrl'])) {
            $model->skuPicUrl = $map['SkuPicUrl'];
        }
        if (isset($map['SkuPvs'])) {
            $model->skuPvs = $map['SkuPvs'];
        }
        if (isset($map['SkuTitle'])) {
            $model->skuTitle = $map['SkuTitle'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SupplierPrice'])) {
            $model->supplierPrice = $map['SupplierPrice'];
        }

        return $model;
    }
}
