<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\Tea\Model;

class UpdateNodeGroupRequest extends Model
{
    /**
     * @description Whether file storage mounting is supported
     *
     * @example True
     *
     * @var bool
     */
    public $fileSystemMountEnabled;

    /**
     * @description The default image ID of the node group. If not set, it will not change.
     *
     * @example i1232142432432
     *
     * @var string
     */
    public $imageId;

    /**
     * @description Key pair name.
     *
     * @example test
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @description Login password for machines within the node group
     *
     * @example LoginPassword
     *
     * @var string
     */
    public $loginPassword;

    /**
     * @description Node group name
     *
     * @example test-update
     *
     * @var string
     */
    public $newNodeGroupName;

    /**
     * @description Node group ID
     *
     * @example i120021051733814190732
     *
     * @var string
     */
    public $nodeGroupId;

    /**
     * @description User-defined script
     *
     * @example #!/bin/bash
     * uptime
     * echo "aaaaaaa" >> /tmp/ttttt20250110141010.sh
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return UpdateNodeGroupRequest
     */
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
