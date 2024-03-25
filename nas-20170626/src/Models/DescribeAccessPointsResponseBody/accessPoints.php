<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAccessPointsResponseBody;

use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAccessPointsResponseBody\accessPoints\posixUser;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAccessPointsResponseBody\accessPoints\rootPathPermission;
use AlibabaCloud\Tea\Model;

class accessPoints extends Model
{
    /**
     * @example acs:nas:cn-hangzhou:178321033379****:accesspoint/ap-ie15yd****
     *
     * @var string
     */
    public $ARN;

    /**
     * @example test
     *
     * @var string
     */
    public $accessGroup;

    /**
     * @example ap-ie15yd****
     *
     * @var string
     */
    public $accessPointId;

    /**
     * @example test
     *
     * @var string
     */
    public $accessPointName;

    /**
     * @example 1709619668276167
     *
     * @var string
     */
    public $createTime;

    /**
     * @example ap-ie15ydanoz.001014****-w****.cn-hangzhou.nas.aliyuncs.com
     *
     * @var string
     */
    public $domainName;

    /**
     * @example false
     *
     * @var bool
     */
    public $enabledRam;

    /**
     * @example 31a8e4****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @example 1709619668276167
     *
     * @var string
     */
    public $modifyTime;

    /**
     * @var posixUser
     */
    public $posixUser;

    /**
     * @example /
     *
     * @var string
     */
    public $rootPath;

    /**
     * @var rootPathPermission
     */
    public $rootPathPermission;

    /**
     * @example 2
     *
     * @var string
     */
    public $rootPathStatus;

    /**
     * @example Active
     *
     * @var string
     */
    public $status;

    /**
     * @example vsw-2zevmwkwyztjuoffg****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example vpc-2zesj9afh3y518k9o****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'ARN'                => 'ARN',
        'accessGroup'        => 'AccessGroup',
        'accessPointId'      => 'AccessPointId',
        'accessPointName'    => 'AccessPointName',
        'createTime'         => 'CreateTime',
        'domainName'         => 'DomainName',
        'enabledRam'         => 'EnabledRam',
        'fileSystemId'       => 'FileSystemId',
        'modifyTime'         => 'ModifyTime',
        'posixUser'          => 'PosixUser',
        'rootPath'           => 'RootPath',
        'rootPathPermission' => 'RootPathPermission',
        'rootPathStatus'     => 'RootPathStatus',
        'status'             => 'Status',
        'vSwitchId'          => 'VSwitchId',
        'vpcId'              => 'VpcId',
    ];

    public function validate()
    {
    }

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
     * @return accessPoints
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
