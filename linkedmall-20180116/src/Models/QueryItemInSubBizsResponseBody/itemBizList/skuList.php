<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryItemInSubBizsResponseBody\itemBizList;

use AlibabaCloud\Tea\Model;

class skuList extends Model
{
    /**
     * @var int
     */
    public $priceCent;

    /**
     * @var int
     */
    public $pointPrice;

    /**
     * @var bool
     */
    public $canSell;

    /**
     * @var string
     */
    public $skuTitle;

    /**
     * @var string
     */
    public $skuPropertiesJson;

    /**
     * @var string
     */
    public $skuProperties;

    /**
     * @var int
     */
    public $skuId;

    /**
     * @var string
     */
    public $skuPicUrl;

    /**
     * @var int
     */
    public $points;

    /**
     * @var int
     */
    public $pointsAmount;

    /**
     * @var int
     */
    public $reservePrice;

    /**
     * @var string
     */
    public $benefitId;

    /**
     * @var mixed[]
     */
    public $customizedAttributeMap;
    protected $_name = [
        'priceCent'              => 'PriceCent',
        'pointPrice'             => 'PointPrice',
        'canSell'                => 'CanSell',
        'skuTitle'               => 'SkuTitle',
        'skuPropertiesJson'      => 'SkuPropertiesJson',
        'skuProperties'          => 'SkuProperties',
        'skuId'                  => 'SkuId',
        'skuPicUrl'              => 'SkuPicUrl',
        'points'                 => 'Points',
        'pointsAmount'           => 'PointsAmount',
        'reservePrice'           => 'ReservePrice',
        'benefitId'              => 'BenefitId',
        'customizedAttributeMap' => 'CustomizedAttributeMap',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->priceCent) {
            $res['PriceCent'] = $this->priceCent;
        }
        if (null !== $this->pointPrice) {
            $res['PointPrice'] = $this->pointPrice;
        }
        if (null !== $this->canSell) {
            $res['CanSell'] = $this->canSell;
        }
        if (null !== $this->skuTitle) {
            $res['SkuTitle'] = $this->skuTitle;
        }
        if (null !== $this->skuPropertiesJson) {
            $res['SkuPropertiesJson'] = $this->skuPropertiesJson;
        }
        if (null !== $this->skuProperties) {
            $res['SkuProperties'] = $this->skuProperties;
        }
        if (null !== $this->skuId) {
            $res['SkuId'] = $this->skuId;
        }
        if (null !== $this->skuPicUrl) {
            $res['SkuPicUrl'] = $this->skuPicUrl;
        }
        if (null !== $this->points) {
            $res['Points'] = $this->points;
        }
        if (null !== $this->pointsAmount) {
            $res['PointsAmount'] = $this->pointsAmount;
        }
        if (null !== $this->reservePrice) {
            $res['ReservePrice'] = $this->reservePrice;
        }
        if (null !== $this->benefitId) {
            $res['BenefitId'] = $this->benefitId;
        }
        if (null !== $this->customizedAttributeMap) {
            $res['CustomizedAttributeMap'] = $this->customizedAttributeMap;
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
        if (isset($map['PriceCent'])) {
            $model->priceCent = $map['PriceCent'];
        }
        if (isset($map['PointPrice'])) {
            $model->pointPrice = $map['PointPrice'];
        }
        if (isset($map['CanSell'])) {
            $model->canSell = $map['CanSell'];
        }
        if (isset($map['SkuTitle'])) {
            $model->skuTitle = $map['SkuTitle'];
        }
        if (isset($map['SkuPropertiesJson'])) {
            $model->skuPropertiesJson = $map['SkuPropertiesJson'];
        }
        if (isset($map['SkuProperties'])) {
            $model->skuProperties = $map['SkuProperties'];
        }
        if (isset($map['SkuId'])) {
            $model->skuId = $map['SkuId'];
        }
        if (isset($map['SkuPicUrl'])) {
            $model->skuPicUrl = $map['SkuPicUrl'];
        }
        if (isset($map['Points'])) {
            $model->points = $map['Points'];
        }
        if (isset($map['PointsAmount'])) {
            $model->pointsAmount = $map['PointsAmount'];
        }
        if (isset($map['ReservePrice'])) {
            $model->reservePrice = $map['ReservePrice'];
        }
        if (isset($map['BenefitId'])) {
            $model->benefitId = $map['BenefitId'];
        }
        if (isset($map['CustomizedAttributeMap'])) {
            $model->customizedAttributeMap = $map['CustomizedAttributeMap'];
        }

        return $model;
    }
}
