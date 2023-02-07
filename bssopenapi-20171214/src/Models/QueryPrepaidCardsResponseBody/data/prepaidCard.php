<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryPrepaidCardsResponseBody\data;

use AlibabaCloud\Tea\Model;

class prepaidCard extends Model
{
    /**
     * @var string
     */
    public $applicableProducts;

    /**
     * @example test
     *
     * @var string
     */
    public $applicableScenarios;

    /**
     * @example 100.00
     *
     * @var string
     */
    public $balance;

    /**
     * @example 2018-08-03T01:39:11Z
     *
     * @var string
     */
    public $effectiveTime;

    /**
     * @example 2019-08-04T01:39:11Z
     *
     * @var string
     */
    public $expiryTime;

    /**
     * @example 2018-08-03T01:39:11Z
     *
     * @var string
     */
    public $grantedTime;

    /**
     * @example 100.00
     *
     * @var string
     */
    public $nominalValue;

    /**
     * @example 213432432
     *
     * @var int
     */
    public $prepaidCardId;

    /**
     * @example Q-7edaab979fc9
     *
     * @var string
     */
    public $prepaidCardNo;

    /**
     * @example Available
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'applicableProducts'  => 'ApplicableProducts',
        'applicableScenarios' => 'ApplicableScenarios',
        'balance'             => 'Balance',
        'effectiveTime'       => 'EffectiveTime',
        'expiryTime'          => 'ExpiryTime',
        'grantedTime'         => 'GrantedTime',
        'nominalValue'        => 'NominalValue',
        'prepaidCardId'       => 'PrepaidCardId',
        'prepaidCardNo'       => 'PrepaidCardNo',
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
        if (null !== $this->prepaidCardId) {
            $res['PrepaidCardId'] = $this->prepaidCardId;
        }
        if (null !== $this->prepaidCardNo) {
            $res['PrepaidCardNo'] = $this->prepaidCardNo;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['ApplicableProducts'])) {
            $model->applicableProducts = $map['ApplicableProducts'];
        }
        if (isset($map['ApplicableScenarios'])) {
            $model->applicableScenarios = $map['ApplicableScenarios'];
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
        if (isset($map['PrepaidCardId'])) {
            $model->prepaidCardId = $map['PrepaidCardId'];
        }
        if (isset($map['PrepaidCardNo'])) {
            $model->prepaidCardNo = $map['PrepaidCardNo'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
