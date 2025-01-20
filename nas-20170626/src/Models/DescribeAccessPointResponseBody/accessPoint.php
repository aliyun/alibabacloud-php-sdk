<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAccessPointResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAccessPointResponseBody\accessPoint\posixUser;
use AlibabaCloud\SDK\NAS\V20170626\Models\DescribeAccessPointResponseBody\accessPoint\rootPathPermission;

class accessPoint extends Model
{
    /**
     * @var string
     */
    public $ARN;
    /**
     * @var string
     */
    public $accessGroup;
    /**
     * @var string
     */
    public $accessPointId;
    /**
     * @var string
     */
    public $accessPointName;
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $domainName;
    /**
     * @var bool
     */
    public $enabledRam;
    /**
     * @var string
     */
    public $fileSystemId;
    /**
     * @var string
     */
    public $modifyTime;
    /**
     * @var posixUser
     */
    public $posixUser;
    /**
     * @var string
     */
    public $regionId;
    /**
     * @var string
     */
    public $rootPath;
    /**
     * @var rootPathPermission
     */
    public $rootPathPermission;
    /**
     * @var string
     */
    public $rootPathStatus;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $vSwitchId;
    /**
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
        'regionId'           => 'RegionId',
        'rootPath'           => 'RootPath',
        'rootPathPermission' => 'RootPathPermission',
        'rootPathStatus'     => 'RootPathStatus',
        'status'             => 'Status',
        'vSwitchId'          => 'VSwitchId',
        'vpcId'              => 'VpcId',
    ];

    public function validate()
    {
        if (null !== $this->posixUser) {
            $this->posixUser->validate();
        }
        if (null !== $this->rootPathPermission) {
            $this->rootPathPermission->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['PosixUser'] = null !== $this->posixUser ? $this->posixUser->toArray($noStream) : $this->posixUser;
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->rootPath) {
            $res['RootPath'] = $this->rootPath;
        }

        if (null !== $this->rootPathPermission) {
            $res['RootPathPermission'] = null !== $this->rootPathPermission ? $this->rootPathPermission->toArray($noStream) : $this->rootPathPermission;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
