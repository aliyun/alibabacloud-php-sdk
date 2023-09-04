<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCashCouponsResponseBody\data;

use AlibabaCloud\Tea\Model;

class cashCoupon extends Model
{
    /**
     * @description The service to which the voucher is applicable.
     *
     * @example All Alibaba Cloud services
     *
     * @var string
     */
    public $applicableProducts;

    /**
     * @description The scenario to which the voucher is applicable.
     *
     * @example Pay for the pay-as-you-go bills of Alibaba Cloud services or purchase an instance of an Alibaba Cloud service
     *
     * @var string
     */
    public $applicableScenarios;

    /**
     * @description The remaining quota of the voucher.
     *
     * @example 100.00
     *
     * @var string
     */
    public $balance;

    /**
     * @description The ID of the voucher.
     *
     * @example 34534253254325
     *
     * @var int
     */
    public $cashCouponId;

    /**
     * @description The code of the voucher.
     *
     * @example Q-b1485def8f04a
     *
     * @var string
     */
    public $cashCouponNo;

    /**
     * @var string
     */
    public $description;

    /**
     * @description The time when the voucher took effect.
     *
     * @example 2018-08-02T15:15:50Z
     *
     * @var string
     */
    public $effectiveTime;

    /**
     * @description The time when the voucher expired.
     *
     * @example 2019-01-29T15:15:50Z
     *
     * @var string
     */
    public $expiryTime;

    /**
     * @description The time when the voucher was released.
     *
     * @example 2018-08-02T15:15:50Z
     *
     * @var string
     */
    public $grantedTime;

    /**
     * @description The denomination of the voucher.
     *
     * @example 100.00
     *
     * @var string
     */
    public $nominalValue;

    /**
     * @description The state of the voucher. Valid values:
     *
     *   Available: The voucher is valid.
     *   Expired: The voucher has expired.
     *   Cancelled: The voucher is canceled.
     *
     * @example Available
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'applicableProducts'  => 'ApplicableProducts',
        'applicableScenarios' => 'ApplicableScenarios',
        'balance'             => 'Balance',
        'cashCouponId'        => 'CashCouponId',
        'cashCouponNo'        => 'CashCouponNo',
        'description'         => 'Description',
        'effectiveTime'       => 'EffectiveTime',
        'expiryTime'          => 'ExpiryTime',
        'grantedTime'         => 'GrantedTime',
        'nominalValue'        => 'NominalValue',
        'status'              => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicableProducts) {
            $res['ApplicableProducts'] = $this->applicableProducts;
        }
        if (null !== $this->applicableScenarios) {
            $res['ApplicableScenarios'] = $this->applicableScenarios;
        }
        if (null !== $this->balance) {
            $res['Balance'] = $this->balance;
        }
        if (null !== $this->cashCouponId) {
            $res['CashCouponId'] = $this->cashCouponId;
        }
        if (null !== $this->cashCouponNo) {
            $res['CashCouponNo'] = $this->cashCouponNo;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->effectiveTime) {
            $res['EffectiveTime'] = $this->effectiveTime;
        }
        if (null !== $this->expiryTime) {
            $res['ExpiryTime'] = $this->expiryTime;
        }
        if (null !== $this->grantedTime) {
            $res['GrantedTime'] = $this->grantedTime;
        }
        if (null !== $this->nominalValue) {
            $res['NominalValue'] = $this->nominalValue;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return cashCoupon
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicableProducts'])) {
            $model->applicableProducts = $map['ApplicableProducts'];
        }
        if (isset($map['ApplicableScenarios'])) {
            $model->applicableScenarios = $map['ApplicableScenarios'];
        }
        if (isset($map['Balance'])) {
            $model->balance = $map['Balance'];
        }
        if (isset($map['CashCouponId'])) {
            $model->cashCouponId = $map['CashCouponId'];
        }
        if (isset($map['CashCouponNo'])) {
            $model->cashCouponNo = $map['CashCouponNo'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['EffectiveTime'])) {
            $model->effectiveTime = $map['EffectiveTime'];
        }
        if (isset($map['ExpiryTime'])) {
            $model->expiryTime = $map['ExpiryTime'];
        }
        if (isset($map['GrantedTime'])) {
            $model->grantedTime = $map['GrantedTime'];
        }
        if (isset($map['NominalValue'])) {
            $model->nominalValue = $map['NominalValue'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
