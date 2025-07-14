<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest\nodeGroups\nodes;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\CreateClusterRequest\nodeGroups\systemDisk;
use AlibabaCloud\Tea\Model;

class nodeGroups extends Model
{
    /**
     * @description Whether to support file system mounting
     *
     * @example true
     *
     * @var bool
     */
    public $fileSystemMountEnabled;

    /**
     * @description System image ID
     *
     * @example i190297201634099844192
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
     * @description Login password
     *
     * @example Password
     *
     * @var string
     */
    public $loginPassword;

    /**
     * @description Machine type
     *
     * @example efg1.nvga1
     *
     * @var string
     */
    public $machineType;

    /**
     * @description Node group description
     *
     * @example Node group description
     *
     * @var string
     */
    public $nodeGroupDescription;

    /**
     * @description Node group name
     *
     * @example emr-default
     *
     * @var string
     */
    public $nodeGroupName;

    /**
     * @description Node list
     *
     * @var nodes[]
     */
    public $nodes;

    /**
     * @description System disk information
     *
     * @var systemDisk
     */
    public $systemDisk;

    /**
     * @description Instance custom data. It needs to be encoded in Base64, and the original data should not exceed 16 KB.
     *
     * @example ZWNobyBoZWxsbyBlY3Mh
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

    /**
     * @description Zone ID
     *
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'fileSystemMountEnabled' => 'FileSystemMountEnabled',
        'imageId' => 'ImageId',
        'keyPairName' => 'KeyPairName',
        'loginPassword' => 'LoginPassword',
        'machineType' => 'MachineType',
        'nodeGroupDescription' => 'NodeGroupDescription',
        'nodeGroupName' => 'NodeGroupName',
        'nodes' => 'Nodes',
        'systemDisk' => 'SystemDisk',
        'userData' => 'UserData',
        'virtualGpuEnabled' => 'VirtualGpuEnabled',
        'zoneId' => 'ZoneId',
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
        if (null !== $this->machineType) {
            $res['MachineType'] = $this->machineType;
        }
        if (null !== $this->nodeGroupDescription) {
            $res['NodeGroupDescription'] = $this->nodeGroupDescription;
        }
        if (null !== $this->nodeGroupName) {
            $res['NodeGroupName'] = $this->nodeGroupName;
        }
        if (null !== $this->nodes) {
            $res['Nodes'] = [];
            if (null !== $this->nodes && \is_array($this->nodes)) {
                $n = 0;
                foreach ($this->nodes as $item) {
                    $res['Nodes'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodeGroups
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
        if (isset($map['MachineType'])) {
            $model->machineType = $map['MachineType'];
        }
        if (isset($map['NodeGroupDescription'])) {
            $model->nodeGroupDescription = $map['NodeGroupDescription'];
        }
        if (isset($map['NodeGroupName'])) {
            $model->nodeGroupName = $map['NodeGroupName'];
        }
        if (isset($map['Nodes'])) {
            if (!empty($map['Nodes'])) {
                $model->nodes = [];
                $n = 0;
                foreach ($map['Nodes'] as $item) {
                    $model->nodes[$n++] = null !== $item ? nodes::fromMap($item) : $item;
                }
            }
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
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
