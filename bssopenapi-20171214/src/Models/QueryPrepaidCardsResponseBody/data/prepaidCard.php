<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryPrepaidCardsResponseBody\data;

use AlibabaCloud\Tea\Model;

class prepaidCard extends Model
{
    /**
     * @var string
     */
    public $status;

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
    public $effectiveTime;

    /**
     * @var string
     */
    public $prepaidCardNo;

    /**
     * @var string
     */
    public $applicableScenarios;

    /**
     * @var int
     */
    public $prepaidCardId;

    /**
     * @var string
     */
    public $applicableProducts;

    /**
     * @var string
     */
    public $balance;
    protected $_name = [
        'status'              => 'Status',
        'expiryTime'          => 'ExpiryTime',
        'grantedTime'         => 'GrantedTime',
        'nominalValue'        => 'NominalValue',
        'effectiveTime'       => 'EffectiveTime',
        'prepaidCardNo'       => 'PrepaidCardNo',
        'applicableScenarios' => 'ApplicableScenarios',
        'prepaidCardId'       => 'PrepaidCardId',
        'applicableProducts'  => 'ApplicableProducts',
        'balance'             => 'Balance',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (null !== $this->effectiveTime) {
            $res['EffectiveTime'] = $this->effectiveTime;
        }
        if (null !== $this->prepaidCardNo) {
            $res['PrepaidCardNo'] = $this->prepaidCardNo;
        }
        if (null !== $this->applicableScenarios) {
            $res['ApplicableScenarios'] = $this->applicableScenarios;
        }
        if (null !== $this->prepaidCardId) {
            $res['PrepaidCardId'] = $this->prepaidCardId;
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
     * @return prepaidCard
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
        if (isset($map['EffectiveTime'])) {
            $model->effectiveTime = $map['EffectiveTime'];
        }
        if (isset($map['PrepaidCardNo'])) {
            $model->prepaidCardNo = $map['PrepaidCardNo'];
        }
        if (isset($map['ApplicableScenarios'])) {
            $model->applicableScenarios = $map['ApplicableScenarios'];
        }
        if (isset($map['PrepaidCardId'])) {
            $model->prepaidCardId = $map['PrepaidCardId'];
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
