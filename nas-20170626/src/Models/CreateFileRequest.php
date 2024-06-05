<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class CreateFileRequest extends Model
{
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
     * @description The ID of the portable account. The ID must be a 16-digit string. The string can contain digits and lowercase letters.
     *
     * @example 378cc7630f26****
     *
     * @var string
     */
    public $owner;

    /**
     * @description Specifies whether to share the directory. Valid values:
     *
     *   false (default): does not share the directory.
     *   true: shares the directory.
     *
     * > *   This parameter takes effect only if the Type parameter is set to Directory and the Owner parameter is not empty.
     * > *   The permissions on a directory can be inherited by the owner. The owner has read and write permissions on the subdirectories and subfiles created in the directory, even if they are created by others.
     * @example false
     *
     * @var bool
     */
    public $ownerAccessInheritable;

    /**
     * @description The absolute path of the directory or file. The path must start and end with a forward slash (/) and must be 2 to 1024 characters in length.
     *
     * This parameter is required.
     * @example /test/
     *
     * @var string
     */
    public $path;

    /**
     * @description The type of the object. Valid values:
     *
     *   File
     *   Directory
     *
     * This parameter is required.
     * @example File
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'fileSystemId'           => 'FileSystemId',
        'owner'                  => 'Owner',
        'ownerAccessInheritable' => 'OwnerAccessInheritable',
        'path'                   => 'Path',
        'type'                   => 'Type',
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
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->ownerAccessInheritable) {
            $res['OwnerAccessInheritable'] = $this->ownerAccessInheritable;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['OwnerAccessInheritable'])) {
            $model->ownerAccessInheritable = $map['OwnerAccessInheritable'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
