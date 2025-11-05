<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models;

use AlibabaCloud\Dara\Model;

class CreateCouponTemplateRequest extends Model
{
    /**
     * @var string
     */
    public $acceptLanguage;

    /**
     * @var string
     */
    public $applicableProducts;

    /**
     * @var string
     */
    public $costBearer;

    /**
     * @var string
     */
    public $couponDescription;

    /**
     * @var string
     */
    public $expireddate;

    /**
     * @var string
     */
    public $limitPerPerson;

    /**
     * @var string[]
     */
    public $productType;

    /**
     * @var string
     */
    public $purchaseType;

    /**
     * @var string
     */
    public $reasonForApplication;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $vailddate;

    /**
     * @var string
     */
    public $vaildperioddays;

    /**
     * @var string
     */
    public $validUntil;

    /**
     * @var string
     */
    public $value;
    protected $_name = [
        'acceptLanguage' => 'AcceptLanguage',
        'applicableProducts' => 'ApplicableProducts',
        'costBearer' => 'CostBearer',
        'couponDescription' => 'CouponDescription',
        'expireddate' => 'Expireddate',
        'limitPerPerson' => 'LimitPerPerson',
        'productType' => 'ProductType',
        'purchaseType' => 'PurchaseType',
        'reasonForApplication' => 'ReasonForApplication',
        'templateName' => 'TemplateName',
        'vailddate' => 'Vailddate',
        'vaildperioddays' => 'Vaildperioddays',
        'validUntil' => 'ValidUntil',
        'value' => 'Value',
    ];

    public function validate()
    {
        if (\is_array($this->productType)) {
            Model::validateArray($this->productType);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->productType) {
            if (\is_array($this->productType)) {
                $res['ProductType'] = [];
                $n1 = 0;
                foreach ($this->productType as $item1) {
                    $res['ProductType'][$n1] = $item1;
                    ++$n1;
                }
            }
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
            if (!empty($map['ProductType'])) {
                $model->productType = [];
                $n1 = 0;
                foreach ($map['ProductType'] as $item1) {
                    $model->productType[$n1] = $item1;
                    ++$n1;
                }
            }
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
