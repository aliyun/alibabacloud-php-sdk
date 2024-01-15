<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Tea\Model;

class CopyCdsFileRequest extends Model
{
    /**
     * @description Specifies whether to automatically rename the file if a file that has the same name exists in the folder to which you want to copy the file. Default value: false.
     *
     * Valid values:
     *
     *   true
     *
     * <!-- -->
     *
     *   false
     *
     * <!-- -->
     * @example true
     *
     * @var bool
     */
    public $autoRename;

    /**
     * @description The ID of the cloud disk.
     *
     * @example cn-hangzhou+cds-352282****
     *
     * @var string
     */
    public $cdsId;

    /**
     * @description The user ID that you want to use to access the cloud disk.
     *
     * @example user01
     *
     * @var string
     */
    public $endUserId;

    /**
     * @description The file ID. You can call the CreateCdsFile operation to query the file ID.
     *
     * @example 640985a0ca2f71f489d2497682ca0bf468de****
     *
     * @var string
     */
    public $fileId;

    /**
     * @description 目标复制文件所在的个人空间ID（即UserId，您可以在DescribeCloudDriveUsers接口返回的报文中获取。）或者目标复制文件所在的团队空间ID（即GroupId，您可以在DescribeCloudDriveGroups接口返回的报文中获取。）
     * >
     * @example user02
     *
     * @var string
     */
    public $fileReceiverId;

    /**
     * @description 文件所属的空间类型。
     *
     * @example user
     *
     * @var string
     */
    public $fileReceiverType;

    /**
     * @var string
     */
    public $groupId;

    /**
     * @description The ID of the parent folder of the folder to which you want to copy the file. If you want to copy the file to the root directory, set this parameter to root.
     *
     * @example root
     *
     * @var string
     */
    public $parentFolderId;

    /**
     * @description The region ID. You can call the [DescribeRegions](~~196646~~) operation to query the most recent region list.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'autoRename'       => 'AutoRename',
        'cdsId'            => 'CdsId',
        'endUserId'        => 'EndUserId',
        'fileId'           => 'FileId',
        'fileReceiverId'   => 'FileReceiverId',
        'fileReceiverType' => 'FileReceiverType',
        'groupId'          => 'GroupId',
        'parentFolderId'   => 'ParentFolderId',
        'regionId'         => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->autoRename) {
            $res['AutoRename'] = $this->autoRename;
        }
        if (null !== $this->cdsId) {
            $res['CdsId'] = $this->cdsId;
        }
        if (null !== $this->endUserId) {
            $res['EndUserId'] = $this->endUserId;
        }
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->fileReceiverId) {
            $res['FileReceiverId'] = $this->fileReceiverId;
        }
        if (null !== $this->fileReceiverType) {
            $res['FileReceiverType'] = $this->fileReceiverType;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->parentFolderId) {
            $res['ParentFolderId'] = $this->parentFolderId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CopyCdsFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AutoRename'])) {
            $model->autoRename = $map['AutoRename'];
        }
        if (isset($map['CdsId'])) {
            $model->cdsId = $map['CdsId'];
        }
        if (isset($map['EndUserId'])) {
            $model->endUserId = $map['EndUserId'];
        }
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['FileReceiverId'])) {
            $model->fileReceiverId = $map['FileReceiverId'];
        }
        if (isset($map['FileReceiverType'])) {
            $model->fileReceiverType = $map['FileReceiverType'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['ParentFolderId'])) {
            $model->parentFolderId = $map['ParentFolderId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
