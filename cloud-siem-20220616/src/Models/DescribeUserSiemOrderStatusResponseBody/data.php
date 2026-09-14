<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cloudsiem\V20220616\Models\DescribeUserSiemOrderStatusResponseBody;

use AlibabaCloud\Dara\Model;

class data extends Model
{
    /**
     * @var string
     */
    public $asocInstanceId;

    /**
     * @var int
     */
    public $asocSubscriptionInstanceEndTime;

    /**
     * @var int
     */
    public $asocSubscriptionInstanceStartTime;

    /**
     * @var bool
     */
    public $canBuy;

    /**
     * @var int
     */
    public $capacity;

    /**
     * @var string
     */
    public $capacityOrderFrom;

    /**
     * @var int
     */
    public $deliveryCapacity;

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
    public $flowCapacity;

    /**
     * @var int
     */
    public $mainUserId;

    /**
     * @var int
     */
    public $masterUserId;

    /**
     * @var string
     */
    public $rdId;

    /**
     * @var int
     */
    public $rdOrder;

    /**
     * @var string
     */
    public $sasInstanceId;

    /**
     * @var string
     */
    public $siemOrderFrom;

    /**
     * @var int
     */
    public $siemOrderStatus;

    /**
     * @var int
     */
    public $subUserId;

    /**
     * @var string
     */
    public $userType;
    protected $_name = [
        'asocInstanceId' => 'AsocInstanceId',
        'asocSubscriptionInstanceEndTime' => 'AsocSubscriptionInstanceEndTime',
        'asocSubscriptionInstanceStartTime' => 'AsocSubscriptionInstanceStartTime',
        'canBuy' => 'CanBuy',
        'capacity' => 'Capacity',
        'capacityOrderFrom' => 'CapacityOrderFrom',
        'deliveryCapacity' => 'DeliveryCapacity',
        'durationDays' => 'DurationDays',
        'endTime' => 'EndTime',
        'flowCapacity' => 'FlowCapacity',
        'mainUserId' => 'MainUserId',
        'masterUserId' => 'MasterUserId',
        'rdId' => 'RdId',
        'rdOrder' => 'RdOrder',
        'sasInstanceId' => 'SasInstanceId',
        'siemOrderFrom' => 'SiemOrderFrom',
        'siemOrderStatus' => 'SiemOrderStatus',
        'subUserId' => 'SubUserId',
        'userType' => 'UserType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asocInstanceId) {
            $res['AsocInstanceId'] = $this->asocInstanceId;
        }

        if (null !== $this->asocSubscriptionInstanceEndTime) {
            $res['AsocSubscriptionInstanceEndTime'] = $this->asocSubscriptionInstanceEndTime;
        }

        if (null !== $this->asocSubscriptionInstanceStartTime) {
            $res['AsocSubscriptionInstanceStartTime'] = $this->asocSubscriptionInstanceStartTime;
        }

        if (null !== $this->canBuy) {
            $res['CanBuy'] = $this->canBuy;
        }

        if (null !== $this->capacity) {
            $res['Capacity'] = $this->capacity;
        }

        if (null !== $this->capacityOrderFrom) {
            $res['CapacityOrderFrom'] = $this->capacityOrderFrom;
        }

        if (null !== $this->deliveryCapacity) {
            $res['DeliveryCapacity'] = $this->deliveryCapacity;
        }

        if (null !== $this->durationDays) {
            $res['DurationDays'] = $this->durationDays;
        }

        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }

        if (null !== $this->flowCapacity) {
            $res['FlowCapacity'] = $this->flowCapacity;
        }

        if (null !== $this->mainUserId) {
            $res['MainUserId'] = $this->mainUserId;
        }

        if (null !== $this->masterUserId) {
            $res['MasterUserId'] = $this->masterUserId;
        }

        if (null !== $this->rdId) {
            $res['RdId'] = $this->rdId;
        }

        if (null !== $this->rdOrder) {
            $res['RdOrder'] = $this->rdOrder;
        }

        if (null !== $this->sasInstanceId) {
            $res['SasInstanceId'] = $this->sasInstanceId;
        }

        if (null !== $this->siemOrderFrom) {
            $res['SiemOrderFrom'] = $this->siemOrderFrom;
        }

        if (null !== $this->siemOrderStatus) {
            $res['SiemOrderStatus'] = $this->siemOrderStatus;
        }

        if (null !== $this->subUserId) {
            $res['SubUserId'] = $this->subUserId;
        }

        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
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
        if (isset($map['AsocInstanceId'])) {
            $model->asocInstanceId = $map['AsocInstanceId'];
        }

        if (isset($map['AsocSubscriptionInstanceEndTime'])) {
            $model->asocSubscriptionInstanceEndTime = $map['AsocSubscriptionInstanceEndTime'];
        }

        if (isset($map['AsocSubscriptionInstanceStartTime'])) {
            $model->asocSubscriptionInstanceStartTime = $map['AsocSubscriptionInstanceStartTime'];
        }

        if (isset($map['CanBuy'])) {
            $model->canBuy = $map['CanBuy'];
        }

        if (isset($map['Capacity'])) {
            $model->capacity = $map['Capacity'];
        }

        if (isset($map['CapacityOrderFrom'])) {
            $model->capacityOrderFrom = $map['CapacityOrderFrom'];
        }

        if (isset($map['DeliveryCapacity'])) {
            $model->deliveryCapacity = $map['DeliveryCapacity'];
        }

        if (isset($map['DurationDays'])) {
            $model->durationDays = $map['DurationDays'];
        }

        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }

        if (isset($map['FlowCapacity'])) {
            $model->flowCapacity = $map['FlowCapacity'];
        }

        if (isset($map['MainUserId'])) {
            $model->mainUserId = $map['MainUserId'];
        }

        if (isset($map['MasterUserId'])) {
            $model->masterUserId = $map['MasterUserId'];
        }

        if (isset($map['RdId'])) {
            $model->rdId = $map['RdId'];
        }

        if (isset($map['RdOrder'])) {
            $model->rdOrder = $map['RdOrder'];
        }

        if (isset($map['SasInstanceId'])) {
            $model->sasInstanceId = $map['SasInstanceId'];
        }

        if (isset($map['SiemOrderFrom'])) {
            $model->siemOrderFrom = $map['SiemOrderFrom'];
        }

        if (isset($map['SiemOrderStatus'])) {
            $model->siemOrderStatus = $map['SiemOrderStatus'];
        }

        if (isset($map['SubUserId'])) {
            $model->subUserId = $map['SubUserId'];
        }

        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
