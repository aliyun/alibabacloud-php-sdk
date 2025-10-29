<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAIDBClusterAttributeResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Polardb\V20170801\Models\DescribeAIDBClusterAttributeResponseBody\DBNodes\childVolumes;

class DBNodes extends Model
{
    /**
     * @var childVolumes[]
     */
    public $childVolumes;

    /**
     * @var string
     */
    public $cpuCores;

    /**
     * @var string
     */
    public $DBNodeClass;

    /**
     * @var string
     */
    public $DBNodeDescription;

    /**
     * @var string
     */
    public $DBNodeId;

    /**
     * @var string
     */
    public $DBNodeStatus;

    /**
     * @var string
     */
    public $GPU;

    /**
     * @var string
     */
    public $linkIP;

    /**
     * @var string
     */
    public $memorySize;

    /**
     * @var string
     */
    public $publicIp;

    /**
     * @var string
     */
    public $VNodeId;

    /**
     * @var string
     */
    public $VPCId;

    /**
     * @var string
     */
    public $vSwitchId;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'childVolumes' => 'ChildVolumes',
        'cpuCores' => 'CpuCores',
        'DBNodeClass' => 'DBNodeClass',
        'DBNodeDescription' => 'DBNodeDescription',
        'DBNodeId' => 'DBNodeId',
        'DBNodeStatus' => 'DBNodeStatus',
        'GPU' => 'GPU',
        'linkIP' => 'LinkIP',
        'memorySize' => 'MemorySize',
        'publicIp' => 'PublicIp',
        'VNodeId' => 'VNodeId',
        'VPCId' => 'VPCId',
        'vSwitchId' => 'VSwitchId',
        'zoneId' => 'ZoneId',
    ];

    public function validate()
    {
        if (\is_array($this->childVolumes)) {
            Model::validateArray($this->childVolumes);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->childVolumes) {
            if (\is_array($this->childVolumes)) {
                $res['ChildVolumes'] = [];
                $n1 = 0;
                foreach ($this->childVolumes as $item1) {
                    $res['ChildVolumes'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->cpuCores) {
            $res['CpuCores'] = $this->cpuCores;
        }

        if (null !== $this->DBNodeClass) {
            $res['DBNodeClass'] = $this->DBNodeClass;
        }

        if (null !== $this->DBNodeDescription) {
            $res['DBNodeDescription'] = $this->DBNodeDescription;
        }

        if (null !== $this->DBNodeId) {
            $res['DBNodeId'] = $this->DBNodeId;
        }

        if (null !== $this->DBNodeStatus) {
            $res['DBNodeStatus'] = $this->DBNodeStatus;
        }

        if (null !== $this->GPU) {
            $res['GPU'] = $this->GPU;
        }

        if (null !== $this->linkIP) {
            $res['LinkIP'] = $this->linkIP;
        }

        if (null !== $this->memorySize) {
            $res['MemorySize'] = $this->memorySize;
        }

        if (null !== $this->publicIp) {
            $res['PublicIp'] = $this->publicIp;
        }

        if (null !== $this->VNodeId) {
            $res['VNodeId'] = $this->VNodeId;
        }

        if (null !== $this->VPCId) {
            $res['VPCId'] = $this->VPCId;
        }

        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
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
        if (isset($map['ChildVolumes'])) {
            if (!empty($map['ChildVolumes'])) {
                $model->childVolumes = [];
                $n1 = 0;
                foreach ($map['ChildVolumes'] as $item1) {
                    $model->childVolumes[$n1] = childVolumes::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['CpuCores'])) {
            $model->cpuCores = $map['CpuCores'];
        }

        if (isset($map['DBNodeClass'])) {
            $model->DBNodeClass = $map['DBNodeClass'];
        }

        if (isset($map['DBNodeDescription'])) {
            $model->DBNodeDescription = $map['DBNodeDescription'];
        }

        if (isset($map['DBNodeId'])) {
            $model->DBNodeId = $map['DBNodeId'];
        }

        if (isset($map['DBNodeStatus'])) {
            $model->DBNodeStatus = $map['DBNodeStatus'];
        }

        if (isset($map['GPU'])) {
            $model->GPU = $map['GPU'];
        }

        if (isset($map['LinkIP'])) {
            $model->linkIP = $map['LinkIP'];
        }

        if (isset($map['MemorySize'])) {
            $model->memorySize = $map['MemorySize'];
        }

        if (isset($map['PublicIp'])) {
            $model->publicIp = $map['PublicIp'];
        }

        if (isset($map['VNodeId'])) {
            $model->VNodeId = $map['VNodeId'];
        }

        if (isset($map['VPCId'])) {
            $model->VPCId = $map['VPCId'];
        }

        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }

        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
