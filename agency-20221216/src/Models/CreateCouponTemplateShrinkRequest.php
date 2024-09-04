<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models;

use AlibabaCloud\Tea\Model;

class CreateCouponTemplateShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example zh-CN
     *
     * @var string
     */
    public $acceptLanguage;

    /**
     * @description This parameter is required.
     *
     * @example All Products
     *
     * @var string
     */
    public $applicableProducts;

    /**
     * @description This parameter is required.
     *
     * @example Partner
     *
     * @var string
     */
    public $costBearer;

    /**
     * @var string
     */
    public $couponDescription;

    /**
     * @example 2024-08-26
     *
     * @var string
     */
    public $expireddate;

    /**
     * @description This parameter is required.
     *
     * @example Unlimited
     *
     * @var string
     */
    public $limitPerPerson;

    /**
     * @var string
     */
    public $productTypeShrink;

    /**
     * @example ALL
     *
     * @var string
     */
    public $purchaseType;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $reasonForApplication;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $templateName;

    /**
     * @example 2024-08-26
     *
     * @var string
     */
    public $vailddate;

    /**
     * @example 1
     *
     * @var string
     */
    public $vaildperioddays;

    /**
     * @description This parameter is required.
     *
     * @example Validity Duration
     *
     * @var string
     */
    public $validUntil;

    /**
     * @description This parameter is required.
     *
     * @example 1
     *
     * @var string
     */
    public $value;
    protected $_name = [
        'acceptLanguage'       => 'AcceptLanguage',
        'applicableProducts'   => 'ApplicableProducts',
        'costBearer'           => 'CostBearer',
        'couponDescription'    => 'CouponDescription',
        'expireddate'          => 'Expireddate',
        'limitPerPerson'       => 'LimitPerPerson',
        'productTypeShrink'    => 'ProductType',
        'purchaseType'         => 'PurchaseType',
        'reasonForApplication' => 'ReasonForApplication',
        'templateName'         => 'TemplateName',
        'vailddate'            => 'Vailddate',
        'vaildperioddays'      => 'Vaildperioddays',
        'validUntil'           => 'ValidUntil',
        'value'                => 'Value',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->acceptLanguage) {
            $res['AcceptLanguage'] = $this->acceptLanguage;
        }
        if (null !== $this->applicableProducts) {
            $res['ApplicableProducts'] = $this->applicableProducts;
        }
        if (null !== $this->costBearer) {
            $res['CostBearer'] = $this->costBearer;
        }
        if (null !== $this->couponDescription) {
            $res['CouponDescription'] = $this->couponDescription;
        }
        if (null !== $this->expireddate) {
            $res['Expireddate'] = $this->expireddate;
        }
        if (null !== $this->limitPerPerson) {
            $res['LimitPerPerson'] = $this->limitPerPerson;
        }
        if (null !== $this->productTypeShrink) {
            $res['ProductType'] = $this->productTypeShrink;
        }
        if (null !== $this->purchaseType) {
            $res['PurchaseType'] = $this->purchaseType;
        }
        if (null !== $this->reasonForApplication) {
            $res['ReasonForApplication'] = $this->reasonForApplication;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }
        if (null !== $this->vailddate) {
            $res['Vailddate'] = $this->vailddate;
        }
        if (null !== $this->vaildperioddays) {
            $res['Vaildperioddays'] = $this->vaildperioddays;
        }
        if (null !== $this->validUntil) {
            $res['ValidUntil'] = $this->validUntil;
        }
        if (null !== $this->value) {
            $res['Value'] = $this->value;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateCouponTemplateShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AcceptLanguage'])) {
            $model->acceptLanguage = $map['AcceptLanguage'];
        }
        if (isset($map['ApplicableProducts'])) {
            $model->applicableProducts = $map['ApplicableProducts'];
        }
        if (isset($map['CostBearer'])) {
            $model->costBearer = $map['CostBearer'];
        }
        if (isset($map['CouponDescription'])) {
            $model->couponDescription = $map['CouponDescription'];
        }
        if (isset($map['Expireddate'])) {
            $model->expireddate = $map['Expireddate'];
        }
        if (isset($map['LimitPerPerson'])) {
            $model->limitPerPerson = $map['LimitPerPerson'];
        }
        if (isset($map['ProductType'])) {
            $model->productTypeShrink = $map['ProductType'];
        }
        if (isset($map['PurchaseType'])) {
            $model->purchaseType = $map['PurchaseType'];
        }
        if (isset($map['ReasonForApplication'])) {
            $model->reasonForApplication = $map['ReasonForApplication'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }
        if (isset($map['Vailddate'])) {
            $model->vailddate = $map['Vailddate'];
        }
        if (isset($map['Vaildperioddays'])) {
            $model->vaildperioddays = $map['Vaildperioddays'];
        }
        if (isset($map['ValidUntil'])) {
            $model->validUntil = $map['ValidUntil'];
        }
        if (isset($map['Value'])) {
            $model->value = $map['Value'];
        }

        return $model;
    }
}
