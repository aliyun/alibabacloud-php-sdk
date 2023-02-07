<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryRedeemResponseBody\data\redeem;

use AlibabaCloud\Tea\Model;

class redeem extends Model
{
    /**
     * @var string
     */
    public $applicableProducts;

    /**
     * @example 0
     *
     * @var string
     */
    public $balance;

    /**
     * @example 2018-05-14 20:25:00
     *
     * @var string
     */
    public $effectiveTime;

    /**
     * @example 2018-06-13 20:25:00
     *
     * @var string
     */
    public $expiryTime;

    /**
     * @example 2018-05-14 20:25:00
     *
     * @var string
     */
    public $grantedTime;

    /**
     * @example 0
     *
     * @var string
     */
    public $nominalValue;

    /**
     * @example 1342
     *
     * @var string
     */
    public $redeemId;

    /**
     * @example 4889*****1610
     *
     * @var string
     */
    public $redeemNo;

    /**
     * @var string
     */
    public $specification;

    /**
     * @example Generated
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'applicableProducts' => 'ApplicableProducts',
        'balance'            => 'Balance',
        'effectiveTime'      => 'EffectiveTime',
        'expiryTime'         => 'ExpiryTime',
        'grantedTime'        => 'GrantedTime',
        'nominalValue'       => 'NominalValue',
        'redeemId'           => 'RedeemId',
        'redeemNo'           => 'RedeemNo',
        'specification'      => 'Specification',
        'status'             => 'Status',
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
        if (null !== $this->balance) {
            $res['Balance'] = $this->balance;
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
        if (null !== $this->redeemId) {
            $res['RedeemId'] = $this->redeemId;
        }
        if (null !== $this->redeemNo) {
            $res['RedeemNo'] = $this->redeemNo;
        }
        if (null !== $this->specification) {
            $res['Specification'] = $this->specification;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ApplicableProducts'])) {
            $model->applicableProducts = $map['ApplicableProducts'];
        }
        if (isset($map['Balance'])) {
            $model->balance = $map['Balance'];
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
        if (isset($map['RedeemId'])) {
            $model->redeemId = $map['RedeemId'];
        }
        if (isset($map['RedeemNo'])) {
            $model->redeemNo = $map['RedeemNo'];
        }
        if (isset($map['Specification'])) {
            $model->specification = $map['Specification'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
