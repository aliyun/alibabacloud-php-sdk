<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20230630\Models;

use AlibabaCloud\Tea\Model;

class BindStorageOrderRequest extends Model
{
    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var bool
     */
    public $enableDefaultPlan;

    /**
     * @var int
     */
    public $eventRecordDuration;

    /**
     * @var bool
     */
    public $eventRecordProlong;

    /**
     * @var string
     */
    public $iotId;

    /**
     * @var int
     */
    public $maxRecordFileDuration;

    /**
     * @var string
     */
    public $orderId;

    /**
     * @var int
     */
    public $preRecordDuration;

    /**
     * @var string
     */
    public $productKey;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $userName;
    protected $_name = [
        'deviceName'            => 'DeviceName',
        'enableDefaultPlan'     => 'EnableDefaultPlan',
        'eventRecordDuration'   => 'EventRecordDuration',
        'eventRecordProlong'    => 'EventRecordProlong',
        'iotId'                 => 'IotId',
        'maxRecordFileDuration' => 'MaxRecordFileDuration',
        'orderId'               => 'OrderId',
        'preRecordDuration'     => 'PreRecordDuration',
        'productKey'            => 'ProductKey',
        'userId'                => 'UserId',
        'userName'              => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->enableDefaultPlan) {
            $res['EnableDefaultPlan'] = $this->enableDefaultPlan;
        }
        if (null !== $this->eventRecordDuration) {
            $res['EventRecordDuration'] = $this->eventRecordDuration;
        }
        if (null !== $this->eventRecordProlong) {
            $res['EventRecordProlong'] = $this->eventRecordProlong;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->maxRecordFileDuration) {
            $res['MaxRecordFileDuration'] = $this->maxRecordFileDuration;
        }
        if (null !== $this->orderId) {
            $res['OrderId'] = $this->orderId;
        }
        if (null !== $this->preRecordDuration) {
            $res['PreRecordDuration'] = $this->preRecordDuration;
        }
        if (null !== $this->productKey) {
            $res['ProductKey'] = $this->productKey;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userName) {
            $res['UserName'] = $this->userName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BindStorageOrderRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['EnableDefaultPlan'])) {
            $model->enableDefaultPlan = $map['EnableDefaultPlan'];
        }
        if (isset($map['EventRecordDuration'])) {
            $model->eventRecordDuration = $map['EventRecordDuration'];
        }
        if (isset($map['EventRecordProlong'])) {
            $model->eventRecordProlong = $map['EventRecordProlong'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['MaxRecordFileDuration'])) {
            $model->maxRecordFileDuration = $map['MaxRecordFileDuration'];
        }
        if (isset($map['OrderId'])) {
            $model->orderId = $map['OrderId'];
        }
        if (isset($map['PreRecordDuration'])) {
            $model->preRecordDuration = $map['PreRecordDuration'];
        }
        if (isset($map['ProductKey'])) {
            $model->productKey = $map['ProductKey'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserName'])) {
            $model->userName = $map['UserName'];
        }

        return $model;
    }
}
