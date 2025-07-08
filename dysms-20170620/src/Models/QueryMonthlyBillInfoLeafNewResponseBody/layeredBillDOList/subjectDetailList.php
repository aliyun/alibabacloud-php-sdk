<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\QueryMonthlyBillInfoLeafNewResponseBody\layeredBillDOList;

use AlibabaCloud\Dara\Model;

class subjectDetailList extends Model
{
    /**
     * @var int
     */
    public $addCount;

    /**
     * @var string
     */
    public $addUnit;

    /**
     * @var string
     */
    public $billAmount;

    /**
     * @var string
     */
    public $itemId;

    /**
     * @var string
     */
    public $itemName;

    /**
     * @var string
     */
    public $operator;

    /**
     * @var string
     */
    public $packageBill;

    /**
     * @var string
     */
    public $singlePrice;

    /**
     * @var string
     */
    public $subjectItemId;

    /**
     * @var string
     */
    public $subjectName;
    protected $_name = [
        'addCount' => 'AddCount',
        'addUnit' => 'AddUnit',
        'billAmount' => 'BillAmount',
        'itemId' => 'ItemId',
        'itemName' => 'ItemName',
        'operator' => 'Operator',
        'packageBill' => 'PackageBill',
        'singlePrice' => 'SinglePrice',
        'subjectItemId' => 'SubjectItemId',
        'subjectName' => 'SubjectName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->addCount) {
            $res['AddCount'] = $this->addCount;
        }

        if (null !== $this->addUnit) {
            $res['AddUnit'] = $this->addUnit;
        }

        if (null !== $this->billAmount) {
            $res['BillAmount'] = $this->billAmount;
        }

        if (null !== $this->itemId) {
            $res['ItemId'] = $this->itemId;
        }

        if (null !== $this->itemName) {
            $res['ItemName'] = $this->itemName;
        }

        if (null !== $this->operator) {
            $res['Operator'] = $this->operator;
        }

        if (null !== $this->packageBill) {
            $res['PackageBill'] = $this->packageBill;
        }

        if (null !== $this->singlePrice) {
            $res['SinglePrice'] = $this->singlePrice;
        }

        if (null !== $this->subjectItemId) {
            $res['SubjectItemId'] = $this->subjectItemId;
        }

        if (null !== $this->subjectName) {
            $res['SubjectName'] = $this->subjectName;
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
        if (isset($map['AddCount'])) {
            $model->addCount = $map['AddCount'];
        }

        if (isset($map['AddUnit'])) {
            $model->addUnit = $map['AddUnit'];
        }

        if (isset($map['BillAmount'])) {
            $model->billAmount = $map['BillAmount'];
        }

        if (isset($map['ItemId'])) {
            $model->itemId = $map['ItemId'];
        }

        if (isset($map['ItemName'])) {
            $model->itemName = $map['ItemName'];
        }

        if (isset($map['Operator'])) {
            $model->operator = $map['Operator'];
        }

        if (isset($map['PackageBill'])) {
            $model->packageBill = $map['PackageBill'];
        }

        if (isset($map['SinglePrice'])) {
            $model->singlePrice = $map['SinglePrice'];
        }

        if (isset($map['SubjectItemId'])) {
            $model->subjectItemId = $map['SubjectItemId'];
        }

        if (isset($map['SubjectName'])) {
            $model->subjectName = $map['SubjectName'];
        }

        return $model;
    }
}
