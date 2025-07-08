<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysms\V20170620\Models\QueryDailyBillInfoLeafNewResponseBody\list_;

use AlibabaCloud\Dara\Model;

class dailyBillDetailInfoDTO extends Model
{
    /**
     * @var int
     */
    public $addCount;

    /**
     * @var string
     */
    public $addDate;

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
    public $detailItemName;

    /**
     * @var string
     */
    public $singlePrice;
    protected $_name = [
        'addCount' => 'AddCount',
        'addDate' => 'AddDate',
        'addUnit' => 'AddUnit',
        'billAmount' => 'BillAmount',
        'detailItemName' => 'DetailItemName',
        'singlePrice' => 'SinglePrice',
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

        if (null !== $this->addDate) {
            $res['AddDate'] = $this->addDate;
        }

        if (null !== $this->addUnit) {
            $res['AddUnit'] = $this->addUnit;
        }

        if (null !== $this->billAmount) {
            $res['BillAmount'] = $this->billAmount;
        }

        if (null !== $this->detailItemName) {
            $res['DetailItemName'] = $this->detailItemName;
        }

        if (null !== $this->singlePrice) {
            $res['SinglePrice'] = $this->singlePrice;
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

        if (isset($map['AddDate'])) {
            $model->addDate = $map['AddDate'];
        }

        if (isset($map['AddUnit'])) {
            $model->addUnit = $map['AddUnit'];
        }

        if (isset($map['BillAmount'])) {
            $model->billAmount = $map['BillAmount'];
        }

        if (isset($map['DetailItemName'])) {
            $model->detailItemName = $map['DetailItemName'];
        }

        if (isset($map['SinglePrice'])) {
            $model->singlePrice = $map['SinglePrice'];
        }

        return $model;
    }
}
