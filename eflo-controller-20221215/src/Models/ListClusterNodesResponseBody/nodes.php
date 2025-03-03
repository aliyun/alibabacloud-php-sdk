<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListClusterNodesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListClusterNodesResponseBody\nodes\networks;

class nodes extends Model
{
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var string
     */
    public $expiredTime;
    /**
     * @var string
     */
    public $hostname;
    /**
     * @var string
     */
    public $hpnZone;
    /**
     * @var string
     */
    public $imageId;
    /**
     * @var string
     */
    public $machineType;
    /**
     * @var networks[]
     */
    public $networks;
    /**
     * @var string
     */
    public $nodeGroupId;
    /**
     * @var string
     */
    public $nodeGroupName;
    /**
     * @var string
     */
    public $nodeId;
    /**
     * @var string
     */
    public $operatingState;
    /**
     * @var string
     */
    public $sn;
    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'createTime'     => 'CreateTime',
        'expiredTime'    => 'ExpiredTime',
        'hostname'       => 'Hostname',
        'hpnZone'        => 'HpnZone',
        'imageId'        => 'ImageId',
        'machineType'    => 'MachineType',
        'networks'       => 'Networks',
        'nodeGroupId'    => 'NodeGroupId',
        'nodeGroupName'  => 'NodeGroupName',
        'nodeId'         => 'NodeId',
        'operatingState' => 'OperatingState',
        'sn'             => 'Sn',
        'zoneId'         => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->networks)) {
            Model::validateArray($this->networks);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->networks)) {
                $res['Networks'] = [];
                $n1              = 0;
                foreach ($this->networks as $item1) {
                    $res['Networks'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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

        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
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
                $n1              = 0;
                foreach ($map['Networks'] as $item1) {
                    $model->networks[$n1++] = networks::fromMap($item1);
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

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
