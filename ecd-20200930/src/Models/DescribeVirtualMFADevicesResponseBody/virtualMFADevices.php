<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeVirtualMFADevicesResponseBody;

use AlibabaCloud\Tea\Model;

class virtualMFADevices extends Model
{
    /**
     * @description The number of consecutive failures to bind the virtual MFA device, or the number of failures on the verification of the virtual MFA device.
     *
     * @example 1
     *
     * @var int
     */
    public $consecutiveFails;

    /**
     * @description > This parameter is in invitational preview and is not publicly available.
     *
     * @example cn-hangzhou+dir-gx2x1dhsmu52rd****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The name of the AD user who uses the virtual MFA device.
     *
     * @example usertest
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description The time when the virtual MFA device was started. The time follows the [ISO 8601](https://help.aliyun.com/document_detail/25696.html) standard in the YYYY-MM-DDThh:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2020-12-20T14:52:28Z
     *
     * @var string
     */
    public $gmtEnabled;

    /**
     * @description The time when a locked virtual MFA device was automatically unlocked. The time follows the [ISO 8601](https://help.aliyun.com/document_detail/25696.html) standard in the YYYY-MM-DDThh:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2020-12-21T15:21:28Z
     *
     * @var string
     */
    public $gmtUnlock;

    /**
     * @description The ID of the workspace.
     *
     * @example cn-hangzhou+dir-269345****
     *
     * @var string
     */
    public $officeSiteId;

    /**
     * @description The serial number of the virtual MFA device, which is a unique identifier.
     *
     * @example a25f297f-f2e1-4a44-bbf1-5f48a6e5****
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
        'directoryId'      => 'DirectoryId',
        'endUserId'        => 'EndUserId',
        'gmtEnabled'       => 'GmtEnabled',
        'gmtUnlock'        => 'GmtUnlock',
        'officeSiteId'     => 'OfficeSiteId',
        'serialNumber'     => 'SerialNumber',
        'status'           => 'status',
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
        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
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
        if (null !== $this->officeSiteId) {
            $res['OfficeSiteId'] = $this->officeSiteId;
        }
        if (null !== $this->serialNumber) {
            $res['SerialNumber'] = $this->serialNumber;
        }
        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return virtualMFADevices
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ConsecutiveFails'])) {
            $model->consecutiveFails = $map['ConsecutiveFails'];
        }
        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
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
        if (isset($map['OfficeSiteId'])) {
            $model->officeSiteId = $map['OfficeSiteId'];
        }
        if (isset($map['SerialNumber'])) {
            $model->serialNumber = $map['SerialNumber'];
        }
        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        return $model;
    }
}
