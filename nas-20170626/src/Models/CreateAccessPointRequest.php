<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class CreateAccessPointRequest extends Model
{
    /**
     * @description The name of the permission group.
     *
     * This parameter is required.
     * @example DEFAULT_VPC_GROUP_NAME
     *
     * @var string
     */
    public $accessGroup;

    /**
     * @description The name of the access point.
     *
     * @example test
     *
     * @var string
     */
    public $accessPointName;

    /**
     * @description Specifies whether to enable the RAM policy. Valid values:
     *
     *   true: The RAM policy is enabled.
     *   false (default): The RAM policy is disabled.
     *
     * >  After the RAM policy is enabled for access points, no RAM user is allowed to use access points to mount and access data by default. To use access points to mount and access data as a RAM user, you must grant the related access permissions to the RAM user. If the RAM policy is disabled, access points can be anonymously mounted. For more information about how to configure permissions on access points, see [Configure a policy for the access point](https://help.aliyun.com/document_detail/2545998.html).
     * @example false
     *
     * @var bool
     */
    public $enabledRam;

    /**
     * @description The ID of the file system.
     *
     * This parameter is required.
     * @example 31a8e4****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @description The ID of the owner group.
     *
     * This parameter is required if the RootDirectory directory does not exist.
     * @example 1
     *
     * @var int
     */
    public $ownerGroupId;

    /**
     * @description The owner ID.
     *
     * This parameter is required if the RootDirectory directory does not exist.
     * @example 1
     *
     * @var int
     */
    public $ownerUserId;

    /**
     * @description The Portable Operating System Interface for UNIX (POSIX) permission. Default value: 0777.
     *
     * This field takes effect only if you specify the OwnerUserId and OwnerGroupId parameters.
     * @example 0777
     *
     * @var string
     */
    public $permission;

    /**
     * @description The ID of the POSIX user group.
     *
     * @example 123
     *
     * @var int
     */
    public $posixGroupId;

    /**
     * @description The secondary user group. Separate multiple user group IDs with commas (,).
     *
     * @example 123,345
     *
     * @var string
     */
    public $posixSecondaryGroupIds;

    /**
     * @description The ID of the POSIX user.
     *
     * @example 123
     *
     * @var int
     */
    public $posixUserId;

    /**
     * @description The root directory of the access point. The default value is /. If the directory does not exist, you must also specify the OwnerUserId and OwnerGroupId parameters.
     *
     * @example /
     *
     * @var string
     */
    public $rootDirectory;

    /**
     * @description The VPC ID.
     *
     * This parameter is required.
     * @example vpc-2zesj9afh3y518k9o****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The vSwitch ID.
     *
     * This parameter is required.
     * @example vsw-2zevmwkwyztjuoffg****
     *
     * @var string
     */
    public $vswId;
    protected $_name = [
        'accessGroup'            => 'AccessGroup',
        'accessPointName'        => 'AccessPointName',
        'enabledRam'             => 'EnabledRam',
        'fileSystemId'           => 'FileSystemId',
        'ownerGroupId'           => 'OwnerGroupId',
        'ownerUserId'            => 'OwnerUserId',
        'permission'             => 'Permission',
        'posixGroupId'           => 'PosixGroupId',
        'posixSecondaryGroupIds' => 'PosixSecondaryGroupIds',
        'posixUserId'            => 'PosixUserId',
        'rootDirectory'          => 'RootDirectory',
        'vpcId'                  => 'VpcId',
        'vswId'                  => 'VswId',
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
        if (null !== $this->accessPointName) {
            $res['AccessPointName'] = $this->accessPointName;
        }
        if (null !== $this->enabledRam) {
            $res['EnabledRam'] = $this->enabledRam;
        }
        if (null !== $this->fileSystemId) {
            $res['FileSystemId'] = $this->fileSystemId;
        }
        if (null !== $this->ownerGroupId) {
            $res['OwnerGroupId'] = $this->ownerGroupId;
        }
        if (null !== $this->ownerUserId) {
            $res['OwnerUserId'] = $this->ownerUserId;
        }
        if (null !== $this->permission) {
            $res['Permission'] = $this->permission;
        }
        if (null !== $this->posixGroupId) {
            $res['PosixGroupId'] = $this->posixGroupId;
        }
        if (null !== $this->posixSecondaryGroupIds) {
            $res['PosixSecondaryGroupIds'] = $this->posixSecondaryGroupIds;
        }
        if (null !== $this->posixUserId) {
            $res['PosixUserId'] = $this->posixUserId;
        }
        if (null !== $this->rootDirectory) {
            $res['RootDirectory'] = $this->rootDirectory;
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
     * @return CreateAccessPointRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessGroup'])) {
            $model->accessGroup = $map['AccessGroup'];
        }
        if (isset($map['AccessPointName'])) {
            $model->accessPointName = $map['AccessPointName'];
        }
        if (isset($map['EnabledRam'])) {
            $model->enabledRam = $map['EnabledRam'];
        }
        if (isset($map['FileSystemId'])) {
            $model->fileSystemId = $map['FileSystemId'];
        }
        if (isset($map['OwnerGroupId'])) {
            $model->ownerGroupId = $map['OwnerGroupId'];
        }
        if (isset($map['OwnerUserId'])) {
            $model->ownerUserId = $map['OwnerUserId'];
        }
        if (isset($map['Permission'])) {
            $model->permission = $map['Permission'];
        }
        if (isset($map['PosixGroupId'])) {
            $model->posixGroupId = $map['PosixGroupId'];
        }
        if (isset($map['PosixSecondaryGroupIds'])) {
            $model->posixSecondaryGroupIds = $map['PosixSecondaryGroupIds'];
        }
        if (isset($map['PosixUserId'])) {
            $model->posixUserId = $map['PosixUserId'];
        }
        if (isset($map['RootDirectory'])) {
            $model->rootDirectory = $map['RootDirectory'];
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
