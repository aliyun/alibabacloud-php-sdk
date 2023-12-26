<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeMountTargetsResponseBody\mountTargets;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeMountTargetsResponseBody\mountTargets\mountTarget\clientMasterNodes;
use AlibabaCloud\Tea\Model;

class mountTarget extends Model
{
    /**
     * @description The name of the permission group that is attached to the mount target.
     *
     * @example DEFAULT_VPC_GROUP_NAME
     *
     * @var string
     */
    public $accessGroup;

    /**
     * @description The information about client management nodes.
     *
     * @var clientMasterNodes
     */
    public $clientMasterNodes;

    /**
     * @description The dual-stack (IPv4 and IPv6) domain name of the mount target.
     *
     * @example 174494b666-x****.dualstack.cn-hangzhou.nas.aliyuncs.com
     *
     * @var string
     */
    public $dualStackMountTargetDomain;

    /**
     * @description The type of the mount target.
     *
     *   IPv4: an IPv4 mount target
     *   DualStack: a dual-stack mount target
     *
     * @example IPv4
     *
     * @var string
     */
    public $IPVersion;

    /**
     * @description The IPv4 domain name of the mount target.
     *
     * @example 1ca404a666-w****.cn-hangzhou.nas.aliyuncs.com
     *
     * @var string
     */
    public $mountTargetDomain;

    /**
     * @description The network type. Valid value: **Vpc**.
     *
     * @example Vpc
     *
     * @var string
     */
    public $networkType;

    /**
     * @description The status of the mount target.
     *
     * Valid values:
     *
     *   Active: The mount target is available.
     *   Inactive: The mount target is unavailable.
     *   Pending: The mount target is being created or modified.
     *   Deleting: The mount target is being deleted.
     *   Hibernating: The mount target is being hibernated.
     *   Hibernated: The mount target is hibernated.
     *
     * > You can mount a file system only when the mount target of the file system is in the Active state.
     * @example Active
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * @example vpc-2zesj9afh3y518k9o****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-2zevmwkwyztjuoffg****
     *
     * @var string
     */
    public $vswId;
    protected $_name = [
        'accessGroup'                => 'AccessGroup',
        'clientMasterNodes'          => 'ClientMasterNodes',
        'dualStackMountTargetDomain' => 'DualStackMountTargetDomain',
        'IPVersion'                  => 'IPVersion',
        'mountTargetDomain'          => 'MountTargetDomain',
        'networkType'                => 'NetworkType',
        'status'                     => 'Status',
        'vpcId'                      => 'VpcId',
        'vswId'                      => 'VswId',
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
        if (null !== $this->clientMasterNodes) {
            $res['ClientMasterNodes'] = null !== $this->clientMasterNodes ? $this->clientMasterNodes->toMap() : null;
        }
        if (null !== $this->dualStackMountTargetDomain) {
            $res['DualStackMountTargetDomain'] = $this->dualStackMountTargetDomain;
        }
        if (null !== $this->IPVersion) {
            $res['IPVersion'] = $this->IPVersion;
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
     * @return mountTarget
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessGroup'])) {
            $model->accessGroup = $map['AccessGroup'];
        }
        if (isset($map['ClientMasterNodes'])) {
            $model->clientMasterNodes = clientMasterNodes::fromMap($map['ClientMasterNodes']);
        }
        if (isset($map['DualStackMountTargetDomain'])) {
            $model->dualStackMountTargetDomain = $map['DualStackMountTargetDomain'];
        }
        if (isset($map['IPVersion'])) {
            $model->IPVersion = $map['IPVersion'];
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
