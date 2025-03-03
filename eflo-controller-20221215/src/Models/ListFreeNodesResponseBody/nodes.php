<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListFreeNodesResponseBody;

use AlibabaCloud\Dara\Model;

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
    public $hpnZone;
    /**
     * @var string
     */
    public $machineType;
    /**
     * @var string
     */
    public $nodeId;
    /**
     * @var string
     */
    public $resourceGroupId;
    /**
     * @var string
     */
    public $sn;
    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'createTime'      => 'CreateTime',
        'expiredTime'     => 'ExpiredTime',
        'hpnZone'         => 'HpnZone',
        'machineType'     => 'MachineType',
        'nodeId'          => 'NodeId',
        'resourceGroupId' => 'ResourceGroupId',
        'sn'              => 'Sn',
        'zoneId'          => 'ZoneId',
    ];

    public function validate()
    {
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

        if (null !== $this->hpnZone) {
            $res['HpnZone'] = $this->hpnZone;
        }

        if (null !== $this->machineType) {
            $res['MachineType'] = $this->machineType;
        }

        if (null !== $this->nodeId) {
            $res['NodeId'] = $this->nodeId;
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

        if (isset($map['HpnZone'])) {
            $model->hpnZone = $map['HpnZone'];
        }

        if (isset($map['MachineType'])) {
            $model->machineType = $map['MachineType'];
        }

        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
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
