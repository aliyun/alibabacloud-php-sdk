<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListClusterNodesResponseBody;

use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListClusterNodesResponseBody\nodes\networks;
use AlibabaCloud\Tea\Model;

class nodes extends Model
{
    /**
     * @description Creation time
     *
     * @example 1642472468000
     *
     * @var string
     */
    public $createTime;

    /**
     * @description Machine expiration time
     *
     * @example 1762185600000
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @description Hostname
     *
     * @example 72432f80-273e-11ed-b57a-acde48001122
     *
     * @var string
     */
    public $hostname;

    /**
     * @description Hpn Zone
     *
     * @example A1
     *
     * @var string
     */
    public $hpnZone;

    /**
     * @description System image ID
     *
     * @example i190297201669099844192
     *
     * @var string
     */
    public $imageId;

    /**
     * @description Machine type
     *
     * @example cn-wulanchabu-b11
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
     * @example ng-e9b74f4d450cf18d
     *
     * @var string
     */
    public $nodeGroupId;

    /**
     * @description Node group name
     *
     * @example emr_master
     *
     * @var string
     */
    public $nodeGroupName;

    /**
     * @description Node ID
     *
     * @example e01-cn-2r42tmj4z02
     *
     * @var string
     */
    public $nodeId;

    /**
     * @description Node status
     *
     * @example Extending
     *
     * @var string
     */
    public $operatingState;

    /**
     * @description Machine SN
     *
     * @example sn_tOuUk
     *
     * @var string
     */
    public $sn;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $vpcId;

    /**
     * @description Zone ID
     *
     * @example cn-hangzhou-b
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'createTime' => 'CreateTime',
        'expiredTime' => 'ExpiredTime',
        'hostname' => 'Hostname',
        'hpnZone' => 'HpnZone',
        'imageId' => 'ImageId',
        'machineType' => 'MachineType',
        'networks' => 'Networks',
        'nodeGroupId' => 'NodeGroupId',
        'nodeGroupName' => 'NodeGroupName',
        'nodeId' => 'NodeId',
        'operatingState' => 'OperatingState',
        'sn' => 'Sn',
        'vSwitchId' => 'VSwitchId',
        'vpcId' => 'VpcId',
        'zoneId' => 'ZoneId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
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
