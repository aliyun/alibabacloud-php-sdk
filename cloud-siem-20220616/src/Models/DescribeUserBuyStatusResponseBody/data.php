<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeUserBuyStatusResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var bool
     */
    public $canBuy;

    /**
     * @var int
     */
    public $capacity;

    /**
     * @var int
     */
    public $durationDays;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $mainUserId;

    /**
     * @var string
     */
    public $mainUserName;

    /**
     * @var int
     */
    public $masterUserId;

    /**
     * @var string
     */
    public $masterUserName;

    /**
     * @var int
     */
    public $rdOrder;

    /**
     * @var string
     */
    public $sasInstanceId;

    /**
     * @var int
     */
    public $subUserId;

    /**
     * @var string
     */
    public $subUserName;
    protected $_name = [
        'canBuy' => 'CanBuy',
        'capacity' => 'Capacity',
        'durationDays' => 'DurationDays',
        'endTime' => 'EndTime',
        'mainUserId' => 'MainUserId',
        'mainUserName' => 'MainUserName',
        'masterUserId' => 'MasterUserId',
        'masterUserName' => 'MasterUserName',
        'rdOrder' => 'RdOrder',
        'sasInstanceId' => 'SasInstanceId',
        'subUserId' => 'SubUserId',
        'subUserName' => 'SubUserName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->canBuy) {
            $res['CanBuy'] = $this->canBuy;
        }

        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }

        if (null !== $this->durationDays) {
            $res['DurationDays'] = $this->durationDays;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->mainUserId) {
            $res['MainUserId'] = $this->mainUserId;
        }

        if (null !== $this->mainUserName) {
            $res['MainUserName'] = $this->mainUserName;
        }

        if (null !== $this->masterUserId) {
            $res['MasterUserId'] = $this->masterUserId;
        }

        if (null !== $this->masterUserName) {
            $res['MasterUserName'] = $this->masterUserName;
        }

        if (null !== $this->rdOrder) {
            $res['RdOrder'] = $this->rdOrder;
        }

        if (null !== $this->sasInstanceId) {
            $res['SasInstanceId'] = $this->sasInstanceId;
        }

        if (null !== $this->subUserId) {
            $res['SubUserId'] = $this->subUserId;
        }

        if (null !== $this->subUserName) {
            $res['SubUserName'] = $this->subUserName;
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
        if (isset($map['CanBuy'])) {
            $model->canBuy = $map['CanBuy'];
        }

        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }

        if (isset($map['DurationDays'])) {
            $model->durationDays = $map['DurationDays'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['MainUserId'])) {
            $model->mainUserId = $map['MainUserId'];
        }

        if (isset($map['MainUserName'])) {
            $model->mainUserName = $map['MainUserName'];
        }

        if (isset($map['MasterUserId'])) {
            $model->masterUserId = $map['MasterUserId'];
        }

        if (isset($map['MasterUserName'])) {
            $model->masterUserName = $map['MasterUserName'];
        }

        if (isset($map['RdOrder'])) {
            $model->rdOrder = $map['RdOrder'];
        }

        if (isset($map['SasInstanceId'])) {
            $model->sasInstanceId = $map['SasInstanceId'];
        }

        if (isset($map['SubUserId'])) {
            $model->subUserId = $map['SubUserId'];
        }

        if (isset($map['SubUserName'])) {
            $model->subUserName = $map['SubUserName'];
        }

        return $model;
    }
}
