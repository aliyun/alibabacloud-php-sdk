<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class CancelDirQuotaRequest extends Model
{
    /**
     * @description The ID of the file system.
     *
     * @example 1ca404****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The absolute path of a directory.
     *
     * @example /data/sub1
     *
     * @var string
     */
    public $path;

    /**
     * @description The UID or GID of a user for whom you want to cancel the directory quota.
     *
     * Examples:
     *
     *   If you want to cancel a quota for a user whose UID is 500, set the UserType parameter to Uid and set the UserId parameter to 500.
     *   If you want to cancel a quota for a group whose GID is 100, set the UserType parameter to Gid and set the UserId parameter to 100.
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
     * @example Uid
     *
     * @var string
     */
    public $userType;
    protected $_name = [
        'fileSystemId' => 'FileSystemId',
        'path'         => 'Path',
        'userId'       => 'UserId',
        'userType'     => 'UserType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
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
     * @return CancelDirQuotaRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
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
