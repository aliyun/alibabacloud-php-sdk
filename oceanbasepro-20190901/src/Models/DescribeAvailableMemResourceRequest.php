<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;

class DescribeAvailableMemResourceRequest extends Model
{
    /**
     * @var int
     */
    public $cpuNum;

    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var int
     */
    public $unitNum;
    protected $_name = [
        'cpuNum' => 'CpuNum',
        'instanceId' => 'InstanceId',
        'tenantId' => 'TenantId',
        'unitNum' => 'UnitNum',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cpuNum) {
            $res['CpuNum'] = $this->cpuNum;
        }

        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->unitNum) {
            $res['UnitNum'] = $this->unitNum;
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
        if (isset($map['CpuNum'])) {
            $model->cpuNum = $map['CpuNum'];
        }

        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['UnitNum'])) {
            $model->unitNum = $map['UnitNum'];
        }

        return $model;
    }
}
