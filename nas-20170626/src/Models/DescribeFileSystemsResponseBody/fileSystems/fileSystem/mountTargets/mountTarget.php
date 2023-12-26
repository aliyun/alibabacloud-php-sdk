<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponseBody\fileSystems\fileSystem\mountTargets;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponseBody\fileSystems\fileSystem\mountTargets\mountTarget\clientMasterNodes;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeFileSystemsResponseBody\fileSystems\fileSystem\mountTargets\mountTarget\tags;
use AlibabaCloud\Tea\Model;

class mountTarget extends Model
{
    /**
     * @description The name of the permission group that is attached to the mount target.
     *
     * @example test-001
     *
     * @var string
     */
    public $accessGroupName;

    /**
     * @description The information about client management nodes.
     *
     * This parameter is available only for CPFS file systems.
     * @var clientMasterNodes
     */
    public $clientMasterNodes;

    /**
     * @description The dual-stack (IPv4 and IPv6) domain name of the mount target.
     *
     * > Only Extreme NAS file systems that reside in the Chinese mainland support IPv6.
     * @example 174494b666-x****.dualstack.cn-hangzhou.nas.aliyuncs.com
     *
     * @var string
     */
    public $dualStackMountTargetDomain;

    /**
     * @description The domain name of the mount target.
     *
     * @example 109c042666-w****.cn-hangzhou.nas.aliyuncs.com
     *
     * @var string
     */
    public $mountTargetDomain;

    /**
     * @description The network type. Valid value: vpc.
     *
     * @example vpc
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
     * @example active
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags that are attached to the mount target.
     *
     * @var tags
     */
    public $tags;

    /**
     * @description The ID of the VPC.
     *
     * @example vpc-bp1sevsgtqvk5gxbl****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The ID of the vSwitch.
     *
     * @example vsw-bp1omfzsszekkvaxn****
     *
     * @var string
     */
    public $vswId;
    protected $_name = [
        'accessGroupName'            => 'AccessGroupName',
        'clientMasterNodes'          => 'ClientMasterNodes',
        'dualStackMountTargetDomain' => 'DualStackMountTargetDomain',
        'mountTargetDomain'          => 'MountTargetDomain',
        'networkType'                => 'NetworkType',
        'status'                     => 'Status',
        'tags'                       => 'Tags',
        'vpcId'                      => 'VpcId',
        'vswId'                      => 'VswId',
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
        if (null !== $this->clientMasterNodes) {
            $res['ClientMasterNodes'] = null !== $this->clientMasterNodes ? $this->clientMasterNodes->toMap() : null;
        }
        if (null !== $this->dualStackMountTargetDomain) {
            $res['DualStackMountTargetDomain'] = $this->dualStackMountTargetDomain;
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
        if (null !== $this->tags) {
            $res['Tags'] = null !== $this->tags ? $this->tags->toMap() : null;
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
        if (isset($map['AccessGroupName'])) {
            $model->accessGroupName = $map['AccessGroupName'];
        }
        if (isset($map['ClientMasterNodes'])) {
            $model->clientMasterNodes = clientMasterNodes::fromMap($map['ClientMasterNodes']);
        }
        if (isset($map['DualStackMountTargetDomain'])) {
            $model->dualStackMountTargetDomain = $map['DualStackMountTargetDomain'];
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
        if (isset($map['Tags'])) {
            $model->tags = tags::fromMap($map['Tags']);
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
