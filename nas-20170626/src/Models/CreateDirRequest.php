<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class CreateDirRequest extends Model
{
    /**
     * @example 31a8e4****
     *
     * @var string
     */
    public $fileSystemId;

    /**
     * @example 123
     *
     * @var int
     */
    public $ownerGroupId;

    /**
     * @example 1
     *
     * @var int
     */
    public $ownerUserId;

    /**
     * @example 0755
     *
     * @var string
     */
    public $permission;

    /**
     * @example true
     *
     * @var bool
     */
    public $recursion;

    /**
     * @example test
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CreateDirRequest
     */
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
