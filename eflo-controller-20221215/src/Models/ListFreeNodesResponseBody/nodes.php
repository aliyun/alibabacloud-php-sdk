<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListFreeNodesResponseBody;

use AlibabaCloud\Tea\Model;

class nodes extends Model
{
    /**
     * @example 1652321554
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 1673107200
     *
     * @var string
     */
    public $expiredTime;

    /**
     * @var string
     */
    public $hpnZone;

    /**
     * @example efg1.nvga1
     *
     * @var string
     */
    public $machineType;

    /**
     * @example e01-cn-7pp2x193801
     *
     * @var string
     */
    public $nodeId;

    /**
     * @example sn_pozkHBgicd
     *
     * @var string
     */
    public $sn;

    /**
     * @example cn-hangzhou-j
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'createTime'  => 'CreateTime',
        'expiredTime' => 'ExpiredTime',
        'hpnZone'     => 'HpnZone',
        'machineType' => 'MachineType',
        'nodeId'      => 'NodeId',
        'sn'          => 'Sn',
        'zoneId'      => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (isset($map['HpnZone'])) {
            $model->hpnZone = $map['HpnZone'];
        }
        if (isset($map['MachineType'])) {
            $model->machineType = $map['MachineType'];
        }
        if (isset($map['NodeId'])) {
            $model->nodeId = $map['NodeId'];
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
