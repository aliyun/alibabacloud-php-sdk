<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRedeemResponseBody\data\redeem;

use AlibabaCloud\Tea\Model;

class redeem extends Model
{
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
    public $status;

    /**
     * @var string
     */
    public $specification;

    /**
     * @var string
     */
    public $nominalValue;

    /**
     * @var string
     */
    public $effectiveTime;

    /**
     * @var string
     */
    public $redeemId;

    /**
     * @var string
     */
    public $redeemNo;

    /**
     * @var string
     */
    public $applicableProducts;

    /**
     * @var string
     */
    public $balance;
    protected $_name = [
        'expiryTime'         => 'ExpiryTime',
        'grantedTime'        => 'GrantedTime',
        'status'             => 'Status',
        'specification'      => 'Specification',
        'nominalValue'       => 'NominalValue',
        'effectiveTime'      => 'EffectiveTime',
        'redeemId'           => 'RedeemId',
        'redeemNo'           => 'RedeemNo',
        'applicableProducts' => 'ApplicableProducts',
        'balance'            => 'Balance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->expiryTime) {
            $res['ExpiryTime'] = $this->expiryTime;
        }
        if (null !== $this->grantedTime) {
            $res['GrantedTime'] = $this->grantedTime;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->specification) {
            $res['Specification'] = $this->specification;
        }
        if (null !== $this->nominalValue) {
            $res['NominalValue'] = $this->nominalValue;
        }
        if (null !== $this->effectiveTime) {
            $res['EffectiveTime'] = $this->effectiveTime;
        }
        if (null !== $this->redeemId) {
            $res['RedeemId'] = $this->redeemId;
        }
        if (null !== $this->redeemNo) {
            $res['RedeemNo'] = $this->redeemNo;
        }
        if (null !== $this->applicableProducts) {
            $res['ApplicableProducts'] = $this->applicableProducts;
        }
        if (null !== $this->balance) {
            $res['Balance'] = $this->balance;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return redeem
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ExpiryTime'])) {
            $model->expiryTime = $map['ExpiryTime'];
        }
        if (isset($map['GrantedTime'])) {
            $model->grantedTime = $map['GrantedTime'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Specification'])) {
            $model->specification = $map['Specification'];
        }
        if (isset($map['NominalValue'])) {
            $model->nominalValue = $map['NominalValue'];
        }
        if (isset($map['EffectiveTime'])) {
            $model->effectiveTime = $map['EffectiveTime'];
        }
        if (isset($map['RedeemId'])) {
            $model->redeemId = $map['RedeemId'];
        }
        if (isset($map['RedeemNo'])) {
            $model->redeemNo = $map['RedeemNo'];
        }
        if (isset($map['ApplicableProducts'])) {
            $model->applicableProducts = $map['ApplicableProducts'];
        }
        if (isset($map['Balance'])) {
            $model->balance = $map['Balance'];
        }

        return $model;
    }
}
