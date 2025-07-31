<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribePriceResponseBody\subOrders\subOrder\moduleInstance\moduleInstance;

use AlibabaCloud\Tea\Model;

class depreciateInfo extends Model
{
    /**
     * @description The price reduction rate.
     *
     * @example 30%
     *
     * @var float
     */
    public $cheapRate;

    /**
     * @description The new total price displayed on the official website.
     *
     * @example 9*
     *
     * @var float
     */
    public $cheapStandAmount;

    /**
     * @description The price difference displayed in the total order amount.
     *
     * @example **
     *
     * @var float
     */
    public $differential;

    /**
     * @description The name of the price difference.
     *
     * @example XXXXX
     *
     * @var string
     */
    public $differentialName;

    /**
     * @description Indicates whether the contract promotion is hit.
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
     * @var string
     */
    public $isShow;

    /**
     * @description The list price.
     *
     * @example 1*
     *
     * @var float
     */
    public $listPrice;

    /**
     * @description The monthly price.
     *
     * @example **
     *
     * @var float
     */
    public $monthPrice;

    /**
     * @description The original total price displayed on the official website.
     *
     * @example 12*
     *
     * @var float
     */
    public $originalStandAmount;
    protected $_name = [
        'cheapRate' => 'CheapRate',
        'cheapStandAmount' => 'CheapStandAmount',
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
