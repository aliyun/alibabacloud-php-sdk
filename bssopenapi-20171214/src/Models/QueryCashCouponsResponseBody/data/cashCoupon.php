<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryCashCouponsResponseBody\data;

use AlibabaCloud\Dara\Model;

class cashCoupon extends Model
{
    /**
     * @var string
     */
    public $applicableProducts;

    /**
     * @var string
     */
    public $applicableScenarios;

    /**
     * @var string
     */
    public $balance;

    /**
     * @var int
     */
    public $cashCouponId;

    /**
     * @var string
     */
    public $cashCouponNo;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $effectiveTime;

    /**
     * @var string
     */
    public $expiryTime;

    /**
     * @var string
     */
    public $grantedTime;

    /**
     * @var string
     */
    public $nominalValue;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'applicableProducts' => 'ApplicableProducts',
        'applicableScenarios' => 'ApplicableScenarios',
        'balance' => 'Balance',
        'cashCouponId' => 'CashCouponId',
        'cashCouponNo' => 'CashCouponNo',
        'description' => 'Description',
        'effectiveTime' => 'EffectiveTime',
        'expiryTime' => 'ExpiryTime',
        'grantedTime' => 'GrantedTime',
        'nominalValue' => 'NominalValue',
        'status' => 'Status',
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
