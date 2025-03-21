<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListMachineNetworkInfoResponseBody;

use AlibabaCloud\Tea\Model;

class machineNetworkInfo extends Model
{
    /**
     * @description Cluster network
     *
     * @example vpc/acl
     *
     * @var string
     */
    public $clusterNet;

    /**
     * @description Whether jumbo frame capability is enabled
     *
     * @example true
     *
     * @var bool
     */
    public $enableJumboFrame;

    /**
     * @description Cluster ID
     *
     * @example B1
     *
     * @var string
     */
    public $hpnZone;

    /**
     * @description Whether it is in DPU mode
     *
     * @example true
     *
     * @var bool
     */
    public $isDpuMode;

    /**
     * @description Machine type
     *
     * @example efg1.nvga8n
     *
     * @var string
     */
    public $machineType;

    /**
     * @description Network architecture
     *
     * @example XX-7.0
     *
     * @var string
     */
    public $netArch;

    /**
     * @description 地域ID。
     *
     * @example cn-heyuan
     *
     * @var string
     */
    public $regionId;
    protected $_name = [
        'clusterNet' => 'ClusterNet',
        'enableJumboFrame' => 'EnableJumboFrame',
        'hpnZone' => 'HpnZone',
        'isDpuMode' => 'IsDpuMode',
        'machineType' => 'MachineType',
        'netArch' => 'NetArch',
        'regionId' => 'RegionId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterNet) {
            $res['ClusterNet'] = $this->clusterNet;
        }
        if (null !== $this->enableJumboFrame) {
            $res['EnableJumboFrame'] = $this->enableJumboFrame;
        }
        if (null !== $this->hpnZone) {
            $res['HpnZone'] = $this->hpnZone;
        }
        if (null !== $this->isDpuMode) {
            $res['IsDpuMode'] = $this->isDpuMode;
        }
        if (null !== $this->machineType) {
            $res['MachineType'] = $this->machineType;
        }
        if (null !== $this->netArch) {
            $res['NetArch'] = $this->netArch;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return machineNetworkInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterNet'])) {
            $model->clusterNet = $map['ClusterNet'];
        }
        if (isset($map['EnableJumboFrame'])) {
            $model->enableJumboFrame = $map['EnableJumboFrame'];
        }
        if (isset($map['HpnZone'])) {
            $model->hpnZone = $map['HpnZone'];
        }
        if (isset($map['IsDpuMode'])) {
            $model->isDpuMode = $map['IsDpuMode'];
        }
        if (isset($map['MachineType'])) {
            $model->machineType = $map['MachineType'];
        }
        if (isset($map['NetArch'])) {
            $model->netArch = $map['NetArch'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
