<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateNodeGroupRequest;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateNodeGroupRequest\nodeGroup\systemDisk;
use AlibabaCloud\Tea\Model;

class nodeGroup extends Model
{
    /**
     * @description Availability Zone
     *
     * This parameter is required.
     *
     * @example cn-wulanchabu-b
     *
     * @var string
     */
    public $az;

    /**
     * @description Whether file storage mounting is supported
     *
     * @example true
     *
     * @var bool
     */
    public $fileSystemMountEnabled;

    /**
     * @description Image ID.
     *
     * This parameter is required.
     *
     * @example i191887641687336652616
     *
     * @var string
     */
    public $imageId;

    /**
     * @description Key pair name.
     *
     * @example test-keypair
     *
     * @var string
     */
    public $keyPairName;

    /**
     * @description Password
     *
     * @example test-LoginPassword
     *
     * @var string
     */
    public $loginPassword;

    /**
     * @description Machine type
     *
     * This parameter is required.
     *
     * @example mock-machine-type3
     *
     * @var string
     */
    public $machineType;

    /**
     * @description Node group description
     *
     * @example describe for node group
     *
     * @var string
     */
    public $nodeGroupDescription;

    /**
     * @description Node group name
     *
     * This parameter is required.
     *
     * @example PAI-LINGJUN
     *
     * @var string
     */
    public $nodeGroupName;

    /**
     * @description Details of the node system disk configuration.
     *
     * @var systemDisk
     */
    public $systemDisk;

    /**
     * @description User-defined data
     *
     * @example #!/bin/bash
     * uptime
     * echo "aaaaaaa" >> /tmp/ttttt20250110141010.sh
     *
     * @var string
     */
    public $userData;

    /**
     * @description Whether to enable gpu virtualization or not
     *
     * @example false
     *
     * @var bool
     */
    public $virtualGpuEnabled;
    protected $_name = [
        'az' => 'Az',
        'fileSystemMountEnabled' => 'FileSystemMountEnabled',
        'imageId' => 'ImageId',
        'keyPairName' => 'KeyPairName',
        'loginPassword' => 'LoginPassword',
        'machineType' => 'MachineType',
        'nodeGroupDescription' => 'NodeGroupDescription',
        'nodeGroupName' => 'NodeGroupName',
        'systemDisk' => 'SystemDisk',
        'userData' => 'UserData',
        'virtualGpuEnabled' => 'VirtualGpuEnabled',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->az) {
            $res['Az'] = $this->az;
        }
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
        if (null !== $this->machineType) {
            $res['MachineType'] = $this->machineType;
        }
        if (null !== $this->nodeGroupDescription) {
            $res['NodeGroupDescription'] = $this->nodeGroupDescription;
        }
        if (null !== $this->nodeGroupName) {
            $res['NodeGroupName'] = $this->nodeGroupName;
        }
        if (null !== $this->systemDisk) {
            $res['SystemDisk'] = null !== $this->systemDisk ? $this->systemDisk->toMap() : null;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->virtualGpuEnabled) {
            $res['VirtualGpuEnabled'] = $this->virtualGpuEnabled;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Az'])) {
            $model->az = $map['Az'];
        }
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
        if (isset($map['MachineType'])) {
            $model->machineType = $map['MachineType'];
        }
        if (isset($map['NodeGroupDescription'])) {
            $model->nodeGroupDescription = $map['NodeGroupDescription'];
        }
        if (isset($map['NodeGroupName'])) {
            $model->nodeGroupName = $map['NodeGroupName'];
        }
        if (isset($map['SystemDisk'])) {
            $model->systemDisk = systemDisk::fromMap($map['SystemDisk']);
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['VirtualGpuEnabled'])) {
            $model->virtualGpuEnabled = $map['VirtualGpuEnabled'];
        }

        return $model;
    }
}
