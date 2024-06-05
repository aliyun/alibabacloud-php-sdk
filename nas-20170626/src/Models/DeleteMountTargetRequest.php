<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class DeleteMountTargetRequest extends Model
{
    /**
     * @description The ID of the file system.
     *
     *   Sample ID of a General-purpose NAS file system: 31a8e4\\*\\*\\*\\*.
     *   The IDs of Extreme NAS file systems must start with `extreme-`, for example, extreme-0015\\*\\*\\*\\*.
     *   The IDs of Cloud Parallel File Storage (CPFS) file systems must start with `cpfs-`, for example, cpfs-125487\\*\\*\\*\\*.
     *
     * This parameter is required.
     * @example 174494****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The domain name of the mount target.
     *
     * This parameter is required.
     * @example 174494b666-x****.cn-hangzhou.nas.aliyuncs.com
     *
     * @var string
     */
    public $mountTargetDomain;
    protected $_name = [
        'fileSystemId'      => 'FileSystemId',
        'mountTargetDomain' => 'MountTargetDomain',
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
        if (null !== $this->mountTargetDomain) {
            $res['MountTargetDomain'] = $this->mountTargetDomain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteMountTargetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['MountTargetDomain'])) {
            $model->mountTargetDomain = $map['MountTargetDomain'];
        }

        return $model;
    }
}
