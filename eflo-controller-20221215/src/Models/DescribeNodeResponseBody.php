<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\DescribeNodeResponseBody\networks;
use AlibabaCloud\Tea\Model;

class DescribeNodeResponseBody extends Model
{
    /**
     * @description Cluster ID
     *
     * @example i116913051662373010974
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description Cluster name
     *
     * @example Standard_Cluster
     *
     * @var string
     */
    public $clusterName;

    /**
     * @description Creation time
     *
     * @example 2022-09-30T03:35:53Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Expiration time
     *
     * @example 2022-06-23T16:00:00Z
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description Hostname
     *
     * @example 31d38530-241e-11ed-bc63-acde48001122
     *
     * @var string
     */
    public $hostname;

    /**
     * @description Cluster number
     *
     * @example A1
     *
     * @var string
     */
    public $hpnZone;

    /**
     * @description Image ID
     *
     * @example i190297201634099844192
     *
     * @var string
     */
    public $imageId;

    /**
     * @description Image name
     *
     * @example Centos7.9_all_0811
     *
     * @var string
     */
    public $imageName;

    /**
     * @description Machine type
     *
     * @example efg1.nvga1
     *
     * @var string
     */
    public $machineType;

    /**
     * @description Network information
     *
     * @var networks[]
     */
    public $networks;

    /**
     * @description Node group ID
     *
     * @example ng-ec3c96ff0aa4c60d
     *
     * @var string
     */
    public $nodeGroupId;

    /**
     * @description Node group name
     *
     * @example emr-default
     *
     * @var string
     */
    public $nodeGroupName;

    /**
     * @description Node ID
     *
     * @example e01-cn-zvp2tgykr08
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description Node status
     *
     * @example Using
     *
     * @var string
     */
    public $operatingState;

    /**
     * @description Request ID
     *
     * @example AC4F0004-7BCE-52E0-891B-CAC7D64E3368
     *
     * @var string
     */
    public $requestId;

    /**
     * @description 资源组ID
     *
     * @example rg-acfmywpvugkh7kq
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description Unique machine identifier
     *
     * @example sag42ckf4jx
     *
     * @var string
     */
    public $sn;

    /**
     * @description Zone ID
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
        'expiredTime' => 'ExpiredTime',
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
        if (null !== $this->expiredTime) {
            $res['ExpiredTime'] = $this->expiredTime;
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
        if (isset($map['ExpiredTime'])) {
            $model->expiredTime = $map['ExpiredTime'];
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
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
