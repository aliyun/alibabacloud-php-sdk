<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Dara\Model;

class UpdateNodeGroupRequest extends Model
{
    /**
     * @var bool
     */
    public $fileSystemMountEnabled;

    /**
     * @var string
     */
    public $imageId;

    /**
     * @var string
     */
    public $keyPairName;

    /**
     * @var string
     */
    public $loginPassword;

    /**
     * @var string
     */
    public $newNodeGroupName;

    /**
     * @var string
     */
    public $nodeGroupId;

    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'fileSystemMountEnabled' => 'FileSystemMountEnabled',
        'imageId' => 'ImageId',
        'keyPairName' => 'KeyPairName',
        'loginPassword' => 'LoginPassword',
        'newNodeGroupName' => 'NewNodeGroupName',
        'nodeGroupId' => 'NodeGroupId',
        'userData' => 'UserData',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileSystemMountEnabled) {
            $res['FileSystemMountEnabled'] = $this->fileSystemMountEnabled;
        }

        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }

        if (null !== $this->keyPairName) {
            $res['KeyPairName'] = $this->keyPairName;
        }

        if (null !== $this->loginPassword) {
            $res['LoginPassword'] = $this->loginPassword;
        }

        if (null !== $this->newNodeGroupName) {
            $res['NewNodeGroupName'] = $this->newNodeGroupName;
        }

        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
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
        if (isset($map['FileSystemMountEnabled'])) {
            $model->fileSystemMountEnabled = $map['FileSystemMountEnabled'];
        }

        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }

        if (isset($map['KeyPairName'])) {
            $model->keyPairName = $map['KeyPairName'];
        }

        if (isset($map['LoginPassword'])) {
            $model->loginPassword = $map['LoginPassword'];
        }

        if (isset($map['NewNodeGroupName'])) {
            $model->newNodeGroupName = $map['NewNodeGroupName'];
        }

        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
