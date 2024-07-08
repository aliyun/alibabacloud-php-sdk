<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class SetDirQuotaRequest extends Model
{
    /**
     * @description The number of files that a user can create in the directory.
     *
     * If you set the QuotaType parameter to Enforcement, you must specify at least one of the SizeLimit and FileCountLimit parameters.
     * @example 10000
     *
     * @var int
     */
    public $fileCountLimit;

    /**
     * @description The ID of the file system.
     *
     * This parameter is required.
     * @example 1ca404****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The absolute path of the directory in the file system.
     *
     * > *   You can set quotas only for the directories that have been created in a NAS file system. The path of the directory that you specify for a quota is the absolute path of the directory in the NAS file system, but not the local path of the compute node, such as an Elastic Compute Service (ECS) instance or a container.
     * > *   Directories whose names contain Chinese characters are not supported.
     *
     * This parameter is required.
     * @example /data/sub1
     *
     * @var string
     */
    public $path;

    /**
     * @description The type of the quota.
     *
     * Valid values:
     *
     *   Accounting: a statistical quota. If you set this parameter to Accounting, NAS calculates only the storage usage of the directory.
     *   Enforcement: a restricted quota. If you set this parameter to Enforcement and the storage usage exceeds the quota, you can no longer create files or subdirectories for the directory, or write data to the directory.
     *
     * This parameter is required.
     * @example Accounting
     *
     * @var string
     */
    public $quotaType;

    /**
     * @description The size of files that a user can create in the directory.
     *
     * If you set the QuotaType parameter to Enforcement, you must specify at least one of the SizeLimit and FileCountLimit parameters.
     * @example 1024
     *
     * @var int
     */
    public $sizeLimit;

    /**
     * @description The UID or GID of the user for whom you want to set a directory quota.
     *
     * Examples:
     *
     *   If you want to set a directory quota for a user whose UID is 500, set the UserType parameter to Uid and set the UserId parameter to 500.
     *   If you want to set a directory quota for a user group whose GID is 100, set the UserType parameter to Gid and set the UserId parameter to 100.
     *
     * @example 500
     *
     * @var string
     */
    public $userId;

    /**
     * @description The type of the user.
     *
     * Valid values:
     *
     *   Uid: user ID
     *   Gid: user group ID
     *   AllUsers: all users
     *
     * This parameter is required.
     * @example Uid
     *
     * @var string
     */
    public $userType;
    protected $_name = [
        'fileCountLimit' => 'FileCountLimit',
        'fileSystemId'   => 'FileSystemId',
        'path'           => 'Path',
        'quotaType'      => 'QuotaType',
        'sizeLimit'      => 'SizeLimit',
        'userId'         => 'UserId',
        'userType'       => 'UserType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileCountLimit) {
            $res['FileCountLimit'] = $this->fileCountLimit;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->quotaType) {
            $res['QuotaType'] = $this->quotaType;
        }
        if (null !== $this->sizeLimit) {
            $res['SizeLimit'] = $this->sizeLimit;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userType) {
            $res['UserType'] = $this->userType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SetDirQuotaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileCountLimit'])) {
            $model->fileCountLimit = $map['FileCountLimit'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['QuotaType'])) {
            $model->quotaType = $map['QuotaType'];
        }
        if (isset($map['SizeLimit'])) {
            $model->sizeLimit = $map['SizeLimit'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserType'])) {
            $model->userType = $map['UserType'];
        }

        return $model;
    }
}
