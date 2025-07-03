<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;

class ModifyTenantResourceRequest extends Model
{
    /**
     * @var int
     */
    public $cpu;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $iops;

    /**
     * @var int
     */
    public $logDisk;

    /**
     * @var int
     */
    public $memory;

    /**
     * @var string
     */
    public $readOnlyZoneList;

    /**
     * @var string
     */
    public $tenantId;
    protected $_name = [
        'cpu' => 'Cpu',
        'instanceId' => 'InstanceId',
        'iops' => 'Iops',
        'logDisk' => 'LogDisk',
        'memory' => 'Memory',
        'readOnlyZoneList' => 'ReadOnlyZoneList',
        'tenantId' => 'TenantId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cpu) {
            $res['Cpu'] = $this->cpu;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->iops) {
            $res['Iops'] = $this->iops;
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cpu'])) {
            $model->cpu = $map['Cpu'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['Iops'])) {
            $model->iops = $map['Iops'];
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
