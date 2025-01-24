<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCloudDriveGroupsResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeCloudDriveGroupsResponseBody\cloudDriveGroups\adminUserInfos;

class cloudDriveGroups extends Model
{
    /**
     * @var string
     */
    public $adminUserIds;
    /**
     * @var adminUserInfos[]
     */
    public $adminUserInfos;
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
    public $recycleBinSize;
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
        'adminUserIds'   => 'AdminUserIds',
        'adminUserInfos' => 'AdminUserInfos',
        'createTime'     => 'CreateTime',
        'directoryId'    => 'DirectoryId',
        'driveId'        => 'DriveId',
        'groupId'        => 'GroupId',
        'groupName'      => 'GroupName',
        'orgId'          => 'OrgId',
        'recycleBinSize' => 'RecycleBinSize',
        'status'         => 'Status',
        'totalSize'      => 'TotalSize',
        'usedSize'       => 'UsedSize',
    ];

    public function validate()
    {
        if (\is_array($this->adminUserInfos)) {
            Model::validateArray($this->adminUserInfos);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->adminUserIds) {
            $res['AdminUserIds'] = $this->adminUserIds;
        }

        if (null !== $this->adminUserInfos) {
            if (\is_array($this->adminUserInfos)) {
                $res['AdminUserInfos'] = [];
                $n1                    = 0;
                foreach ($this->adminUserInfos as $item1) {
                    $res['AdminUserInfos'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

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

        if (null !== $this->recycleBinSize) {
            $res['RecycleBinSize'] = $this->recycleBinSize;
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
        if (isset($map['AdminUserIds'])) {
            $model->adminUserIds = $map['AdminUserIds'];
        }

        if (isset($map['AdminUserInfos'])) {
            if (!empty($map['AdminUserInfos'])) {
                $model->adminUserInfos = [];
                $n1                    = 0;
                foreach ($map['AdminUserInfos'] as $item1) {
                    $model->adminUserInfos[$n1++] = adminUserInfos::fromMap($item1);
                }
            }
        }

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

        if (isset($map['RecycleBinSize'])) {
            $model->recycleBinSize = $map['RecycleBinSize'];
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
