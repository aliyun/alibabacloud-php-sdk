<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListMachineNetworkInfoResponseBody;

use AlibabaCloud\Dara\Model;

class machineNetworkInfo extends Model
{
    /**
     * @var string
     */
    public $clusterNet;

    /**
     * @var bool
     */
    public $enableJumboFrame;

    /**
     * @var string
     */
    public $hpnZone;

    /**
     * @var bool
     */
    public $isDpuMode;

    /**
     * @var string
     */
    public $machineType;

    /**
     * @var string
     */
    public $netArch;

    /**
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

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
