<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ens\V20171110\Models\DescribeFileSystemsResponseBody\fileSystems;

use AlibabaCloud\Tea\Model;

class mountTargets extends Model
{
    /**
     * @description The path of the mount target.
     *
     * @example *.*.*.*:/${FileSystemName}/{MountTargetName}
     *
     * @var string
     */
    public $mountTargetDomain;

    /**
     * @description The name of the mount target.
     *
     * @example target1
     *
     * @var string
     */
    public $mountTargetName;

    /**
     * @description The ID of the network.
     *
     * @example n-****
     *
     * @var string
     */
    public $netWorkId;

    /**
     * @description The status of the mount target. Valid values:
     *
     *   active: The mount target is available.
     *   inactive: The mount target is unavailable.
     *   pending: The task is running.
     *   deleting: The mount target is being deleted.
     *
     * @example active
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'mountTargetDomain' => 'MountTargetDomain',
        'mountTargetName'   => 'MountTargetName',
        'netWorkId'         => 'NetWorkId',
        'status'            => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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

    /**
     * @param array $map
     *
     * @return mountTargets
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
