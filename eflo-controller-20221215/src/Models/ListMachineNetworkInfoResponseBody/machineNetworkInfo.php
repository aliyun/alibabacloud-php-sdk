<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eflocontroller\V20221215\Models\ListMachineNetworkInfoResponseBody;

use AlibabaCloud\Tea\Model;

class machineNetworkInfo extends Model
{
    /**
     * @description Network of cluster
     *
     * @example vpc/acl
     *
     * @var string
     */
    public $clusterNet;

    /**
     * @description Specifies whether to enable the Jumbo Frames feature for the instance. Valid values:
     *
     *   true: The Jumbo Frame feature is enabled for the instance.
     *   false: The Jumbo Frame feature is disabled for the instance.
     *
     * Take note of the following items:
     *
     *   The instance must be in the Running (`Running`) or Stopped (`Stopped`) state.
     *   The instance must reside in a VPC.
     *   After the Jumbo Frames feature is enabled, the MTU value of the instance is set to 8500. After the Jumbo Frames feature is disabled, the MTU value of the instance is set to 1500. You can enable the Jumbo Frames feature only for specific instance types. For more information, see [Jumbo Frames](https://help.aliyun.com/document_detail/200512.html).
     *
     * @example true
     *
     * @var bool
     */
    public $enableJumboFrame;

    /**
     * @description HPN zone
     *
     * @example B1
     *
     * @var string
     */
    public $hpnZone;

    /**
     * @description Specifies whether dpu machine.
     *
     * @example true
     *
     * @var bool
     */
    public $isDpuMode;

    /**
     * @description The type of machine.
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
     * @description The ID of the region in which the application is located.
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
