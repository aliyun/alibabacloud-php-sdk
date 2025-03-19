<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class CreateDirRequest extends Model
{
    /**
     * @description The ID of the file system.
     *
     * This parameter is required.
     *
     * @example 31a8e4****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The ID of the owner group for the directory. Valid values: 0 to 4294967295.
     *
     * This parameter is required.
     *
     * @example 123
     *
     * @var int
     */
    public $ownerGroupId;

    /**
     * @description The owner ID for the directory. Valid values: 0 to 4294967295.
     *
     * This parameter is required.
     *
     * @example 1
     *
     * @var int
     */
    public $ownerUserId;

    /**
     * @description The Portable Operating System Interface (POSIX) permissions applied to the root directory. The value is a valid octal number, such as 0755.
     *
     * This parameter is required.
     *
     * @example 0755
     *
     * @var string
     */
    public $permission;

    /**
     * @description Specifies whether to create a multi-level directory. Valid values:
     *
     *   true (default): If no multi-level directory exists, directories are created level by level.
     *   false: Only the last level of directory is created. An error message is returned because the parent directory does not exist.
     *
     * @example true
     *
     * @var bool
     */
    public $recursion;

    /**
     * @description The directory name.
     *
     *   The directory must start with a forward slash (/).
     *   The directory can contain digits and letters.
     *   The directory can contain underscores (_), hyphens (-), and periods (.).
     *   The directory cannot contain symbolic links, such as the current directory (.), the upper-level directory (..), and other symbolic links.
     *
     * > *   If the root directory does not exist, configure the information for directory creation. The system then automatically creates the specified root directory based on your settings.
     * > *  If the root directory exists, you do not need to configure the information for directory creation. The configurations for directory creation are ignored even if you configure the information.
     *
     * This parameter is required.
     *
     * @example test
     *
     * @var string
     */
    public $rootDirectory;
    protected $_name = [
        'fileSystemId' => 'FileSystemId',
        'ownerGroupId' => 'OwnerGroupId',
        'ownerUserId' => 'OwnerUserId',
        'permission' => 'Permission',
        'recursion' => 'Recursion',
        'rootDirectory' => 'RootDirectory',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->ownerGroupId) {
            $res['OwnerGroupId'] = $this->ownerGroupId;
        }
        if (null !== $this->ownerUserId) {
            $res['OwnerUserId'] = $this->ownerUserId;
        }
        if (null !== $this->permission) {
            $res['Permission'] = $this->permission;
        }
        if (null !== $this->recursion) {
            $res['Recursion'] = $this->recursion;
        }
        if (null !== $this->rootDirectory) {
            $res['RootDirectory'] = $this->rootDirectory;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateDirRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['OwnerGroupId'])) {
            $model->ownerGroupId = $map['OwnerGroupId'];
        }
        if (isset($map['OwnerUserId'])) {
            $model->ownerUserId = $map['OwnerUserId'];
        }
        if (isset($map['Permission'])) {
            $model->permission = $map['Permission'];
        }
        if (isset($map['Recursion'])) {
            $model->recursion = $map['Recursion'];
        }
        if (isset($map['RootDirectory'])) {
            $model->rootDirectory = $map['RootDirectory'];
        }

        return $model;
    }
}
