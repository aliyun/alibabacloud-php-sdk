<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAccessPointResponseBody;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAccessPointResponseBody\accessPoint\posixUser;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAccessPointResponseBody\accessPoint\rootPathPermission;
use AlibabaCloud\Tea\Model;

class accessPoint extends Model
{
    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the access point.
     *
     * @example acs:nas:cn-hangzhou:178321033379****:accesspoint/ap-ie15yd****
     *
     * @var string
     */
    public $ARN;

    /**
     * @description The name of the permission group.
     *
     * @example test
     *
     * @var string
     */
    public $accessGroup;

    /**
     * @description The ID of the access point.
     *
     * @example ap-ie15yd****
     *
     * @var string
     */
    public $accessPointId;

    /**
     * @description The name of the access point.
     *
     * @example test
     *
     * @var string
     */
    public $accessPointName;

    /**
     * @description The time when the access point was created.
     *
     * @example 1709619668276167
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The domain name of the access point.
     *
     * @example ap-ie15ydanoz.001014****-w****.cn-hangzhou.nas.aliyuncs.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @description Indicates whether the RAM policy is enabled.
     *
     * @example false
     *
     * @var bool
     */
    public $enabledRam;

    /**
     * @description The ID of the file system.
     *
     * @example 31a8e4****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The time when the access point was modified.
     *
     * @example 1709619668276167
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @description The POSIX user.
     *
     * @var posixUser
     */
    public $posixUser;

    /**
     * @description The region ID.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The root directory.
     *
     * @example /
     *
     * @var string
     */
    public $rootPath;

    /**
     * @description The permissions to create the root directory.
     *
     * @var rootPathPermission
     */
    public $rootPathPermission;

    /**
     * @description The status of the root directory.
     *
     * Valid values:
     *
     *   0: The rootpath status is unknown.
     *   1: The rootpath does not exist and may be deleted.
     *   2: The rootpath is normal.
     *
     * @example 2
     *
     * @var string
     */
    public $rootPathStatus;

    /**
     * @description The status of the access point.
     *
     * Valid values:
     *
     *   Active: The access point is available.
     *   Inactive: The access point is unavailable.
     *   Pending: The access point is being created.
     *   Deleting: The access point is being deleted.
     *
     * @example Active
     *
     * @var string
     */
    public $status;

    /**
     * @description The vSwitch ID.
     *
     * @example vsw-2zevmwkwyztjuoffg****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The ID of the virtual private cloud (VPC).
     *
     * You must select the VPC of the Elastic Compute Service (ECS) instance on which you want to mount the file system.
     *
     * @example vpc-2zesj9afh3y518k9o****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'ARN' => 'ARN',
        'accessGroup' => 'AccessGroup',
        'accessPointId' => 'AccessPointId',
        'accessPointName' => 'AccessPointName',
        'createTime' => 'CreateTime',
        'domainName' => 'DomainName',
        'enabledRam' => 'EnabledRam',
        'fileSystemId' => 'FileSystemId',
        'modifyTime' => 'ModifyTime',
        'posixUser' => 'PosixUser',
        'regionId' => 'RegionId',
        'rootPath' => 'RootPath',
        'rootPathPermission' => 'RootPathPermission',
        'rootPathStatus' => 'RootPathStatus',
        'status' => 'Status',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ARN) {
            $res['ARN'] = $this->ARN;
        }
        if (null !== $this->accessGroup) {
            $res['AccessGroup'] = $this->accessGroup;
        }
        if (null !== $this->accessPointId) {
            $res['AccessPointId'] = $this->accessPointId;
        }
        if (null !== $this->accessPointName) {
            $res['AccessPointName'] = $this->accessPointName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->domainName) {
            $res['DomainName'] = $this->domainName;
        }
        if (null !== $this->enabledRam) {
            $res['EnabledRam'] = $this->enabledRam;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->modifyTime) {
            $res['ModifyTime'] = $this->modifyTime;
        }
        if (null !== $this->posixUser) {
            $res['PosixUser'] = null !== $this->posixUser ? $this->posixUser->toMap() : null;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->rootPath) {
            $res['RootPath'] = $this->rootPath;
        }
        if (null !== $this->rootPathPermission) {
            $res['RootPathPermission'] = null !== $this->rootPathPermission ? $this->rootPathPermission->toMap() : null;
        }
        if (null !== $this->rootPathStatus) {
            $res['RootPathStatus'] = $this->rootPathStatus;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
     * @return accessPoint
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ARN'])) {
            $model->ARN = $map['ARN'];
        }
        if (isset($map['AccessGroup'])) {
            $model->accessGroup = $map['AccessGroup'];
        }
        if (isset($map['AccessPointId'])) {
            $model->accessPointId = $map['AccessPointId'];
        }
        if (isset($map['AccessPointName'])) {
            $model->accessPointName = $map['AccessPointName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['DomainName'])) {
            $model->domainName = $map['DomainName'];
        }
        if (isset($map['EnabledRam'])) {
            $model->enabledRam = $map['EnabledRam'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['ModifyTime'])) {
            $model->modifyTime = $map['ModifyTime'];
        }
        if (isset($map['PosixUser'])) {
            $model->posixUser = posixUser::fromMap($map['PosixUser']);
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['RootPath'])) {
            $model->rootPath = $map['RootPath'];
        }
        if (isset($map['RootPathPermission'])) {
            $model->rootPathPermission = rootPathPermission::fromMap($map['RootPathPermission']);
        }
        if (isset($map['RootPathStatus'])) {
            $model->rootPathStatus = $map['RootPathStatus'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
