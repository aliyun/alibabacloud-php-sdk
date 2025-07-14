<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListClusterNodesResponseBody;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListClusterNodesResponseBody\nodes\networks;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListClusterNodesResponseBody\nodes\tags;
use AlibabaCloud\Tea\Model;

class nodes extends Model
{
    /**
     * @description The commodity code.
     *
     * @example bcccluster
     *
     * @var string
     */
    public $commodityCode;

    /**
     * @description The creation time.
     *
     * @example 1642472468000
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The time when the node expires.
     *
     * @example 1762185600000
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
     * @example 72432f80-273e-11ed-b57a-acde48001122
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
     * @description The system image ID.
     *
     * @example i190297201669099844192
     *
     * @var string
     */
    public $imageId;

    /**
     * @description The image name.
     *
     * @example Alinux3_x86_AMD_R_Host_D3_E3_24.13.00_UEFI_N_250121
     *
     * @var string
     */
    public $imageName;

    /**
     * @description The node type.
     *
     * @example cn-wulanchabu-b11
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
     * @example ng-e9b74f4d450cf18d
     *
     * @var string
     */
    public $nodeGroupId;

    /**
     * @description The node group name.
     *
     * @example emr_master
     *
     * @var string
     */
    public $nodeGroupName;

    /**
     * @description The node ID.
     *
     * @example e01-cn-2r42tmj4z02
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
     * @example Extending
     *
     * @var string
     */
    public $operatingState;

    /**
     * @description The serial number of the node.
     *
     * @example sn_tOuUk
     *
     * @var string
     */
    public $sn;

    /**
     * @description The tags.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The job ID.
     *
     * @example i28ddkdkkdkdd
     *
     * @var string
     */
    public $taskId;

    /**
     * @description The vSwitch ID.
     *
     * @example vsw-bp1mxqhw8o20tgv3xk47h
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @description The VPC ID.
     *
     * @example vpc-0jltf9vinjz3if3lltdy7
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description The zone ID.
     *
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'commodityCode' => 'CommodityCode',
        'createTime' => 'CreateTime',
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
        'sn' => 'Sn',
        'tags' => 'Tags',
        'taskId' => 'TaskId',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
        'zoneId' => 'ZoneId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->commodityCode) {
            $res['CommodityCode'] = $this->commodityCode;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
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
        if (null !== $this->sn) {
            $res['Sn'] = $this->sn;
        }
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return nodes
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommodityCode'])) {
            $model->commodityCode = $map['CommodityCode'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
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
        if (isset($map['Sn'])) {
            $model->sn = $map['Sn'];
        }
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
