<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeMfaDevicesResponseBody;

use AlibabaCloud\Dara\Model;

class mfaDevices extends Model
{
    /**
     * @var int
     */
    public $consecutiveFails;

    /**
     * @var string
     */
    public $deviceType;

    /**
     * @var string
     */
    public $email;

    /**
     * @var string
     */
    public $endUserId;

    /**
     * @var string
     */
    public $gmtEnabled;

    /**
     * @var string
     */
    public $gmtUnlock;

    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $serialNumber;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'consecutiveFails' => 'ConsecutiveFails',
        'deviceType' => 'DeviceType',
        'email' => 'Email',
        'endUserId' => 'EndUserId',
        'gmtEnabled' => 'GmtEnabled',
        'gmtUnlock' => 'GmtUnlock',
        'id' => 'Id',
        'serialNumber' => 'SerialNumber',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->consecutiveFails) {
            $res['ConsecutiveFails'] = $this->consecutiveFails;
        }

        if (null !== $this->deviceType) {
            $res['DeviceType'] = $this->deviceType;
        }

        if (null !== $this->email) {
            $res['Email'] = $this->email;
        }

        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }

        if (null !== $this->gmtEnabled) {
            $res['GmtEnabled'] = $this->gmtEnabled;
        }

        if (null !== $this->gmtUnlock) {
            $res['GmtUnlock'] = $this->gmtUnlock;
        }

        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }

        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
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
        if (isset($map['ConsecutiveFails'])) {
            $model->consecutiveFails = $map['ConsecutiveFails'];
        }

        if (isset($map['DeviceType'])) {
            $model->deviceType = $map['DeviceType'];
        }

        if (isset($map['Email'])) {
            $model->email = $map['Email'];
        }

        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }

        if (isset($map['GmtEnabled'])) {
            $model->gmtEnabled = $map['GmtEnabled'];
        }

        if (isset($map['GmtUnlock'])) {
            $model->gmtUnlock = $map['GmtUnlock'];
        }

        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }

        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
