<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryItemInSubBizsResponseBody\itemBizList;

use AlibabaCloud\Tea\Model;

class skuList extends Model
{
    /**
     * @var string
     */
    public $benefitId;

    /**
     * @var bool
     */
    public $canSell;

    /**
     * @var mixed[]
     */
    public $customizedAttributeMap;

    /**
     * @var int
     */
    public $pointPrice;

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
    public $priceCent;

    /**
     * @var int
     */
    public $reservePrice;

    /**
     * @var int
     */
    public $skuId;

    /**
     * @var string
     */
    public $skuPicUrl;

    /**
     * @var string
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
    protected $_name = [
        'benefitId'              => 'BenefitId',
        'canSell'                => 'CanSell',
        'customizedAttributeMap' => 'CustomizedAttributeMap',
        'pointPrice'             => 'PointPrice',
        'points'                 => 'Points',
        'pointsAmount'           => 'PointsAmount',
        'priceCent'              => 'PriceCent',
        'reservePrice'           => 'ReservePrice',
        'skuId'                  => 'SkuId',
        'skuPicUrl'              => 'SkuPicUrl',
        'skuProperties'          => 'SkuProperties',
        'skuPropertiesJson'      => 'SkuPropertiesJson',
        'skuTitle'               => 'SkuTitle',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->benefitId) {
            $res['BenefitId'] = $this->benefitId;
        }
        if (null !== $this->canSell) {
            $res['CanSell'] = $this->canSell;
        }
        if (null !== $this->customizedAttributeMap) {
            $res['CustomizedAttributeMap'] = $this->customizedAttributeMap;
        }
        if (null !== $this->pointPrice) {
            $res['PointPrice'] = $this->pointPrice;
        }
        if (null !== $this->points) {
            $res['Points'] = $this->points;
        }
        if (null !== $this->pointsAmount) {
            $res['PointsAmount'] = $this->pointsAmount;
        }
        if (null !== $this->priceCent) {
            $res['PriceCent'] = $this->priceCent;
        }
        if (null !== $this->reservePrice) {
            $res['ReservePrice'] = $this->reservePrice;
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
        if (isset($map['BenefitId'])) {
            $model->benefitId = $map['BenefitId'];
        }
        if (isset($map['CanSell'])) {
            $model->canSell = $map['CanSell'];
        }
        if (isset($map['CustomizedAttributeMap'])) {
            $model->customizedAttributeMap = $map['CustomizedAttributeMap'];
        }
        if (isset($map['PointPrice'])) {
            $model->pointPrice = $map['PointPrice'];
        }
        if (isset($map['Points'])) {
            $model->points = $map['Points'];
        }
        if (isset($map['PointsAmount'])) {
            $model->pointsAmount = $map['PointsAmount'];
        }
        if (isset($map['PriceCent'])) {
            $model->priceCent = $map['PriceCent'];
        }
        if (isset($map['ReservePrice'])) {
            $model->reservePrice = $map['ReservePrice'];
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

        return $model;
    }
}
