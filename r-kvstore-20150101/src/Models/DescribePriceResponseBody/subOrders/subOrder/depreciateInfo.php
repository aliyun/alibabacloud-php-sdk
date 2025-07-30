<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\subOrders\subOrder;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\subOrders\subOrder\depreciateInfo\contractActivity;
use AlibabaCloud\Tea\Model;

class depreciateInfo extends Model
{
    /**
     * @description The price reduction rate.
     *
     * @example ****
     *
     * @var int
     */
    public $cheapRate;

    /**
     * @description The new total price displayed on the official website.
     *
     * @example ****
     *
     * @var int
     */
    public $cheapStandAmount;

    /**
     * @description The contract promotion.
     *
     * @var contractActivity
     */
    public $contractActivity;

    /**
     * @description The promotional offer (displayed in the total order amount).
     *
     * @example ****
     *
     * @var int
     */
    public $differential;

    /**
     * @description The name of the promotional offer.
     *
     * @example ****
     *
     * @var string
     */
    public $differentialName;

    /**
     * @description Indicates whether eligibility for the contracted discount is met.
     *
     * @example false
     *
     * @var bool
     */
    public $isContractActivity;

    /**
     * @description The list price.
     *
     * @example ****
     *
     * @var int
     */
    public $listPrice;

    /**
     * @description The monthly price.
     *
     * @example ****
     *
     * @var int
     */
    public $monthPrice;

    /**
     * @description The original total price displayed on the official website.
     *
     * @example ****
     *
     * @var int
     */
    public $originalStandAmount;

    /**
     * @description The start time of the activity.
     *
     * @example 2024-11-18T00:00:00Z
     *
     * @var string
     */
    public $startTime;
    protected $_name = [
        'cheapRate' => 'CheapRate',
        'cheapStandAmount' => 'CheapStandAmount',
        'contractActivity' => 'ContractActivity',
        'differential' => 'Differential',
        'differentialName' => 'DifferentialName',
        'isContractActivity' => 'IsContractActivity',
        'listPrice' => 'ListPrice',
        'monthPrice' => 'MonthPrice',
        'originalStandAmount' => 'OriginalStandAmount',
        'startTime' => 'StartTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cheapRate) {
            $res['CheapRate'] = $this->cheapRate;
        }
        if (null !== $this->cheapStandAmount) {
            $res['CheapStandAmount'] = $this->cheapStandAmount;
        }
        if (null !== $this->contractActivity) {
            $res['ContractActivity'] = null !== $this->contractActivity ? $this->contractActivity->toMap() : null;
        }
        if (null !== $this->differential) {
            $res['Differential'] = $this->differential;
        }
        if (null !== $this->differentialName) {
            $res['DifferentialName'] = $this->differentialName;
        }
        if (null !== $this->isContractActivity) {
            $res['IsContractActivity'] = $this->isContractActivity;
        }
        if (null !== $this->listPrice) {
            $res['ListPrice'] = $this->listPrice;
        }
        if (null !== $this->monthPrice) {
            $res['MonthPrice'] = $this->monthPrice;
        }
        if (null !== $this->originalStandAmount) {
            $res['OriginalStandAmount'] = $this->originalStandAmount;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return depreciateInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheapRate'])) {
            $model->cheapRate = $map['CheapRate'];
        }
        if (isset($map['CheapStandAmount'])) {
            $model->cheapStandAmount = $map['CheapStandAmount'];
        }
        if (isset($map['ContractActivity'])) {
            $model->contractActivity = contractActivity::fromMap($map['ContractActivity']);
        }
        if (isset($map['Differential'])) {
            $model->differential = $map['Differential'];
        }
        if (isset($map['DifferentialName'])) {
            $model->differentialName = $map['DifferentialName'];
        }
        if (isset($map['IsContractActivity'])) {
            $model->isContractActivity = $map['IsContractActivity'];
        }
        if (isset($map['ListPrice'])) {
            $model->listPrice = $map['ListPrice'];
        }
        if (isset($map['MonthPrice'])) {
            $model->monthPrice = $map['MonthPrice'];
        }
        if (isset($map['OriginalStandAmount'])) {
            $model->originalStandAmount = $map['OriginalStandAmount'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
