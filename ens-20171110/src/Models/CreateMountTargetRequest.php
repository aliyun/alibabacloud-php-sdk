<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models;

use AlibabaCloud\Tea\Model;

class CreateMountTargetRequest extends Model
{
    /**
     * @var string
     */
    public $ensRegionId;

    /**
     * @var string
     */
    public $fileSystemId;

    /**
     * @var string
     */
    public $mountTargetName;

    /**
     * @var string
     */
    public $netWorkId;
    protected $_name = [
        'ensRegionId'     => 'EnsRegionId',
        'fileSystemId'    => 'FileSystemId',
        'mountTargetName' => 'MountTargetName',
        'netWorkId'       => 'NetWorkId',
    ];

    public function validate()
    {
    }

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
        if (null !== $this->netWorkId) {
            $res['NetWorkId'] = $this->netWorkId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMountTargetRequest
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
        if (isset($map['NetWorkId'])) {
            $model->netWorkId = $map['NetWorkId'];
        }

        return $model;
    }
}
