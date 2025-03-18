<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class DeleteMountTargetRequest extends Model
{
    /**
     * @description The ID of the edge node.
     *
     * This parameter is required.
     *
     * @example cn-beijing-cmcc
     *
     * @var string
     */
    public $ensRegionId;

    /**
     * @description The ID of the file system.
     *
     * This parameter is required.
     *
     * @example c50f8*****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The name of the mount target.
     *
     * This parameter is required.
     *
     * @example TestMountPath
     *
     * @var string
     */
    public $mountTargetName;
    protected $_name = [
        'ensRegionId' => 'EnsRegionId',
        'fileSystemId' => 'FileSystemId',
        'mountTargetName' => 'MountTargetName',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->mountTargetName) {
            $res['MountTargetName'] = $this->mountTargetName;
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
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['MountTargetName'])) {
            $model->mountTargetName = $map['MountTargetName'];
        }

        return $model;
    }
}
