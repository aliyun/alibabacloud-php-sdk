<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class ModifyMountTargetRequest extends Model
{
    /**
     * @description The name of the permission group that is attached to the mount target.
     *
     * @example classic-test
     *
     * @var string
     */
    public $accessGroupName;

    /**
     * @description The dual-stack (IPv4 and IPv6) domain name of the mount target.
     *
     * >  Only Extreme NAS file systems that reside in the Chinese mainland support IPv6.
     * @example 174494b666-x****.dualstack.cn-hangzhou.nas.aliyuncs.com
     *
     * @var string
     */
    public $dualStackMountTargetDomain;

    /**
     * @description The ID of the file system.
     *
     *   Sample ID of a General-purpose NAS file system: `31a8e4****`.
     *   The IDs of Extreme NAS file systems must start with `extreme-`, for example, `extreme-0015****`.
     *
     * @example 1ca404****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The IPv4 domain name of the mount target.
     *
     * @example 1ca404a666-w****.cn-hangzhou.nas.aliyuncs.com
     *
     * @var string
     */
    public $mountTargetDomain;

    /**
     * @description The status of the mount target.
     *
     * Valid values:
     *
     *   Active: The mount target is available.
     *   Inactive: The mount target is unavailable.
     *
     * @example Inactive
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'accessGroupName'            => 'AccessGroupName',
        'dualStackMountTargetDomain' => 'DualStackMountTargetDomain',
        'fileSystemId'               => 'FileSystemId',
        'mountTargetDomain'          => 'MountTargetDomain',
        'status'                     => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessGroupName) {
            $res['AccessGroupName'] = $this->accessGroupName;
        }
        if (null !== $this->dualStackMountTargetDomain) {
            $res['DualStackMountTargetDomain'] = $this->dualStackMountTargetDomain;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->mountTargetDomain) {
            $res['MountTargetDomain'] = $this->mountTargetDomain;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (isset($map['AccessGroupName'])) {
            $model->accessGroupName = $map['AccessGroupName'];
        }
        if (isset($map['DualStackMountTargetDomain'])) {
            $model->dualStackMountTargetDomain = $map['DualStackMountTargetDomain'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['MountTargetDomain'])) {
            $model->mountTargetDomain = $map['MountTargetDomain'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
