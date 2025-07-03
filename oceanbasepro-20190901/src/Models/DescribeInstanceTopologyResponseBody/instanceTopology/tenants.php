<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology\tenants\tenantZones;

class tenants extends Model
{
    /**
     * @var string
     */
    public $primaryZoneDeployType;

    /**
     * @var float
     */
    public $tenantCpu;

    /**
     * @var string
     */
    public $tenantDeployType;

    /**
     * @var float
     */
    public $tenantDiskSize;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var float
     */
    public $tenantMemory;

    /**
     * @var string
     */
    public $tenantMode;

    /**
     * @var string
     */
    public $tenantName;

    /**
     * @var string
     */
    public $tenantStatus;

    /**
     * @var float
     */
    public $tenantUnitCpu;

    /**
     * @var float
     */
    public $tenantUnitMemory;

    /**
     * @var int
     */
    public $tenantUnitNum;

    /**
     * @var tenantZones[]
     */
    public $tenantZones;
    protected $_name = [
        'primaryZoneDeployType' => 'PrimaryZoneDeployType',
        'tenantCpu' => 'TenantCpu',
        'tenantDeployType' => 'TenantDeployType',
        'tenantDiskSize' => 'TenantDiskSize',
        'tenantId' => 'TenantId',
        'tenantMemory' => 'TenantMemory',
        'tenantMode' => 'TenantMode',
        'tenantName' => 'TenantName',
        'tenantStatus' => 'TenantStatus',
        'tenantUnitCpu' => 'TenantUnitCpu',
        'tenantUnitMemory' => 'TenantUnitMemory',
        'tenantUnitNum' => 'TenantUnitNum',
        'tenantZones' => 'TenantZones',
    ];

    public function validate()
    {
        if (\is_array($this->tenantZones)) {
            Model::validateArray($this->tenantZones);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->primaryZoneDeployType) {
            $res['PrimaryZoneDeployType'] = $this->primaryZoneDeployType;
        }

        if (null !== $this->tenantCpu) {
            $res['TenantCpu'] = $this->tenantCpu;
        }

        if (null !== $this->tenantDeployType) {
            $res['TenantDeployType'] = $this->tenantDeployType;
        }

        if (null !== $this->tenantDiskSize) {
            $res['TenantDiskSize'] = $this->tenantDiskSize;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->tenantMemory) {
            $res['TenantMemory'] = $this->tenantMemory;
        }

        if (null !== $this->tenantMode) {
            $res['TenantMode'] = $this->tenantMode;
        }

        if (null !== $this->tenantName) {
            $res['TenantName'] = $this->tenantName;
        }

        if (null !== $this->tenantStatus) {
            $res['TenantStatus'] = $this->tenantStatus;
        }

        if (null !== $this->tenantUnitCpu) {
            $res['TenantUnitCpu'] = $this->tenantUnitCpu;
        }

        if (null !== $this->tenantUnitMemory) {
            $res['TenantUnitMemory'] = $this->tenantUnitMemory;
        }

        if (null !== $this->tenantUnitNum) {
            $res['TenantUnitNum'] = $this->tenantUnitNum;
        }

        if (null !== $this->tenantZones) {
            if (\is_array($this->tenantZones)) {
                $res['TenantZones'] = [];
                $n1 = 0;
                foreach ($this->tenantZones as $item1) {
                    $res['TenantZones'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['PrimaryZoneDeployType'])) {
            $model->primaryZoneDeployType = $map['PrimaryZoneDeployType'];
        }

        if (isset($map['TenantCpu'])) {
            $model->tenantCpu = $map['TenantCpu'];
        }

        if (isset($map['TenantDeployType'])) {
            $model->tenantDeployType = $map['TenantDeployType'];
        }

        if (isset($map['TenantDiskSize'])) {
            $model->tenantDiskSize = $map['TenantDiskSize'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['TenantMemory'])) {
            $model->tenantMemory = $map['TenantMemory'];
        }

        if (isset($map['TenantMode'])) {
            $model->tenantMode = $map['TenantMode'];
        }

        if (isset($map['TenantName'])) {
            $model->tenantName = $map['TenantName'];
        }

        if (isset($map['TenantStatus'])) {
            $model->tenantStatus = $map['TenantStatus'];
        }

        if (isset($map['TenantUnitCpu'])) {
            $model->tenantUnitCpu = $map['TenantUnitCpu'];
        }

        if (isset($map['TenantUnitMemory'])) {
            $model->tenantUnitMemory = $map['TenantUnitMemory'];
        }

        if (isset($map['TenantUnitNum'])) {
            $model->tenantUnitNum = $map['TenantUnitNum'];
        }

        if (isset($map['TenantZones'])) {
            if (!empty($map['TenantZones'])) {
                $model->tenantZones = [];
                $n1 = 0;
                foreach ($map['TenantZones'] as $item1) {
                    $model->tenantZones[$n1] = tenantZones::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
