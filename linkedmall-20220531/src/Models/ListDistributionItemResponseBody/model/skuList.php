<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20220531\Models\ListDistributionItemResponseBody\model;

use AlibabaCloud\SDK\Linkedmall\V20220531\Models\ListDistributionItemResponseBody\model\skuList\lmAttributeModels;
use AlibabaCloud\Tea\Model;

class skuList extends Model
{
    /**
     * @var bool
     */
    public $canSell;

    /**
     * @var string[]
     */
    public $customizedAttributeMap;

    /**
     * @var string
     */
    public $extInfo;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var bool
     */
    public $hasQuantity;

    /**
     * @var int
     */
    public $itemId;

    /**
     * @var lmAttributeModels[]
     */
    public $lmAttributeModels;

    /**
     * @var string
     */
    public $lmItemId;

    /**
     * @var int
     */
    public $priceCent;

    /**
     * @var int
     */
    public $quantity;

    /**
     * @var int
     */
    public $reservedPrice;

    /**
     * @var string
     */
    public $simpleQuantity;

    /**
     * @var string
     */
    public $skuDesc;

    /**
     * @var int
     */
    public $skuId;

    /**
     * @var string
     */
    public $skuPicUrl;

    /**
     * @var string[]
     */
    public $skuProperties;

    /**
     * @var string
     */
    public $skuPropertiesJson;

    /**
     * @var string
     */
    public $skuTitle;

    /**
     * @var int
     */
    public $status;

    /**
     * @var string
     */
    public $tips;

    /**
     * @var string[]
     */
    public $lmSkuAttributeMap;
    protected $_name = [
        'canSell'                => 'CanSell',
        'customizedAttributeMap' => 'CustomizedAttributeMap',
        'extInfo'                => 'ExtInfo',
        'gmtModified'            => 'GmtModified',
        'hasQuantity'            => 'HasQuantity',
        'itemId'                 => 'ItemId',
        'lmAttributeModels'      => 'LmAttributeModels',
        'lmItemId'               => 'LmItemId',
        'priceCent'              => 'PriceCent',
        'quantity'               => 'Quantity',
        'reservedPrice'          => 'ReservedPrice',
        'simpleQuantity'         => 'SimpleQuantity',
        'skuDesc'                => 'SkuDesc',
        'skuId'                  => 'SkuId',
        'skuPicUrl'              => 'SkuPicUrl',
        'skuProperties'          => 'SkuProperties',
        'skuPropertiesJson'      => 'SkuPropertiesJson',
        'skuTitle'               => 'SkuTitle',
        'status'                 => 'Status',
        'tips'                   => 'Tips',
        'lmSkuAttributeMap'      => 'lmSkuAttributeMap',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->canSell) {
            $res['CanSell'] = $this->canSell;
        }
        if (null !== $this->customizedAttributeMap) {
            $res['CustomizedAttributeMap'] = $this->customizedAttributeMap;
        }
        if (null !== $this->extInfo) {
            $res['ExtInfo'] = $this->extInfo;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->hasQuantity) {
            $res['HasQuantity'] = $this->hasQuantity;
        }
        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }
        if (null !== $this->lmAttributeModels) {
            $res['LmAttributeModels'] = [];
            if (null !== $this->lmAttributeModels && \is_array($this->lmAttributeModels)) {
                $n = 0;
                foreach ($this->lmAttributeModels as $item) {
                    $res['LmAttributeModels'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->lmItemId) {
            $res['LmItemId'] = $this->lmItemId;
        }
        if (null !== $this->priceCent) {
            $res['PriceCent'] = $this->priceCent;
        }
        if (null !== $this->quantity) {
            $res['Quantity'] = $this->quantity;
        }
        if (null !== $this->reservedPrice) {
            $res['ReservedPrice'] = $this->reservedPrice;
        }
        if (null !== $this->simpleQuantity) {
            $res['SimpleQuantity'] = $this->simpleQuantity;
        }
        if (null !== $this->skuDesc) {
            $res['SkuDesc'] = $this->skuDesc;
        }
        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
        }
        if (null !== $this->skuPicUrl) {
            $res['SkuPicUrl'] = $this->skuPicUrl;
        }
        if (null !== $this->skuProperties) {
            $res['SkuProperties'] = $this->skuProperties;
        }
        if (null !== $this->skuPropertiesJson) {
            $res['SkuPropertiesJson'] = $this->skuPropertiesJson;
        }
        if (null !== $this->skuTitle) {
            $res['SkuTitle'] = $this->skuTitle;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->tips) {
            $res['Tips'] = $this->tips;
        }
        if (null !== $this->lmSkuAttributeMap) {
            $res['lmSkuAttributeMap'] = $this->lmSkuAttributeMap;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return skuList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CanSell'])) {
            $model->canSell = $map['CanSell'];
        }
        if (isset($map['CustomizedAttributeMap'])) {
            $model->customizedAttributeMap = $map['CustomizedAttributeMap'];
        }
        if (isset($map['ExtInfo'])) {
            $model->extInfo = $map['ExtInfo'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['HasQuantity'])) {
            $model->hasQuantity = $map['HasQuantity'];
        }
        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }
        if (isset($map['LmAttributeModels'])) {
            if (!empty($map['LmAttributeModels'])) {
                $model->lmAttributeModels = [];
                $n                        = 0;
                foreach ($map['LmAttributeModels'] as $item) {
                    $model->lmAttributeModels[$n++] = null !== $item ? lmAttributeModels::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['LmItemId'])) {
            $model->lmItemId = $map['LmItemId'];
        }
        if (isset($map['PriceCent'])) {
            $model->priceCent = $map['PriceCent'];
        }
        if (isset($map['Quantity'])) {
            $model->quantity = $map['Quantity'];
        }
        if (isset($map['ReservedPrice'])) {
            $model->reservedPrice = $map['ReservedPrice'];
        }
        if (isset($map['SimpleQuantity'])) {
            $model->simpleQuantity = $map['SimpleQuantity'];
        }
        if (isset($map['SkuDesc'])) {
            $model->skuDesc = $map['SkuDesc'];
        }
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }
        if (isset($map['SkuPicUrl'])) {
            $model->skuPicUrl = $map['SkuPicUrl'];
        }
        if (isset($map['SkuProperties'])) {
            $model->skuProperties = $map['SkuProperties'];
        }
        if (isset($map['SkuPropertiesJson'])) {
            $model->skuPropertiesJson = $map['SkuPropertiesJson'];
        }
        if (isset($map['SkuTitle'])) {
            $model->skuTitle = $map['SkuTitle'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Tips'])) {
            $model->tips = $map['Tips'];
        }
        if (isset($map['lmSkuAttributeMap'])) {
            $model->lmSkuAttributeMap = $map['lmSkuAttributeMap'];
        }

        return $model;
    }
}
