<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20180412\Models\ListFileSystemWithMountTargetsResponseBody\fileSystemList\fileSystems\mountTargetList;

use AlibabaCloud\Tea\Model;

class mountTargets extends Model
{
    /**
     * @description Specifies whether to use the user default permission group.
     *
     * Valid values:
     *
     *   true: ueses the default permission group. If you use the default permission group, access from all IP addresses are allowed. The default permission group and the permission rules in the default permission group cannot be deleted.
     *   false: does not use the default permission group.
     *
     * @example DEFAULT_VPC_GROUP_NAME
     *
     * @var string
     */
    public $accessGroup;

    /**
     * @description The domain where the mount target resides.
     *
     * @example 088b****-lj2.cn-hangzhou.nas.aliyuncs.com
     *
     * @var string
     */
    public $mountTargetDomain;

    /**
     * @description The network type of the cluster. Valid values:
     *
     *   vpc: Virtual Private Cloud (VPC)
     *   classic: the classic network
     *
     * @example vpc
     *
     * @var string
     */
    public $networkType;

    /**
     * @description The status of the mount target. Valid values:
     *
     *   Active: The mount target is available.
     *   Inactive: The mount target is unavailable.
     *   Pending: The mount target is being created or modified.
     *   Deleting: The mount target is being deleted.
     *
     * @example Active
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the VPC.
     *
     * @example vpc-8vbvb34rtyh6xb3zrehs1****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-8vb34rtyh6xb3zrehs1****
     *
     * @var string
     */
    public $vswId;
    protected $_name = [
        'accessGroup'       => 'AccessGroup',
        'mountTargetDomain' => 'MountTargetDomain',
        'networkType'       => 'NetworkType',
        'status'            => 'Status',
        'vpcId'             => 'VpcId',
        'vswId'             => 'VswId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessGroup) {
            $res['AccessGroup'] = $this->accessGroup;
        }
        if (null !== $this->mountTargetDomain) {
            $res['MountTargetDomain'] = $this->mountTargetDomain;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->vswId) {
            $res['VswId'] = $this->vswId;
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
        if (isset($map['AccessGroup'])) {
            $model->accessGroup = $map['AccessGroup'];
        }
        if (isset($map['MountTargetDomain'])) {
            $model->mountTargetDomain = $map['MountTargetDomain'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['VswId'])) {
            $model->vswId = $map['VswId'];
        }

        return $model;
    }
}
