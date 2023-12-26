<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class ModifyFileSystemRequest extends Model
{
    /**
     * @description The description of the file system.
     *
     * Limits:
     *
     *   The description must be 2 to 128 characters in length.
     *   It must start with a letter but cannot start with `http://` or `https://`.
     *   The description can contain letters, digits, colons (:), underscores (\_), and hyphens (-).
     *
     * @example NAS-test-1
     *
     * @var string
     */
    public $description;

    /**
     * @description The ID of the file system.
     *
     *   Sample ID of a General-purpose NAS file system: `31a8e4****`.
     *   The IDs of Extreme NAS file systems must start with `extreme-`. Example: `extreme-0015****`.
     *   The IDs of Cloud Paralleled File System (CPFS) file systems must start with `cpfs-`. Example: `cpfs-125487****`.
     * >CPFS file systems are available only on the China site (aliyun.com).
     * @example 1ca404****
     *
     * @var string
     */
    public $fileSystemId;
    protected $_name = [
        'description'  => 'Description',
        'fileSystemId' => 'FileSystemId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyFileSystemRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }

        return $model;
    }
}
