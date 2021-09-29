<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListAssistHistoriesResponseBody;

use AlibabaCloud\Tea\Model;

class histories extends Model
{
    /**
     * @var string
     */
    public $serialNumber;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $UNAME;

    /**
     * @var string
     */
    public $hardwareId;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var string
     */
    public $UUID;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $VIN;

    /**
     * @var string
     */
    public $UID;

    /**
     * @var string
     */
    public $ID;
    protected $_name = [
        'serialNumber' => 'SerialNumber',
        'endTime'      => 'EndTime',
        'startTime'    => 'StartTime',
        'UNAME'        => 'UNAME',
        'hardwareId'   => 'HardwareId',
        'deviceName'   => 'DeviceName',
        'UUID'         => 'UUID',
        'deviceId'     => 'DeviceId',
        'VIN'          => 'VIN',
        'UID'          => 'UID',
        'ID'           => 'ID',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->UNAME) {
            $res['UNAME'] = $this->UNAME;
        }
        if (null !== $this->hardwareId) {
            $res['HardwareId'] = $this->hardwareId;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->UUID) {
            $res['UUID'] = $this->UUID;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->VIN) {
            $res['VIN'] = $this->VIN;
        }
        if (null !== $this->UID) {
            $res['UID'] = $this->UID;
        }
        if (null !== $this->ID) {
            $res['ID'] = $this->ID;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return histories
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['UNAME'])) {
            $model->UNAME = $map['UNAME'];
        }
        if (isset($map['HardwareId'])) {
            $model->hardwareId = $map['HardwareId'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['UUID'])) {
            $model->UUID = $map['UUID'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['VIN'])) {
            $model->VIN = $map['VIN'];
        }
        if (isset($map['UID'])) {
            $model->UID = $map['UID'];
        }
        if (isset($map['ID'])) {
            $model->ID = $map['ID'];
        }

        return $model;
    }
}
