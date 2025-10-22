<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models\QueryBrokerDemandResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $auditStatus;

    /**
     * @var string
     */
    public $bargainSellerMobile;

    /**
     * @var float
     */
    public $bargainSellerPrice;

    /**
     * @var string
     */
    public $bizId;

    /**
     * @var string
     */
    public $demandDomain;

    /**
     * @var float
     */
    public $demandPrice;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $mobile;

    /**
     * @var int
     */
    public $orderType;

    /**
     * @var string
     */
    public $partnerDomain;

    /**
     * @var string
     */
    public $payDomain;

    /**
     * @var float
     */
    public $payPrice;

    /**
     * @var int
     */
    public $payTime;

    /**
     * @var int
     */
    public $produceType;

    /**
     * @var int
     */
    public $publishTime;

    /**
     * @var int
     */
    public $purchaseStatus;

    /**
     * @var float
     */
    public $servicePayPrice;

    /**
     * @var float
     */
    public $settleBasePrice;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'auditStatus' => 'AuditStatus',
        'bargainSellerMobile' => 'BargainSellerMobile',
        'bargainSellerPrice' => 'BargainSellerPrice',
        'bizId' => 'BizId',
        'demandDomain' => 'DemandDomain',
        'demandPrice' => 'DemandPrice',
        'description' => 'Description',
        'email' => 'Email',
        'mobile' => 'Mobile',
        'orderType' => 'OrderType',
        'partnerDomain' => 'PartnerDomain',
        'payDomain' => 'PayDomain',
        'payPrice' => 'PayPrice',
        'payTime' => 'PayTime',
        'produceType' => 'ProduceType',
        'publishTime' => 'PublishTime',
        'purchaseStatus' => 'PurchaseStatus',
        'servicePayPrice' => 'ServicePayPrice',
        'settleBasePrice' => 'SettleBasePrice',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->auditStatus) {
            $res['AuditStatus'] = $this->auditStatus;
        }

        if (null !== $this->bargainSellerMobile) {
            $res['BargainSellerMobile'] = $this->bargainSellerMobile;
        }

        if (null !== $this->bargainSellerPrice) {
            $res['BargainSellerPrice'] = $this->bargainSellerPrice;
        }

        if (null !== $this->bizId) {
            $res['BizId'] = $this->bizId;
        }

        if (null !== $this->demandDomain) {
            $res['DemandDomain'] = $this->demandDomain;
        }

        if (null !== $this->demandPrice) {
            $res['DemandPrice'] = $this->demandPrice;
        }

        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }

        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->mobile) {
            $res['Mobile'] = $this->mobile;
        }

        if (null !== $this->orderType) {
            $res['OrderType'] = $this->orderType;
        }

        if (null !== $this->partnerDomain) {
            $res['PartnerDomain'] = $this->partnerDomain;
        }

        if (null !== $this->payDomain) {
            $res['PayDomain'] = $this->payDomain;
        }

        if (null !== $this->payPrice) {
            $res['PayPrice'] = $this->payPrice;
        }

        if (null !== $this->payTime) {
            $res['PayTime'] = $this->payTime;
        }

        if (null !== $this->produceType) {
            $res['ProduceType'] = $this->produceType;
        }

        if (null !== $this->publishTime) {
            $res['PublishTime'] = $this->publishTime;
        }

        if (null !== $this->purchaseStatus) {
            $res['PurchaseStatus'] = $this->purchaseStatus;
        }

        if (null !== $this->servicePayPrice) {
            $res['ServicePayPrice'] = $this->servicePayPrice;
        }

        if (null !== $this->settleBasePrice) {
            $res['SettleBasePrice'] = $this->settleBasePrice;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AuditStatus'])) {
            $model->auditStatus = $map['AuditStatus'];
        }

        if (isset($map['BargainSellerMobile'])) {
            $model->bargainSellerMobile = $map['BargainSellerMobile'];
        }

        if (isset($map['BargainSellerPrice'])) {
            $model->bargainSellerPrice = $map['BargainSellerPrice'];
        }

        if (isset($map['BizId'])) {
            $model->bizId = $map['BizId'];
        }

        if (isset($map['DemandDomain'])) {
            $model->demandDomain = $map['DemandDomain'];
        }

        if (isset($map['DemandPrice'])) {
            $model->demandPrice = $map['DemandPrice'];
        }

        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }

        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['Mobile'])) {
            $model->mobile = $map['Mobile'];
        }

        if (isset($map['OrderType'])) {
            $model->orderType = $map['OrderType'];
        }

        if (isset($map['PartnerDomain'])) {
            $model->partnerDomain = $map['PartnerDomain'];
        }

        if (isset($map['PayDomain'])) {
            $model->payDomain = $map['PayDomain'];
        }

        if (isset($map['PayPrice'])) {
            $model->payPrice = $map['PayPrice'];
        }

        if (isset($map['PayTime'])) {
            $model->payTime = $map['PayTime'];
        }

        if (isset($map['ProduceType'])) {
            $model->produceType = $map['ProduceType'];
        }

        if (isset($map['PublishTime'])) {
            $model->publishTime = $map['PublishTime'];
        }

        if (isset($map['PurchaseStatus'])) {
            $model->purchaseStatus = $map['PurchaseStatus'];
        }

        if (isset($map['ServicePayPrice'])) {
            $model->servicePayPrice = $map['ServicePayPrice'];
        }

        if (isset($map['SettleBasePrice'])) {
            $model->settleBasePrice = $map['SettleBasePrice'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
