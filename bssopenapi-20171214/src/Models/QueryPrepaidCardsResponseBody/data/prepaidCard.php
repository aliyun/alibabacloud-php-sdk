<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BssOpenApi\V20171214\Models\QueryPrepaidCardsResponseBody\data;

use AlibabaCloud\Tea\Model;

class prepaidCard extends Model
{
    /**
     * @description The services to which the prepaid card is applicable.
     *
     * @example All Alibaba Cloud services
     *
     * @var string
     */
    public $applicableProducts;

    /**
     * @description The scenario to which the prepaid card is applicable.
     *
     * @example test
     *
     * @var string
     */
    public $applicableScenarios;

    /**
     * @description The balance of the prepaid card.
     *
     * @example 100.00
     *
     * @var string
     */
    public $balance;

    /**
     * @description The time when the prepaid card took effect.
     *
     * @example 2018-08-03T01:39:11Z
     *
     * @var string
     */
    public $effectiveTime;

    /**
     * @description The time when the prepaid card expired.
     *
     * @example 2019-08-04T01:39:11Z
     *
     * @var string
     */
    public $expiryTime;

    /**
     * @description The time when the prepaid card was issued.
     *
     * @example 2018-08-03T01:39:11Z
     *
     * @var string
     */
    public $grantedTime;

    /**
     * @description The nominal value of the prepaid card.
     *
     * @example 100.00
     *
     * @var string
     */
    public $nominalValue;

    /**
     * @description The ID of the prepaid card.
     *
     * @example 213432432
     *
     * @var int
     */
    public $prepaidCardId;

    /**
     * @description The number of the prepaid card.
     *
     * @example Q-7edaab979fc9
     *
     * @var string
     */
    public $prepaidCardNo;

    /**
     * @description The status of the prepaid card. Valid values:
     *
     *   Available: The prepaid card is valid.
     *   Expired: The prepaid card expired.
     *   Cancelled: The prepaid card is invalid.
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
