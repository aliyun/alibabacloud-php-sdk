<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCloudDriveUsersResponseBody;

use AlibabaCloud\Tea\Model;

class cloudDriveUsers extends Model
{
    /**
     * @example 8
     *
     * @var string
     */
    public $driveId;

    /**
     * @var string
     */
    public $endUserId;

    /**
     * @example enabled
     *
     * @var string
     */
    public $status;

    /**
     * @example 10240000
     *
     * @var int
     */
    public $totalSize;

    /**
     * @example 20490
     *
     * @var int
     */
    public $usedSize;

    /**
     * @example abc
     *
     * @var string
     */
    public $userId;

    /**
     * @example abc
     *
     * @var string
     */
    public $userName;
    protected $_name = [
        'driveId'   => 'DriveId',
        'endUserId' => 'EndUserId',
        'status'    => 'Status',
        'totalSize' => 'TotalSize',
        'usedSize'  => 'UsedSize',
        'userId'    => 'UserId',
        'userName'  => 'UserName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->driveId) {
            $res['DriveId'] = $this->driveId;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->totalSize) {
            $res['TotalSize'] = $this->totalSize;
        }
        if (null !== $this->usedSize) {
            $res['UsedSize'] = $this->usedSize;
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
     * @return cloudDriveUsers
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DriveId'])) {
            $model->driveId = $map['DriveId'];
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TotalSize'])) {
            $model->totalSize = $map['TotalSize'];
        }
        if (isset($map['UsedSize'])) {
            $model->usedSize = $map['UsedSize'];
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
