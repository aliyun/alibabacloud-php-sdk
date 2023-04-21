<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCloudDriveGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class cloudDriveGroups extends Model
{
    /**
     * @description The time when the team space was created.
     *
     * @example 2022-04-11T07:44:21Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the workspace.
     *
     * @example cn-hangzhou+dir-959593****
     *
     * @var string
     */
    public $directoryId;

    /**
     * @description The ID of the team space.
     *
     * @example sh1234
     *
     * @var string
     */
    public $driveId;

    /**
     * @description The ID of the team.
     *
     * @example cg-e70ga4ixp30ur****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the team space.
     *
     * @example Test Team 1
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The status of the team space. Valid values:
     *
     *   enabled
     *   disabled
     *
     * Default value: enabled.
     * @example enabled
     *
     * @var string
     */
    public $status;

    /**
     * @description The total capacity of the team space.
     *
     * @example 5368709120
     *
     * @var int
     */
    public $totalSize;

    /**
     * @description The size of the used space. Unit: bytes.
     *
     * @example 1024000000
     *
     * @var string
     */
    public $usedSize;
    protected $_name = [
        'createTime'  => 'CreateTime',
        'directoryId' => 'DirectoryId',
        'driveId'     => 'DriveId',
        'groupId'     => 'GroupId',
        'groupName'   => 'GroupName',
        'status'      => 'Status',
        'totalSize'   => 'TotalSize',
        'usedSize'    => 'UsedSize',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return cloudDriveGroups
     */
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
