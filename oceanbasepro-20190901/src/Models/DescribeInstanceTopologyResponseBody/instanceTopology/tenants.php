<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology;

use AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeInstanceTopologyResponseBody\instanceTopology\tenants\tenantZones;
use AlibabaCloud\Tea\Model;

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
     * @var int
     */
    public $tenantUnitNum;

    /**
     * @var tenantZones[]
     */
    public $tenantZones;
    protected $_name = [
        'primaryZoneDeployType' => 'PrimaryZoneDeployType',
        'tenantCpu'             => 'TenantCpu',
        'tenantDeployType'      => 'TenantDeployType',
        'tenantId'              => 'TenantId',
        'tenantMemory'          => 'TenantMemory',
        'tenantMode'            => 'TenantMode',
        'tenantName'            => 'TenantName',
        'tenantStatus'          => 'TenantStatus',
        'tenantUnitNum'         => 'TenantUnitNum',
        'tenantZones'           => 'TenantZones',
    ];

    public function validate()
    {
    }

    public function toMap()
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
        if (null !== $this->tenantUnitNum) {
            $res['TenantUnitNum'] = $this->tenantUnitNum;
        }
        if (null !== $this->tenantZones) {
            $res['TenantZones'] = [];
            if (null !== $this->tenantZones && \is_array($this->tenantZones)) {
                $n = 0;
                foreach ($this->tenantZones as $item) {
                    $res['TenantZones'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return tenants
     */
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
        if (isset($map['TenantUnitNum'])) {
            $model->tenantUnitNum = $map['TenantUnitNum'];
        }
        if (isset($map['TenantZones'])) {
            if (!empty($map['TenantZones'])) {
                $model->tenantZones = [];
                $n                  = 0;
                foreach ($map['TenantZones'] as $item) {
                    $model->tenantZones[$n++] = null !== $item ? tenantZones::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
