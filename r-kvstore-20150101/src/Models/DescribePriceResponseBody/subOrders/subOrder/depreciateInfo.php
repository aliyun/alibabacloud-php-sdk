<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\subOrders\subOrder;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\subOrders\subOrder\depreciateInfo\contractActivity;

class depreciateInfo extends Model
{
    /**
     * @var int
     */
    public $cheapRate;

    /**
     * @var int
     */
    public $cheapStandAmount;

    /**
     * @var contractActivity
     */
    public $contractActivity;

    /**
     * @var int
     */
    public $differential;

    /**
     * @var string
     */
    public $differentialName;

    /**
     * @var bool
     */
    public $isContractActivity;

    /**
     * @var int
     */
    public $listPrice;

    /**
     * @var int
     */
    public $monthPrice;

    /**
     * @var int
     */
    public $originalStandAmount;

    /**
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

    public function validate()
    {
        if (null !== $this->contractActivity) {
            $this->contractActivity->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cheapRate) {
            $res['CheapRate'] = $this->cheapRate;
        }

        if (null !== $this->cheapStandAmount) {
            $res['CheapStandAmount'] = $this->cheapStandAmount;
        }

        if (null !== $this->contractActivity) {
            $res['ContractActivity'] = null !== $this->contractActivity ? $this->contractActivity->toArray($noStream) : $this->contractActivity;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
