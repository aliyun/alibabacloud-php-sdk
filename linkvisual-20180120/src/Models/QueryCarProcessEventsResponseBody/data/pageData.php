<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkvisual\V20180120\Models\QueryCarProcessEventsResponseBody\data;

use AlibabaCloud\Tea\Model;

class pageData extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $actionType;

    /**
     * @example 0
     *
     * @var int
     */
    public $areaIndex;

    /**
     * @example 63
     *
     * @var int
     */
    public $confidence;

    /**
     * @example dailyb3d6658d9****
     *
     * @var string
     */
    public $eventId;

    /**
     * @example SU5LT2pXaUM4MV****Nzg
     *
     * @var string
     */
    public $eventPicId;

    /**
     * @example https://example.com/test.jpg
     *
     * @var string
     */
    public $eventPicUrl;

    /**
     * @example 1646288428361
     *
     * @var int
     */
    public $eventTime;

    /**
     * @example 10005
     *
     * @var int
     */
    public $eventType;

    /**
     * @example gl9kLgp0UsPSCcIM8EAY00****
     *
     * @var string
     */
    public $iotId;

    /**
     * @var string
     */
    public $plateNo;

    /**
     * @example car_test
     *
     * @var string
     */
    public $subDeviceName;

    /**
     * @var string
     */
    public $subDeviceNickName;

    /**
     * @example ImP6ECd1aQxio9CAfWTO****
     *
     * @var string
     */
    public $subIotId;

    /**
     * @example a1Duh0F****
     *
     * @var string
     */
    public $subProductKey;

    /**
     * @example daily55617e7653354490938d****
     *
     * @var string
     */
    public $taskId;
    protected $_name = [
        'actionType'        => 'ActionType',
        'areaIndex'         => 'AreaIndex',
        'confidence'        => 'Confidence',
        'eventId'           => 'EventId',
        'eventPicId'        => 'EventPicId',
        'eventPicUrl'       => 'EventPicUrl',
        'eventTime'         => 'EventTime',
        'eventType'         => 'EventType',
        'iotId'             => 'IotId',
        'plateNo'           => 'PlateNo',
        'subDeviceName'     => 'SubDeviceName',
        'subDeviceNickName' => 'SubDeviceNickName',
        'subIotId'          => 'SubIotId',
        'subProductKey'     => 'SubProductKey',
        'taskId'            => 'TaskId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->actionType) {
            $res['ActionType'] = $this->actionType;
        }
        if (null !== $this->areaIndex) {
            $res['AreaIndex'] = $this->areaIndex;
        }
        if (null !== $this->confidence) {
            $res['Confidence'] = $this->confidence;
        }
        if (null !== $this->eventId) {
            $res['EventId'] = $this->eventId;
        }
        if (null !== $this->eventPicId) {
            $res['EventPicId'] = $this->eventPicId;
        }
        if (null !== $this->eventPicUrl) {
            $res['EventPicUrl'] = $this->eventPicUrl;
        }
        if (null !== $this->eventTime) {
            $res['EventTime'] = $this->eventTime;
        }
        if (null !== $this->eventType) {
            $res['EventType'] = $this->eventType;
        }
        if (null !== $this->iotId) {
            $res['IotId'] = $this->iotId;
        }
        if (null !== $this->plateNo) {
            $res['PlateNo'] = $this->plateNo;
        }
        if (null !== $this->subDeviceName) {
            $res['SubDeviceName'] = $this->subDeviceName;
        }
        if (null !== $this->subDeviceNickName) {
            $res['SubDeviceNickName'] = $this->subDeviceNickName;
        }
        if (null !== $this->subIotId) {
            $res['SubIotId'] = $this->subIotId;
        }
        if (null !== $this->subProductKey) {
            $res['SubProductKey'] = $this->subProductKey;
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return pageData
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ActionType'])) {
            $model->actionType = $map['ActionType'];
        }
        if (isset($map['AreaIndex'])) {
            $model->areaIndex = $map['AreaIndex'];
        }
        if (isset($map['Confidence'])) {
            $model->confidence = $map['Confidence'];
        }
        if (isset($map['EventId'])) {
            $model->eventId = $map['EventId'];
        }
        if (isset($map['EventPicId'])) {
            $model->eventPicId = $map['EventPicId'];
        }
        if (isset($map['EventPicUrl'])) {
            $model->eventPicUrl = $map['EventPicUrl'];
        }
        if (isset($map['EventTime'])) {
            $model->eventTime = $map['EventTime'];
        }
        if (isset($map['EventType'])) {
            $model->eventType = $map['EventType'];
        }
        if (isset($map['IotId'])) {
            $model->iotId = $map['IotId'];
        }
        if (isset($map['PlateNo'])) {
            $model->plateNo = $map['PlateNo'];
        }
        if (isset($map['SubDeviceName'])) {
            $model->subDeviceName = $map['SubDeviceName'];
        }
        if (isset($map['SubDeviceNickName'])) {
            $model->subDeviceNickName = $map['SubDeviceNickName'];
        }
        if (isset($map['SubIotId'])) {
            $model->subIotId = $map['SubIotId'];
        }
        if (isset($map['SubProductKey'])) {
            $model->subProductKey = $map['SubProductKey'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
