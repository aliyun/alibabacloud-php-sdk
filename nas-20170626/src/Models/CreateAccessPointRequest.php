<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Dara\Model;

class CreateAccessPointRequest extends Model
{
    /**
     * @var string
     */
    public $accessGroup;

    /**
     * @var string
     */
    public $accessPointName;

    /**
     * @var bool
     */
    public $enabledRam;

    /**
     * @var string
     */
    public $fileSystemId;

    /**
     * @var int
     */
    public $ownerGroupId;

    /**
     * @var int
     */
    public $ownerUserId;

    /**
     * @var string
     */
    public $permission;

    /**
     * @var int
     */
    public $posixGroupId;

    /**
     * @var string
     */
    public $posixSecondaryGroupIds;

    /**
     * @var int
     */
    public $posixUserId;

    /**
     * @var string
     */
    public $rootDirectory;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @var string
     */
    public $vswId;
    protected $_name = [
        'accessGroup' => 'AccessGroup',
        'accessPointName' => 'AccessPointName',
        'enabledRam' => 'EnabledRam',
        'fileSystemId' => 'FileSystemId',
        'ownerGroupId' => 'OwnerGroupId',
        'ownerUserId' => 'OwnerUserId',
        'permission' => 'Permission',
        'posixGroupId' => 'PosixGroupId',
        'posixSecondaryGroupIds' => 'PosixSecondaryGroupIds',
        'posixUserId' => 'PosixUserId',
        'rootDirectory' => 'RootDirectory',
        'vpcId' => 'VpcId',
        'vswId' => 'VswId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
