<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeNodeResponseBody\disks;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeNodeResponseBody\networks;
use AlibabaCloud\Tea\Model;

class DescribeNodeResponseBody extends Model
{
    /**
     * @description The cluster ID.
     *
     * @example i116913051662373010974
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The cluster name.
     *
     * @example Standard_Cluster
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description The creation time.
     *
     * @example 2022-09-30T03:35:53Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The disks.
     *
     * @var disks[]
     */
    public $disks;

    /**
     * @description The expiration time.
     *
     * @example 2022-06-23T16:00:00Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description Indicates whether file storage mounting is supported.
     *
     * @example False
     *
     * @var bool
     */
    public $fileSystemMountEnabled;

    /**
     * @description The hostname.
     *
     * @example 31d38530-241e-11ed-bc63-acde48001122
     *
     * @var string
     */
    public $hostname;

    /**
     * @description The cluster number.
     *
     * @example A1
     *
     * @var string
     */
    public $hpnZone;

    /**
     * @description The image ID.
     *
     * @example i190297201634099844192
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The image name.
     *
     * @example Centos7.9_all_0811
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The instance type.
     *
     * @example efg1.nvga1
     *
     * @var string
     */
    public $machineType;

    /**
     * @description The network information.
     *
     * @var networks[]
     */
    public $networks;

    /**
     * @description The node group ID.
     *
     * @example ng-ec3c96ff0aa4c60d
     *
     * @var string
     */
    public $nodeGroupId;

    /**
     * @description The node group name.
     *
     * @example emr-default
     *
     * @var string
     */
    public $nodeGroupName;

    /**
     * @description The node ID.
     *
     * @example e01-cn-zvp2tgykr08
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description The node status.
     *
     * Valid values:
     *
     *   Extending
     *   UnusedNodeStopped
     *   UnusedNodeStopping
     *   Unused
     *   Using
     *   ReleaseLocking
     *   Operating
     *   Cutting
     *   ClusterNodeStopped
     *   UnusedNodeRecovering
     *   ClusterNodeStopping
     *   ClusterNodeRecovering
     *   Replacing
     *
     * @example Using
     *
     * @var string
     */
    public $operatingState;

    /**
     * @description The request ID.
     *
     * @example AC4F0004-7BCE-52E0-891B-CAC7D64E3368
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The resource group ID.
     *
     * @example rg-acfmywpvugkh7kq
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The serial number of the node.
     *
     * @example sag42ckf4jx
     *
     * @var string
     */
    public $sn;

    /**
     * @description The custom script.
     *
     * @example #!/bin/bash
     * uptime
     * echo "aaaaaaa" >> /tmp/ttttt20250110141010.sh
     *
     * @var string
     */
    public $userData;

    /**
     * @description The zone ID.
     *
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'clusterId' => 'ClusterId',
        'clusterName' => 'ClusterName',
        'createTime' => 'CreateTime',
        'disks' => 'Disks',
        'expiredTime' => 'ExpiredTime',
        'fileSystemMountEnabled' => 'FileSystemMountEnabled',
        'hostname' => 'Hostname',
        'hpnZone' => 'HpnZone',
        'imageId' => 'ImageId',
        'imageName' => 'ImageName',
        'machineType' => 'MachineType',
        'networks' => 'Networks',
        'nodeGroupId' => 'NodeGroupId',
        'nodeGroupName' => 'NodeGroupName',
        'nodeId' => 'NodeId',
        'operatingState' => 'OperatingState',
        'requestId' => 'RequestId',
        'resourceGroupId' => 'ResourceGroupId',
        'sn' => 'Sn',
        'userData' => 'UserData',
        'zoneId' => 'ZoneId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->clusterName) {
            $res['ClusterName'] = $this->clusterName;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->disks) {
            $res['Disks'] = [];
            if (null !== $this->disks && \is_array($this->disks)) {
                $n = 0;
                foreach ($this->disks as $item) {
                    $res['Disks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
        }
        if (null !== $this->fileSystemMountEnabled) {
            $res['FileSystemMountEnabled'] = $this->fileSystemMountEnabled;
        }
        if (null !== $this->hostname) {
            $res['Hostname'] = $this->hostname;
        }
        if (null !== $this->hpnZone) {
            $res['HpnZone'] = $this->hpnZone;
        }
        if (null !== $this->imageId) {
            $res['ImageId'] = $this->imageId;
        }
        if (null !== $this->imageName) {
            $res['ImageName'] = $this->imageName;
        }
        if (null !== $this->machineType) {
            $res['MachineType'] = $this->machineType;
        }
        if (null !== $this->networks) {
            $res['Networks'] = [];
            if (null !== $this->networks && \is_array($this->networks)) {
                $n = 0;
                foreach ($this->networks as $item) {
                    $res['Networks'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->nodeGroupId) {
            $res['NodeGroupId'] = $this->nodeGroupId;
        }
        if (null !== $this->nodeGroupName) {
            $res['NodeGroupName'] = $this->nodeGroupName;
        }
        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
        }
        if (null !== $this->operatingState) {
            $res['OperatingState'] = $this->operatingState;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->sn) {
            $res['Sn'] = $this->sn;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeNodeResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['ClusterName'])) {
            $model->clusterName = $map['ClusterName'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Disks'])) {
            if (!empty($map['Disks'])) {
                $model->disks = [];
                $n = 0;
                foreach ($map['Disks'] as $item) {
                    $model->disks[$n++] = null !== $item ? disks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
        }
        if (isset($map['FileSystemMountEnabled'])) {
            $model->fileSystemMountEnabled = $map['FileSystemMountEnabled'];
        }
        if (isset($map['Hostname'])) {
            $model->hostname = $map['Hostname'];
        }
        if (isset($map['HpnZone'])) {
            $model->hpnZone = $map['HpnZone'];
        }
        if (isset($map['ImageId'])) {
            $model->imageId = $map['ImageId'];
        }
        if (isset($map['ImageName'])) {
            $model->imageName = $map['ImageName'];
        }
        if (isset($map['MachineType'])) {
            $model->machineType = $map['MachineType'];
        }
        if (isset($map['Networks'])) {
            if (!empty($map['Networks'])) {
                $model->networks = [];
                $n = 0;
                foreach ($map['Networks'] as $item) {
                    $model->networks[$n++] = null !== $item ? networks::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['NodeGroupId'])) {
            $model->nodeGroupId = $map['NodeGroupId'];
        }
        if (isset($map['NodeGroupName'])) {
            $model->nodeGroupName = $map['NodeGroupName'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
        }
        if (isset($map['OperatingState'])) {
            $model->operatingState = $map['OperatingState'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['Sn'])) {
            $model->sn = $map['Sn'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
