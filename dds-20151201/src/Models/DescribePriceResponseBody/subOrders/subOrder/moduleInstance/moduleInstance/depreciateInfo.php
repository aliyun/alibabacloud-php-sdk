<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dds\V20151201\Models\DescribePriceResponseBody\subOrders\subOrder\moduleInstance\moduleInstance;

use AlibabaCloud\Tea\Model;

class depreciateInfo extends Model
{
    /**
     * @var float
     */
    public $cheapRate;

    /**
     * @var float
     */
    public $cheapStandAmount;

    /**
     * @var float
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
     * @var string
     */
    public $isShow;

    /**
     * @var float
     */
    public $listPrice;

    /**
     * @var float
     */
    public $monthPrice;

    /**
     * @var float
     */
    public $originalStandAmount;
    protected $_name = [
        'cheapRate'           => 'CheapRate',
        'cheapStandAmount'    => 'CheapStandAmount',
        'differential'        => 'Differential',
        'differentialName'    => 'DifferentialName',
        'isContractActivity'  => 'IsContractActivity',
        'isShow'              => 'IsShow',
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
