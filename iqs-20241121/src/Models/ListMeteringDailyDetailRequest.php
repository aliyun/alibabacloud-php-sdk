<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IQS\V20241121\Models;

use AlibabaCloud\Dara\Model;

class ListMeteringDailyDetailRequest extends Model
{
    /**
     * @var string
     */
    public $billPeriod;

    /**
     * @var string
     */
    public $billingItem;

    /**
     * @var string
     */
    public $endTime;

    /**
     * @var int
     */
    public $pageNumber;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $startTime;

    /**
     * @var string
     */
    public $subAccountId;
    protected $_name = [
        'billPeriod' => 'billPeriod',
        'billingItem' => 'billingItem',
        'endTime' => 'endTime',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'startTime' => 'startTime',
        'subAccountId' => 'subAccountId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->billPeriod) {
            $res['billPeriod'] = $this->billPeriod;
        }

        if (null !== $this->billingItem) {
            $res['billingItem'] = $this->billingItem;
        }

        if (null !== $this->endTime) {
            $res['endTime'] = $this->endTime;
        }

        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }

        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->subAccountId) {
            $res['subAccountId'] = $this->subAccountId;
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
        if (isset($map['billPeriod'])) {
            $model->billPeriod = $map['billPeriod'];
        }

        if (isset($map['billingItem'])) {
            $model->billingItem = $map['billingItem'];
        }

        if (isset($map['endTime'])) {
            $model->endTime = $map['endTime'];
        }

        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }

        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['subAccountId'])) {
            $model->subAccountId = $map['subAccountId'];
        }

        return $model;
    }
}
