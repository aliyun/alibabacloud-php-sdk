<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryMonthlyInstanceConsumptionResponseBody\data\items;

use AlibabaCloud\Tea\Model;

class item extends Model
{
    /**
     * @var float
     */
    public $pretaxAmount;

    /**
     * @var float
     */
    public $discountAmount;

    /**
     * @var string
     */
    public $payerAccount;

    /**
     * @var string
     */
    public $tag;

    /**
     * @var string
     */
    public $instanceID;

    /**
     * @var string
     */
    public $currency;

    /**
     * @var string
     */
    public $subscriptionType;

    /**
     * @var string
     */
    public $paymentCurrency;

    /**
     * @var string
     */
    public $ownerID;

    /**
     * @var string
     */
    public $productType;

    /**
     * @var string
     */
    public $region;

    /**
     * @var float
     */
    public $afterTaxAmount;

    /**
     * @var float
     */
    public $pretaxGrossAmount;

    /**
     * @var string
     */
    public $resourceGroup;

    /**
     * @var float
     */
    public $tax;

    /**
     * @var float
     */
    public $pretaxAmountLocal;

    /**
     * @var string
     */
    public $productCode;
    protected $_name = [
        'pretaxAmount'      => 'PretaxAmount',
        'discountAmount'    => 'DiscountAmount',
        'payerAccount'      => 'PayerAccount',
        'tag'               => 'Tag',
        'instanceID'        => 'InstanceID',
        'currency'          => 'Currency',
        'subscriptionType'  => 'SubscriptionType',
        'paymentCurrency'   => 'PaymentCurrency',
        'ownerID'           => 'OwnerID',
        'productType'       => 'ProductType',
        'region'            => 'Region',
        'afterTaxAmount'    => 'AfterTaxAmount',
        'pretaxGrossAmount' => 'PretaxGrossAmount',
        'resourceGroup'     => 'ResourceGroup',
        'tax'               => 'Tax',
        'pretaxAmountLocal' => 'PretaxAmountLocal',
        'productCode'       => 'ProductCode',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->pretaxAmount) {
            $res['PretaxAmount'] = $this->pretaxAmount;
        }
        if (null !== $this->discountAmount) {
            $res['DiscountAmount'] = $this->discountAmount;
        }
        if (null !== $this->payerAccount) {
            $res['PayerAccount'] = $this->payerAccount;
        }
        if (null !== $this->tag) {
            $res['Tag'] = $this->tag;
        }
        if (null !== $this->instanceID) {
            $res['InstanceID'] = $this->instanceID;
        }
        if (null !== $this->currency) {
            $res['Currency'] = $this->currency;
        }
        if (null !== $this->subscriptionType) {
            $res['SubscriptionType'] = $this->subscriptionType;
        }
        if (null !== $this->paymentCurrency) {
            $res['PaymentCurrency'] = $this->paymentCurrency;
        }
        if (null !== $this->ownerID) {
            $res['OwnerID'] = $this->ownerID;
        }
        if (null !== $this->productType) {
            $res['ProductType'] = $this->productType;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->afterTaxAmount) {
            $res['AfterTaxAmount'] = $this->afterTaxAmount;
        }
        if (null !== $this->pretaxGrossAmount) {
            $res['PretaxGrossAmount'] = $this->pretaxGrossAmount;
        }
        if (null !== $this->resourceGroup) {
            $res['ResourceGroup'] = $this->resourceGroup;
        }
        if (null !== $this->tax) {
            $res['Tax'] = $this->tax;
        }
        if (null !== $this->pretaxAmountLocal) {
            $res['PretaxAmountLocal'] = $this->pretaxAmountLocal;
        }
        if (null !== $this->productCode) {
            $res['ProductCode'] = $this->productCode;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return item
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['PretaxAmount'])) {
            $model->pretaxAmount = $map['PretaxAmount'];
        }
        if (isset($map['DiscountAmount'])) {
            $model->discountAmount = $map['DiscountAmount'];
        }
        if (isset($map['PayerAccount'])) {
            $model->payerAccount = $map['PayerAccount'];
        }
        if (isset($map['Tag'])) {
            $model->tag = $map['Tag'];
        }
        if (isset($map['InstanceID'])) {
            $model->instanceID = $map['InstanceID'];
        }
        if (isset($map['Currency'])) {
            $model->currency = $map['Currency'];
        }
        if (isset($map['SubscriptionType'])) {
            $model->subscriptionType = $map['SubscriptionType'];
        }
        if (isset($map['PaymentCurrency'])) {
            $model->paymentCurrency = $map['PaymentCurrency'];
        }
        if (isset($map['OwnerID'])) {
            $model->ownerID = $map['OwnerID'];
        }
        if (isset($map['ProductType'])) {
            $model->productType = $map['ProductType'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['AfterTaxAmount'])) {
            $model->afterTaxAmount = $map['AfterTaxAmount'];
        }
        if (isset($map['PretaxGrossAmount'])) {
            $model->pretaxGrossAmount = $map['PretaxGrossAmount'];
        }
        if (isset($map['ResourceGroup'])) {
            $model->resourceGroup = $map['ResourceGroup'];
        }
        if (isset($map['Tax'])) {
            $model->tax = $map['Tax'];
        }
        if (isset($map['PretaxAmountLocal'])) {
            $model->pretaxAmountLocal = $map['PretaxAmountLocal'];
        }
        if (isset($map['ProductCode'])) {
            $model->productCode = $map['ProductCode'];
        }

        return $model;
    }
}
