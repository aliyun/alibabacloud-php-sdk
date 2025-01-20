<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Dara\Model;

class CreateDirRequest extends Model
{
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
     * @var bool
     */
    public $recursion;
    /**
     * @var string
     */
    public $rootDirectory;
    protected $_name = [
        'fileSystemId'  => 'FileSystemId',
        'ownerGroupId'  => 'OwnerGroupId',
        'ownerUserId'   => 'OwnerUserId',
        'permission'    => 'Permission',
        'recursion'     => 'Recursion',
        'rootDirectory' => 'RootDirectory',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->recursion) {
            $res['Recursion'] = $this->recursion;
        }

        if (null !== $this->rootDirectory) {
            $res['RootDirectory'] = $this->rootDirectory;
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

        if (isset($map['Recursion'])) {
            $model->recursion = $map['Recursion'];
        }

        if (isset($map['RootDirectory'])) {
            $model->rootDirectory = $map['RootDirectory'];
        }

        return $model;
    }
}
