<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models\ListAssistHistoriesResponseBody;

use AlibabaCloud\Tea\Model;

class histories extends Model
{
    /**
     * @var string
     */
    public $ID;

    /**
     * @var string
     */
    public $deviceName;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var int
     */
    public $endTime;

    /**
     * @var string
     */
    public $deviceId;

    /**
     * @var string
     */
    public $serialNumber;

    /**
     * @var string
     */
    public $hardwareId;

    /**
     * @var string
     */
    public $UUID;

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
    public $UNAME;
    protected $_name = [
        'ID'           => 'ID',
        'deviceName'   => 'DeviceName',
        'startTime'    => 'StartTime',
        'endTime'      => 'EndTime',
        'deviceId'     => 'DeviceId',
        'serialNumber' => 'SerialNumber',
        'hardwareId'   => 'HardwareId',
        'UUID'         => 'UUID',
        'VIN'          => 'VIN',
        'UID'          => 'UID',
        'UNAME'        => 'UNAME',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ID) {
            $res['ID'] = $this->ID;
        }
        if (null !== $this->deviceName) {
            $res['DeviceName'] = $this->deviceName;
        }
        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
        }
        if (null !== $this->endTime) {
            $res['EndTime'] = $this->endTime;
        }
        if (null !== $this->deviceId) {
            $res['DeviceId'] = $this->deviceId;
        }
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->hardwareId) {
            $res['HardwareId'] = $this->hardwareId;
        }
        if (null !== $this->UUID) {
            $res['UUID'] = $this->UUID;
        }
        if (null !== $this->VIN) {
            $res['VIN'] = $this->VIN;
        }
        if (null !== $this->UID) {
            $res['UID'] = $this->UID;
        }
        if (null !== $this->UNAME) {
            $res['UNAME'] = $this->UNAME;
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
        if (isset($map['ID'])) {
            $model->ID = $map['ID'];
        }
        if (isset($map['DeviceName'])) {
            $model->deviceName = $map['DeviceName'];
        }
        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }
        if (isset($map['EndTime'])) {
            $model->endTime = $map['EndTime'];
        }
        if (isset($map['DeviceId'])) {
            $model->deviceId = $map['DeviceId'];
        }
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['HardwareId'])) {
            $model->hardwareId = $map['HardwareId'];
        }
        if (isset($map['UUID'])) {
            $model->UUID = $map['UUID'];
        }
        if (isset($map['VIN'])) {
            $model->VIN = $map['VIN'];
        }
        if (isset($map['UID'])) {
            $model->UID = $map['UID'];
        }
        if (isset($map['UNAME'])) {
            $model->UNAME = $map['UNAME'];
        }

        return $model;
    }
}
