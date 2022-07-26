<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\XgipPop\V20220520\Models\GetQosUsageStatisticResponseBody\data;

use AlibabaCloud\Tea\Model;

class getQosUsageStatisticResList extends Model
{
    /**
     * @var int
     */
    public $billCount;

    /**
     * @var int
     */
    public $dsDay;

    /**
     * @var int
     */
    public $failCount;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var int
     */
    public $month;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var string
     */
    public $productName;

    /**
     * @var string
     */
    public $provice;

    /**
     * @var string
     */
    public $specType;

    /**
     * @var int
     */
    public $sucessCount;

    /**
     * @var int
     */
    public $totalCount;

    /**
     * @var string
     */
    public $yunOutProduct;
    protected $_name = [
        'billCount'     => 'BillCount',
        'dsDay'         => 'DsDay',
        'failCount'     => 'FailCount',
        'instanceId'    => 'InstanceId',
        'month'         => 'Month',
        'operator'      => 'Operator',
        'productName'   => 'ProductName',
        'provice'       => 'Provice',
        'specType'      => 'SpecType',
        'sucessCount'   => 'SucessCount',
        'totalCount'    => 'TotalCount',
        'yunOutProduct' => 'YunOutProduct',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->billCount) {
            $res['BillCount'] = $this->billCount;
        }
        if (null !== $this->dsDay) {
            $res['DsDay'] = $this->dsDay;
        }
        if (null !== $this->failCount) {
            $res['FailCount'] = $this->failCount;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->month) {
            $res['Month'] = $this->month;
        }
        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }
        if (null !== $this->productName) {
            $res['ProductName'] = $this->productName;
        }
        if (null !== $this->provice) {
            $res['Provice'] = $this->provice;
        }
        if (null !== $this->specType) {
            $res['SpecType'] = $this->specType;
        }
        if (null !== $this->sucessCount) {
            $res['SucessCount'] = $this->sucessCount;
        }
        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
        }
        if (null !== $this->yunOutProduct) {
            $res['YunOutProduct'] = $this->yunOutProduct;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return getQosUsageStatisticResList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BillCount'])) {
            $model->billCount = $map['BillCount'];
        }
        if (isset($map['DsDay'])) {
            $model->dsDay = $map['DsDay'];
        }
        if (isset($map['FailCount'])) {
            $model->failCount = $map['FailCount'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Month'])) {
            $model->month = $map['Month'];
        }
        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }
        if (isset($map['ProductName'])) {
            $model->productName = $map['ProductName'];
        }
        if (isset($map['Provice'])) {
            $model->provice = $map['Provice'];
        }
        if (isset($map['SpecType'])) {
            $model->specType = $map['SpecType'];
        }
        if (isset($map['SucessCount'])) {
            $model->sucessCount = $map['SucessCount'];
        }
        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }
        if (isset($map['YunOutProduct'])) {
            $model->yunOutProduct = $map['YunOutProduct'];
        }

        return $model;
    }
}
