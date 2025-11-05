<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models\GetCouponTemplateDetailResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
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
    public $createdTime;

    /**
     * @var float
     */
    public $denomination;

    /**
     * @var int
     */
    public $limitPerPerson;

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
    public $status;

    /**
     * @var int
     */
    public $templateId;

    /**
     * @var string
     */
    public $templateName;

    /**
     * @var string
     */
    public $validUntil;

    /**
     * @var string
     */
    public $validUntilType;
    protected $_name = [
        'applicableProducts' => 'ApplicableProducts',
        'costBearer' => 'CostBearer',
        'couponDescription' => 'CouponDescription',
        'createdTime' => 'CreatedTime',
        'denomination' => 'Denomination',
        'limitPerPerson' => 'LimitPerPerson',
        'purchaseType' => 'PurchaseType',
        'reasonForApplication' => 'ReasonForApplication',
        'status' => 'Status',
        'templateId' => 'TemplateId',
        'templateName' => 'TemplateName',
        'validUntil' => 'ValidUntil',
        'validUntilType' => 'ValidUntilType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->applicableProducts) {
            $res['ApplicableProducts'] = $this->applicableProducts;
        }

        if (null !== $this->costBearer) {
            $res['CostBearer'] = $this->costBearer;
        }

        if (null !== $this->couponDescription) {
            $res['CouponDescription'] = $this->couponDescription;
        }

        if (null !== $this->createdTime) {
            $res['CreatedTime'] = $this->createdTime;
        }

        if (null !== $this->denomination) {
            $res['Denomination'] = $this->denomination;
        }

        if (null !== $this->limitPerPerson) {
            $res['LimitPerPerson'] = $this->limitPerPerson;
        }

        if (null !== $this->purchaseType) {
            $res['PurchaseType'] = $this->purchaseType;
        }

        if (null !== $this->reasonForApplication) {
            $res['ReasonForApplication'] = $this->reasonForApplication;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        if (null !== $this->validUntil) {
            $res['ValidUntil'] = $this->validUntil;
        }

        if (null !== $this->validUntilType) {
            $res['ValidUntilType'] = $this->validUntilType;
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
        if (isset($map['ApplicableProducts'])) {
            $model->applicableProducts = $map['ApplicableProducts'];
        }

        if (isset($map['CostBearer'])) {
            $model->costBearer = $map['CostBearer'];
        }

        if (isset($map['CouponDescription'])) {
            $model->couponDescription = $map['CouponDescription'];
        }

        if (isset($map['CreatedTime'])) {
            $model->createdTime = $map['CreatedTime'];
        }

        if (isset($map['Denomination'])) {
            $model->denomination = $map['Denomination'];
        }

        if (isset($map['LimitPerPerson'])) {
            $model->limitPerPerson = $map['LimitPerPerson'];
        }

        if (isset($map['PurchaseType'])) {
            $model->purchaseType = $map['PurchaseType'];
        }

        if (isset($map['ReasonForApplication'])) {
            $model->reasonForApplication = $map['ReasonForApplication'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        if (isset($map['ValidUntil'])) {
            $model->validUntil = $map['ValidUntil'];
        }

        if (isset($map['ValidUntilType'])) {
            $model->validUntilType = $map['ValidUntilType'];
        }

        return $model;
    }
}
