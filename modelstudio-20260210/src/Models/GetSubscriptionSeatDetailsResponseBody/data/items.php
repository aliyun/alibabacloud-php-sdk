<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ModelStudio\V20260210\Models\GetSubscriptionSeatDetailsResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ModelStudio\V20260210\Models\GetSubscriptionSeatDetailsResponseBody\data\items\equityList;

class items extends Model
{
    /**
     * @var string
     */
    public $accountEmail;

    /**
     * @var string
     */
    public $accountId;

    /**
     * @var string
     */
    public $accountName;

    /**
     * @var string
     */
    public $assignedStatus;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var equityList[]
     */
    public $equityList;

    /**
     * @var string
     */
    public $instanceCode;

    /**
     * @var string
     */
    public $seatId;

    /**
     * @var string
     */
    public $specType;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'accountEmail' => 'AccountEmail',
        'accountId' => 'AccountId',
        'accountName' => 'AccountName',
        'assignedStatus' => 'AssignedStatus',
        'endTime' => 'EndTime',
        'equityList' => 'EquityList',
        'instanceCode' => 'InstanceCode',
        'seatId' => 'SeatId',
        'specType' => 'SpecType',
        'startTime' => 'StartTime',
        'status' => 'Status',
    ];

    public function validate()
    {
        if (\is_array($this->equityList)) {
            Model::validateArray($this->equityList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accountEmail) {
            $res['AccountEmail'] = $this->accountEmail;
        }

        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }

        if (null !== $this->accountName) {
            $res['AccountName'] = $this->accountName;
        }

        if (null !== $this->assignedStatus) {
            $res['AssignedStatus'] = $this->assignedStatus;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->equityList) {
            if (\is_array($this->equityList)) {
                $res['EquityList'] = [];
                $n1 = 0;
                foreach ($this->equityList as $item1) {
                    $res['EquityList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->instanceCode) {
            $res['InstanceCode'] = $this->instanceCode;
        }

        if (null !== $this->seatId) {
            $res['SeatId'] = $this->seatId;
        }

        if (null !== $this->specType) {
            $res['SpecType'] = $this->specType;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AccountEmail'])) {
            $model->accountEmail = $map['AccountEmail'];
        }

        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }

        if (isset($map['AccountName'])) {
            $model->accountName = $map['AccountName'];
        }

        if (isset($map['AssignedStatus'])) {
            $model->assignedStatus = $map['AssignedStatus'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['EquityList'])) {
            if (!empty($map['EquityList'])) {
                $model->equityList = [];
                $n1 = 0;
                foreach ($map['EquityList'] as $item1) {
                    $model->equityList[$n1] = equityList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['InstanceCode'])) {
            $model->instanceCode = $map['InstanceCode'];
        }

        if (isset($map['SeatId'])) {
            $model->seatId = $map['SeatId'];
        }

        if (isset($map['SpecType'])) {
            $model->specType = $map['SpecType'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
