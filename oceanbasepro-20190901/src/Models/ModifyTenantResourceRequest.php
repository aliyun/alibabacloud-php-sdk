<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class ModifyTenantResourceRequest extends Model
{
    /**
     * @description The information about the CPU resources of the tenant.
     *
     * @example 2
     *
     * @var int
     */
    public $cpu;

    /**
     * @description The ID of the OceanBase cluster.
     *
     * @example ob317v4uif****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The size of the log disk allocated to the tenant, in GB.
     *
     * @example 128
     *
     * @var int
     */
    public $logDisk;

    /**
     * @description The memory size of the tenant, in GB.
     *
     * @example 2
     *
     * @var int
     */
    public $memory;

    /**
     * @description Specifies to create a read-only zone. Separate the names of multiple zones with commas (,).
     *
     * @example cn-shanghai-g-ro,cn-shanghai-h-ro
     *
     * @var string
     */
    public $readOnlyZoneList;

    /**
     * @description The ID of the tenant.
     *
     * @example ob2mr3oae0****
     *
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'cpu'              => 'Cpu',
        'instanceId'       => 'InstanceId',
        'logDisk'          => 'LogDisk',
        'memory'           => 'Memory',
        'readOnlyZoneList' => 'ReadOnlyZoneList',
        'tenantId'         => 'TenantId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->logDisk) {
            $res['LogDisk'] = $this->logDisk;
        }
        if (null !== $this->memory) {
            $res['Memory'] = $this->memory;
        }
        if (null !== $this->readOnlyZoneList) {
            $res['ReadOnlyZoneList'] = $this->readOnlyZoneList;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyTenantResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['LogDisk'])) {
            $model->logDisk = $map['LogDisk'];
        }
        if (isset($map['Memory'])) {
            $model->memory = $map['Memory'];
        }
        if (isset($map['ReadOnlyZoneList'])) {
            $model->readOnlyZoneList = $map['ReadOnlyZoneList'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        return $model;
    }
}
