<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeVirtualMFADevicesResponseBody;

use AlibabaCloud\Tea\Model;

class virtualMFADevices extends Model
{
    /**
     * @var int
     */
    public $consecutiveFails;

    /**
     * @var string
     */
    public $directoryId;

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
     * @var string
     */
    public $officeSiteId;

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
