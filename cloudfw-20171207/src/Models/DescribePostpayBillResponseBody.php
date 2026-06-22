<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudfw\V20171207\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cloudfw\V20171207\Models\DescribePostpayBillResponseBody\billList;

class DescribePostpayBillResponseBody extends Model
{
    /**
     * @var float
     */
    public $aggregateInternetTraffic;

    /**
     * @var float
     */
    public $aggregateNatTraffic;

    /**
     * @var float
     */
    public $aggregateSdlTraffic;

    /**
     * @var float
     */
    public $aggregateTotalTraffic;

    /**
     * @var float
     */
    public $aggregateVpcTraffic;

    /**
     * @var billList[]
     */
    public $billList;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var int
     */
    public $totalCount;
    protected $_name = [
        'aggregateInternetTraffic' => 'AggregateInternetTraffic',
        'aggregateNatTraffic' => 'AggregateNatTraffic',
        'aggregateSdlTraffic' => 'AggregateSdlTraffic',
        'aggregateTotalTraffic' => 'AggregateTotalTraffic',
        'aggregateVpcTraffic' => 'AggregateVpcTraffic',
        'billList' => 'BillList',
        'requestId' => 'RequestId',
        'totalCount' => 'TotalCount',
    ];

    public function validate()
    {
        if (\is_array($this->billList)) {
            Model::validateArray($this->billList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->aggregateInternetTraffic) {
            $res['AggregateInternetTraffic'] = $this->aggregateInternetTraffic;
        }

        if (null !== $this->aggregateNatTraffic) {
            $res['AggregateNatTraffic'] = $this->aggregateNatTraffic;
        }

        if (null !== $this->aggregateSdlTraffic) {
            $res['AggregateSdlTraffic'] = $this->aggregateSdlTraffic;
        }

        if (null !== $this->aggregateTotalTraffic) {
            $res['AggregateTotalTraffic'] = $this->aggregateTotalTraffic;
        }

        if (null !== $this->aggregateVpcTraffic) {
            $res['AggregateVpcTraffic'] = $this->aggregateVpcTraffic;
        }

        if (null !== $this->billList) {
            if (\is_array($this->billList)) {
                $res['BillList'] = [];
                $n1 = 0;
                foreach ($this->billList as $item1) {
                    $res['BillList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->totalCount) {
            $res['TotalCount'] = $this->totalCount;
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
        if (isset($map['AggregateInternetTraffic'])) {
            $model->aggregateInternetTraffic = $map['AggregateInternetTraffic'];
        }

        if (isset($map['AggregateNatTraffic'])) {
            $model->aggregateNatTraffic = $map['AggregateNatTraffic'];
        }

        if (isset($map['AggregateSdlTraffic'])) {
            $model->aggregateSdlTraffic = $map['AggregateSdlTraffic'];
        }

        if (isset($map['AggregateTotalTraffic'])) {
            $model->aggregateTotalTraffic = $map['AggregateTotalTraffic'];
        }

        if (isset($map['AggregateVpcTraffic'])) {
            $model->aggregateVpcTraffic = $map['AggregateVpcTraffic'];
        }

        if (isset($map['BillList'])) {
            if (!empty($map['BillList'])) {
                $model->billList = [];
                $n1 = 0;
                foreach ($map['BillList'] as $item1) {
                    $model->billList[$n1] = billList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TotalCount'])) {
            $model->totalCount = $map['TotalCount'];
        }

        return $model;
    }
}
