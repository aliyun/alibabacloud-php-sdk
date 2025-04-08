<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20230930\Models;

use AlibabaCloud\Dara\Model;

class GeneralBill extends Model
{
    /**
     * @var string
     */
    public $billId;

    /**
     * @var string
     */
    public $billPeriod;

    /**
     * @var string[]
     */
    public $downloadUrl;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var string
     */
    public $gmtCreate;

    /**
     * @var string
     */
    public $gmtModified;

    /**
     * @var string
     */
    public $shopId;

    /**
     * @var string
     */
    public $shopName;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var Money
     */
    public $totalAmount;
    protected $_name = [
        'billId' => 'billId',
        'billPeriod' => 'billPeriod',
        'downloadUrl' => 'downloadUrl',
        'endTime' => 'endTime',
        'gmtCreate' => 'gmtCreate',
        'gmtModified' => 'gmtModified',
        'shopId' => 'shopId',
        'shopName' => 'shopName',
        'startTime' => 'startTime',
        'totalAmount' => 'totalAmount',
    ];

    public function validate()
    {
        if (\is_array($this->downloadUrl)) {
            Model::validateArray($this->downloadUrl);
        }
        if (null !== $this->totalAmount) {
            $this->totalAmount->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billId) {
            $res['billId'] = $this->billId;
        }

        if (null !== $this->billPeriod) {
            $res['billPeriod'] = $this->billPeriod;
        }

        if (null !== $this->downloadUrl) {
            if (\is_array($this->downloadUrl)) {
                $res['downloadUrl'] = [];
                $n1 = 0;
                foreach ($this->downloadUrl as $item1) {
                    $res['downloadUrl'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->gmtCreate) {
            $res['gmtCreate'] = $this->gmtCreate;
        }

        if (null !== $this->gmtModified) {
            $res['gmtModified'] = $this->gmtModified;
        }

        if (null !== $this->shopId) {
            $res['shopId'] = $this->shopId;
        }

        if (null !== $this->shopName) {
            $res['shopName'] = $this->shopName;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->totalAmount) {
            $res['totalAmount'] = null !== $this->totalAmount ? $this->totalAmount->toArray($noStream) : $this->totalAmount;
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
        if (isset($map['billId'])) {
            $model->billId = $map['billId'];
        }

        if (isset($map['billPeriod'])) {
            $model->billPeriod = $map['billPeriod'];
        }

        if (isset($map['downloadUrl'])) {
            if (!empty($map['downloadUrl'])) {
                $model->downloadUrl = [];
                $n1 = 0;
                foreach ($map['downloadUrl'] as $item1) {
                    $model->downloadUrl[$n1++] = $item1;
                }
            }
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['gmtCreate'])) {
            $model->gmtCreate = $map['gmtCreate'];
        }

        if (isset($map['gmtModified'])) {
            $model->gmtModified = $map['gmtModified'];
        }

        if (isset($map['shopId'])) {
            $model->shopId = $map['shopId'];
        }

        if (isset($map['shopName'])) {
            $model->shopName = $map['shopName'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['totalAmount'])) {
            $model->totalAmount = Money::fromMap($map['totalAmount']);
        }

        return $model;
    }
}
