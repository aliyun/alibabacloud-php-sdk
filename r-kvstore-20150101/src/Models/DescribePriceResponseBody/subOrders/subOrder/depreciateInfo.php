<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\subOrders\subOrder;

use AlibabaCloud\SDK\Rkvstore\V20150101\Models\DescribePriceResponseBody\subOrders\subOrder\depreciateInfo\contractActivity;
use AlibabaCloud\Tea\Model;

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
    protected $_name = [
        'cheapRate'           => 'CheapRate',
        'cheapStandAmount'    => 'CheapStandAmount',
        'contractActivity'    => 'ContractActivity',
        'differential'        => 'Differential',
        'differentialName'    => 'DifferentialName',
        'isContractActivity'  => 'IsContractActivity',
        'listPrice'           => 'ListPrice',
        'monthPrice'          => 'MonthPrice',
        'originalStandAmount' => 'OriginalStandAmount',
    ];

    public function validate()
    {
    }

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

        return $model;
    }
}
