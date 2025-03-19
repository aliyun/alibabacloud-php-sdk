<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFilesetsResponseBody\entries;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFilesetsResponseBody\entries\entrie\quota;
use AlibabaCloud\Tea\Model;

class entrie extends Model
{
    /**
     * @description The time when the fileset was created.
     *
     * The time follows the ISO 8601 standard in the `yyyy-MM-ddTHH:mm:ssZ` format.
     *
     * @example 2021-09-30T10:08:08Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Specifies whether to enable deletion protection to allow you to release the fileset by using the console or by calling the [DeleteFileset](https://help.aliyun.com/document_detail/2838077.html) operation. Valid values:
     *
     *   true
     *   false
     *
     * >  This parameter can protect filesets only against manual releases, but not against automatic releases.
     *
     * @example true
     *
     * @var bool
     */
    public $deletionProtection;

    /**
     * @description The fileset description.
     *
     * @example test
     *
     * @var string
     */
    public $description;

    /**
     * @description The usage of the file quantity.
     *
     * >  Only CPFS for LINGJUN V2.7.0 and later support this parameter.
     *
     * @example 1024
     *
     * @var int
     */
    public $fileCountUsage;

    /**
     * @description The ID of the file system.
     *
     *   The IDs of CPFS file systems must start with `cpfs-`. Example: cpfs-099394bd928c\\*\\*\\*\\*.
     *   The IDs of CPFS for LINGJUN file systems must start with `bmcpfs-`. Example: bmcpfs-290w65p03ok64ya\\*\\*\\*\\*.
     *
     * >  CPFS is not supported on the international site.
     *
     * @example bmcpfs-290w65p03ok64ya****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The fileset path.
     *
     * @example pathtoroot/fset
     *
     * @var string
     */
    public $fileSystemPath;

    /**
     * @description The fileset ID.
     *
     * @example fset-1902718ea0ae****
     *
     * @var string
     */
    public $fsetId;

    /**
     * @description The quota information.
     *
     * >  Only CPFS for Lingjun V2.7.0 and later support this parameter.
     *
     * @var quota
     */
    public $quota;

    /**
     * @description The capacity usage. Unit: bytes.
     *
     * >  Only CPFS for LINGJUN V2.7.0 and later support this parameter.
     *
     * @example 1024
     *
     * @var int
     */
    public $spaceUsage;

    /**
     * @description The fileset status. Valid values:
     *
     *   CREATING: The fileset is being created.
     *   CREATED: The fileset has been created and is running properly.
     *   RELEASING: The fileset is being released.
     *   RELEASED: The fileset has been deleted.
     *
     * @example CREATED
     *
     * @var string
     */
    public $status;

    /**
     * @description The time when the fileset was last updated.
     *
     * The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format.
     *
     * @example 2021-09-30T10:08:08Z
     *
     * @var string
     */
    public $updateTime;
    protected $_name = [
        'createTime' => 'CreateTime',
        'deletionProtection' => 'DeletionProtection',
        'description' => 'Description',
        'fileCountUsage' => 'FileCountUsage',
        'fileSystemId' => 'FileSystemId',
        'fileSystemPath' => 'FileSystemPath',
        'fsetId' => 'FsetId',
        'quota' => 'Quota',
        'spaceUsage' => 'SpaceUsage',
        'status' => 'Status',
        'updateTime' => 'UpdateTime',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->deletionProtection) {
            $res['DeletionProtection'] = $this->deletionProtection;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->fileCountUsage) {
            $res['FileCountUsage'] = $this->fileCountUsage;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->fileSystemPath) {
            $res['FileSystemPath'] = $this->fileSystemPath;
        }
        if (null !== $this->fsetId) {
            $res['FsetId'] = $this->fsetId;
        }
        if (null !== $this->quota) {
            $res['Quota'] = null !== $this->quota ? $this->quota->toMap() : null;
        }
        if (null !== $this->spaceUsage) {
            $res['SpaceUsage'] = $this->spaceUsage;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->updateTime) {
            $res['UpdateTime'] = $this->updateTime;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return entrie
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DeletionProtection'])) {
            $model->deletionProtection = $map['DeletionProtection'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FileCountUsage'])) {
            $model->fileCountUsage = $map['FileCountUsage'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['FileSystemPath'])) {
            $model->fileSystemPath = $map['FileSystemPath'];
        }
        if (isset($map['FsetId'])) {
            $model->fsetId = $map['FsetId'];
        }
        if (isset($map['Quota'])) {
            $model->quota = quota::fromMap($map['Quota']);
        }
        if (isset($map['SpaceUsage'])) {
            $model->spaceUsage = $map['SpaceUsage'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UpdateTime'])) {
            $model->updateTime = $map['UpdateTime'];
        }

        return $model;
    }
}
