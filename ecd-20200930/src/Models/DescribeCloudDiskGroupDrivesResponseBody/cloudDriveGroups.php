<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCloudDiskGroupDrivesResponseBody;

use AlibabaCloud\Dara\Model;

class cloudDriveGroups extends Model
{
    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $directoryId;

    /**
     * @var string
     */
    public $driveId;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $orgId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var int
     */
    public $totalSize;

    /**
     * @var string
     */
    public $usedSize;
    protected $_name = [
        'createTime' => 'CreateTime',
        'directoryId' => 'DirectoryId',
        'driveId' => 'DriveId',
        'groupId' => 'GroupId',
        'groupName' => 'GroupName',
        'orgId' => 'OrgId',
        'status' => 'Status',
        'totalSize' => 'TotalSize',
        'usedSize' => 'UsedSize',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }

        if (null !== $this->directoryId) {
            $res['DirectoryId'] = $this->directoryId;
        }

        if (null !== $this->driveId) {
            $res['DriveId'] = $this->driveId;
        }

        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        if (null !== $this->orgId) {
            $res['OrgId'] = $this->orgId;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }

        if (isset($map['DirectoryId'])) {
            $model->directoryId = $map['DirectoryId'];
        }

        if (isset($map['DriveId'])) {
            $model->driveId = $map['DriveId'];
        }

        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        if (isset($map['OrgId'])) {
            $model->orgId = $map['OrgId'];
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

        return $model;
    }
}
