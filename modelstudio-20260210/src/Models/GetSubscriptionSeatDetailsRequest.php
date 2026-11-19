<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models;

use AlibabaCloud\Dara\Model;

class GetSubscriptionSeatDetailsRequest extends Model
{
    /**
     * @var string
     */
    public $instanceCode;

    /**
     * @var int
     */
    public $pageNo;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var bool
     */
    public $queryAssigned;

    /**
     * @var string
     */
    public $seatId;

    /**
     * @var string
     */
    public $seatType;

    /**
     * @var string[]
     */
    public $statusList;
    protected $_name = [
        'instanceCode' => 'InstanceCode',
        'pageNo' => 'PageNo',
        'pageSize' => 'PageSize',
        'queryAssigned' => 'QueryAssigned',
        'seatId' => 'SeatId',
        'seatType' => 'SeatType',
        'statusList' => 'StatusList',
    ];

    public function validate()
    {
        if (\is_array($this->statusList)) {
            Model::validateArray($this->statusList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->instanceCode) {
            $res['InstanceCode'] = $this->instanceCode;
        }

        if (null !== $this->pageNo) {
            $res['PageNo'] = $this->pageNo;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->queryAssigned) {
            $res['QueryAssigned'] = $this->queryAssigned;
        }

        if (null !== $this->seatId) {
            $res['SeatId'] = $this->seatId;
        }

        if (null !== $this->seatType) {
            $res['SeatType'] = $this->seatType;
        }

        if (null !== $this->statusList) {
            if (\is_array($this->statusList)) {
                $res['StatusList'] = [];
                $n1 = 0;
                foreach ($this->statusList as $item1) {
                    $res['StatusList'][$n1] = $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['InstanceCode'])) {
            $model->instanceCode = $map['InstanceCode'];
        }

        if (isset($map['PageNo'])) {
            $model->pageNo = $map['PageNo'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['QueryAssigned'])) {
            $model->queryAssigned = $map['QueryAssigned'];
        }

        if (isset($map['SeatId'])) {
            $model->seatId = $map['SeatId'];
        }

        if (isset($map['SeatType'])) {
            $model->seatType = $map['SeatType'];
        }

        if (isset($map['StatusList'])) {
            if (!empty($map['StatusList'])) {
                $model->statusList = [];
                $n1 = 0;
                foreach ($map['StatusList'] as $item1) {
                    $model->statusList[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
