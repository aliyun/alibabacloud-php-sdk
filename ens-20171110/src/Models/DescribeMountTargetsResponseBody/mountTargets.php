<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeMountTargetsResponseBody;

use AlibabaCloud\Dara\Model;

class mountTargets extends Model
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
    public $mountTargetDomain;

    /**
     * @var string
     */
    public $mountTargetName;

    /**
     * @var string
     */
    public $netWorkId;

    /**
     * @var string
     */
    public $status;
    protected $_name = [
        'ensRegionId' => 'EnsRegionId',
        'fileSystemId' => 'FileSystemId',
        'mountTargetDomain' => 'MountTargetDomain',
        'mountTargetName' => 'MountTargetName',
        'netWorkId' => 'NetWorkId',
        'status' => 'Status',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ensRegionId) {
            $res['EnsRegionId'] = $this->ensRegionId;
        }

        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }

        if (null !== $this->mountTargetDomain) {
            $res['MountTargetDomain'] = $this->mountTargetDomain;
        }

        if (null !== $this->mountTargetName) {
            $res['MountTargetName'] = $this->mountTargetName;
        }

        if (null !== $this->netWorkId) {
            $res['NetWorkId'] = $this->netWorkId;
        }

        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EnsRegionId'])) {
            $model->ensRegionId = $map['EnsRegionId'];
        }

        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }

        if (isset($map['MountTargetDomain'])) {
            $model->mountTargetDomain = $map['MountTargetDomain'];
        }

        if (isset($map['MountTargetName'])) {
            $model->mountTargetName = $map['MountTargetName'];
        }

        if (isset($map['NetWorkId'])) {
            $model->netWorkId = $map['NetWorkId'];
        }

        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
