<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edsuser\V20210308\Models\DescribeMfaDevicesResponseBody;

use AlibabaCloud\Tea\Model;

class mfaDevices extends Model
{
    /**
     * @description The number of consecutive failures to bind the virtual MFA device, or the number of authentication failures based on the virtual MFA device.
     *
     * @example 0
     *
     * @var int
     */
    public $consecutiveFails;

    /**
     * @description The type of the virtual MFA device. The value can only be TOTP_VIRTUAL. This value indicates that the virtual MFA device follows the Time-based One-time Password (TOTP) algorithm.
     *
     * @example TOTP_VIRTUAL
     *
     * @var string
     */
    public $deviceType;

    /**
     * @description >  This parameter is not publicly available.
     *
     * @example username@example.com
     *
     * @var string
     */
    public $email;

    /**
     * @description The username of the convenience user that uses the virtual MFA device.
     *
     * @example test
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description The time when the virtual MFA device was enabled. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2021-06-22T06:20:49Z
     *
     * @var string
     */
    public $gmtEnabled;

    /**
     * @description The time when the locked virtual MFA device was automatically unlocked. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2021-06-23T06:20:49Z
     *
     * @var string
     */
    public $gmtUnlock;

    /**
     * @description >  This parameter is not publicly available.
     *
     * @example 36
     *
     * @var int
     */
    public $id;

    /**
     * @description The serial number of the virtual MFA device. The serial number is unique for each device.
     *
     * @example dc856334-446b-4035-bfbc-18af261e****
     *
     * @var string
     */
    public $serialNumber;

    /**
     * @description The status of the virtual MFA device.
     *
     * Valid values:
     *
     *   LOCKED
     *
     * <!-- -->
     *
     *   UNBOUND
     *
     * <!-- -->
     *
     *   NORMAL
     *
     * <!-- -->
     * @example NORMAL
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'consecutiveFails' => 'ConsecutiveFails',
        'deviceType'       => 'DeviceType',
        'email'            => 'Email',
        'endUserId'        => 'EndUserId',
        'gmtEnabled'       => 'GmtEnabled',
        'gmtUnlock'        => 'GmtUnlock',
        'id'               => 'Id',
        'serialNumber'     => 'SerialNumber',
        'status'           => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return mfaDevices
     */
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
