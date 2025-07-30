<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\order;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\order\depreciateInfo\contractActivity;
use AlibabaCloud\Tea\Model;

class depreciateInfo extends Model
{
    /**
     * @description The price reduction rate.
     *
     * @example 30%
     *
     * @var int
     */
    public $cheapRate;

    /**
     * @description The new total price displayed on the official website.
     *
     * @example 9*
     *
     * @var int
     */
    public $cheapStandAmount;

    /**
     * @description The activity information.
     *
     * @var contractActivity
     */
    public $contractActivity;

    /**
     * @description The promotional offer (displayed in the total order amount).
     *
     * @example **
     *
     * @var int
     */
    public $differential;

    /**
     * @description The name of the promotional offer.
     *
     * @example XXXXX
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
     * @description Indicates whether the price reduction rate is displayed.
     *
     * @example true
     *
     * @var bool
     */
    public $isShow;

    /**
     * @description The list price.
     *
     * @example 1*
     *
     * @var int
     */
    public $listPrice;

    /**
     * @description The monthly price.
     *
     * @example **
     *
     * @var int
     */
    public $monthPrice;

    /**
     * @description The original total price displayed on the official website.
     *
     * @example 12*
     *
     * @var int
     */
    public $originalStandAmount;
    protected $_name = [
        'cheapRate' => 'CheapRate',
        'cheapStandAmount' => 'CheapStandAmount',
        'contractActivity' => 'ContractActivity',
        'differential' => 'Differential',
        'differentialName' => 'DifferentialName',
        'isContractActivity' => 'IsContractActivity',
        'isShow' => 'IsShow',
        'listPrice' => 'ListPrice',
        'monthPrice' => 'MonthPrice',
        'originalStandAmount' => 'OriginalStandAmount',
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
        if (null !== $this->isShow) {
            $res['IsShow'] = $this->isShow;
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
        if (isset($map['IsShow'])) {
            $model->isShow = $map['IsShow'];
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

        return $model;
    }
}
