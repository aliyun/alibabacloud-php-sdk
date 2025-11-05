<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Agency\V20221216\Models;

use AlibabaCloud\Dara\Model;

class GetCommissionableProductsRequest extends Model
{
    /**
     * @var string
     */
    public $commodityCodeList;

    /**
     * @var string
     */
    public $fiscalYear;

    /**
     * @var string[]
     */
    public $listShowStatusList;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $pipCodeList;

    /**
     * @var string
     */
    public $realEndMonth;

    /**
     * @var string
     */
    public $realStartMonth;
    protected $_name = [
        'commodityCodeList' => 'CommodityCodeList',
        'fiscalYear' => 'FiscalYear',
        'listShowStatusList' => 'ListShowStatusList',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'pipCodeList' => 'PipCodeList',
        'realEndMonth' => 'RealEndMonth',
        'realStartMonth' => 'RealStartMonth',
    ];

    public function validate()
    {
        if (\is_array($this->listShowStatusList)) {
            Model::validateArray($this->listShowStatusList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commodityCodeList) {
            $res['CommodityCodeList'] = $this->commodityCodeList;
        }

        if (null !== $this->fiscalYear) {
            $res['FiscalYear'] = $this->fiscalYear;
        }

        if (null !== $this->listShowStatusList) {
            if (\is_array($this->listShowStatusList)) {
                $res['ListShowStatusList'] = [];
                $n1 = 0;
                foreach ($this->listShowStatusList as $item1) {
                    $res['ListShowStatusList'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->pipCodeList) {
            $res['PipCodeList'] = $this->pipCodeList;
        }

        if (null !== $this->realEndMonth) {
            $res['RealEndMonth'] = $this->realEndMonth;
        }

        if (null !== $this->realStartMonth) {
            $res['RealStartMonth'] = $this->realStartMonth;
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
        if (isset($map['CommodityCodeList'])) {
            $model->commodityCodeList = $map['CommodityCodeList'];
        }

        if (isset($map['FiscalYear'])) {
            $model->fiscalYear = $map['FiscalYear'];
        }

        if (isset($map['ListShowStatusList'])) {
            if (!empty($map['ListShowStatusList'])) {
                $model->listShowStatusList = [];
                $n1 = 0;
                foreach ($map['ListShowStatusList'] as $item1) {
                    $model->listShowStatusList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['PipCodeList'])) {
            $model->pipCodeList = $map['PipCodeList'];
        }

        if (isset($map['RealEndMonth'])) {
            $model->realEndMonth = $map['RealEndMonth'];
        }

        if (isset($map['RealStartMonth'])) {
            $model->realStartMonth = $map['RealStartMonth'];
        }

        return $model;
    }
}
