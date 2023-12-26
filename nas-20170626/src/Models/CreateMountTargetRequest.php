<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class CreateMountTargetRequest extends Model
{
    /**
     * @description The name of the permission group.
     *
     * The default permission group for virtual private clouds (VPCs) is named DEFAULT_VPC_GROUP_NAME.
     * @example vpc-test
     *
     * @var string
     */
    public $accessGroupName;

    /**
     * @description Specifies whether to perform a dry run to check for existing mount targets. This parameter is valid only for CPFS file systems.
     *
     * If you set this parameter to true, the system checks whether the request parameters are valid and whether the requested resources are available. In this case, no mount target is created and no fee is incurred.
     *
     *   true: performs a dry run but does not create a mount target. In the dry run, the system checks the request format, service limits, available CPFS resources, and whether the required parameters are specified. If the request fails the dry run, an error message is returned. If the request passes the dry run, the HTTP status code `200` is returned. No value is returned for the `MountTargetDomain` parameter.
     *   false (default): sends the request. If the request passes the dry run, a mount target is created.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description Specifies whether to create an IPv6 domain name for the mount target.
     *
     * Valid values:
     *
     *   true: An IPv6 domain name is created for the mount target.
     *   false (default): No IPv6 domain name is created for the mount target.
     *
     * > Only Extreme NAS file systems that reside in the Chinese mainland support IPv6. If you want to create an IPv6 domain name for the mount target, you must enable IPv6 for the file system.
     * @example true
     *
     * @var bool
     */
    public $enableIpv6;

    /**
     * @description The ID of the file system.
     *
     *   Sample ID of a General-purpose NAS file system: 31a8e4\*\*\*\*.
     *   The IDs of Extreme NAS file systems must start with `extreme-`, for example, extreme-0015\*\*\*\*.
     *   The IDs of Cloud Parallel File Storage (CPFS) file systems must start with `cpfs-`, for example, cpfs-125487\*\*\*\*.
     *
     * > CPFS file systems are available only on the China site (aliyun.com).
     * @example 174494****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The network type of the mount target. Valid value: **Vpc**.
     *
     * @example Vpc
     *
     * @var string
     */
    public $networkType;

    /**
     * @description The ID of the security group.
     *
     * @example sg-bp1fg655nh68xyz9****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The ID of the vSwitch.
     *
     * This parameter is valid and required if the mount target resides in a VPC. Example: If you set the NetworkType parameter to VPC, you must specify the VSwitchId parameter.
     * @example vsw-2zevmwkwyztjuoffg****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the VPC.
     *
     * This parameter is valid and required if the mount target resides in a VPC. Example: If you set the NetworkType parameter to VPC, you must specify the VpcId parameter.
     * @example vpc-2zesj9afh3y518k9o****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'accessGroupName' => 'AccessGroupName',
        'dryRun'          => 'DryRun',
        'enableIpv6'      => 'EnableIpv6',
        'fileSystemId'    => 'FileSystemId',
        'networkType'     => 'NetworkType',
        'securityGroupId' => 'SecurityGroupId',
        'vSwitchId'       => 'VSwitchId',
        'vpcId'           => 'VpcId',
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
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->enableIpv6) {
            $res['EnableIpv6'] = $this->enableIpv6;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['AccessGroupName'])) {
            $model->accessGroupName = $map['AccessGroupName'];
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['EnableIpv6'])) {
            $model->enableIpv6 = $map['EnableIpv6'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
