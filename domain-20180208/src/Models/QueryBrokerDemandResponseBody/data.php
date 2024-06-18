<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Domain\V20180208\Models\QueryBrokerDemandResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var int
     */
    public $auditStatus;

    /**
     * @example 13300000001
     *
     * @var string
     */
    public $bargainSellerMobile;

    /**
     * @example 100
     *
     * @var float
     */
    public $bargainSellerPrice;

    /**
     * @example SE20183915FI0178
     *
     * @var string
     */
    public $bizId;

    /**
     * @example taobao.com
     *
     * @var string
     */
    public $demandDomain;

    /**
     * @example 1
     *
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
     * @example 13300000000
     *
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
     * @example test.com
     *
     * @var string
     */
    public $payDomain;

    /**
     * @example 100
     *
     * @var float
     */
    public $payPrice;

    /**
     * @example 1524800053000
     *
     * @var int
     */
    public $payTime;

    /**
     * @example 1
     *
     * @var int
     */
    public $produceType;

    /**
     * @example 1524800053000
     *
     * @var int
     */
    public $publishTime;

    /**
     * @var int
     */
    public $purchaseStatus;

    /**
     * @example 18800
     *
     * @var float
     */
    public $servicePayPrice;

    /**
     * @var float
     */
    public $settleBasePrice;

    /**
     * @example 1
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'auditStatus'         => 'AuditStatus',
        'bargainSellerMobile' => 'BargainSellerMobile',
        'bargainSellerPrice'  => 'BargainSellerPrice',
        'bizId'               => 'BizId',
        'demandDomain'        => 'DemandDomain',
        'demandPrice'         => 'DemandPrice',
        'description'         => 'Description',
        'email'               => 'Email',
        'mobile'              => 'Mobile',
        'orderType'           => 'OrderType',
        'partnerDomain'       => 'PartnerDomain',
        'payDomain'           => 'PayDomain',
        'payPrice'            => 'PayPrice',
        'payTime'             => 'PayTime',
        'produceType'         => 'ProduceType',
        'publishTime'         => 'PublishTime',
        'purchaseStatus'      => 'PurchaseStatus',
        'servicePayPrice'     => 'ServicePayPrice',
        'settleBasePrice'     => 'SettleBasePrice',
        'status'              => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return data
     */
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
