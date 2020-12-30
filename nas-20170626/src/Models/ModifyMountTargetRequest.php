<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class ModifyMountTargetRequest extends Model
{
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
    public $accessGroupName;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $dualStackMountTargetDomain;
    protected $_name = [
        'fileSystemId'               => 'FileSystemId',
        'mountTargetDomain'          => 'MountTargetDomain',
        'accessGroupName'            => 'AccessGroupName',
        'status'                     => 'Status',
        'dualStackMountTargetDomain' => 'DualStackMountTargetDomain',
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
        if (null !== $this->accessGroupName) {
            $res['AccessGroupName'] = $this->accessGroupName;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->dualStackMountTargetDomain) {
            $res['DualStackMountTargetDomain'] = $this->dualStackMountTargetDomain;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyMountTargetRequest
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
        if (isset($map['AccessGroupName'])) {
            $model->accessGroupName = $map['AccessGroupName'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['DualStackMountTargetDomain'])) {
            $model->dualStackMountTargetDomain = $map['DualStackMountTargetDomain'];
        }

        return $model;
    }
}
