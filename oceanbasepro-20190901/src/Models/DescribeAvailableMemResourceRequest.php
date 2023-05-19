<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class DescribeAvailableMemResourceRequest extends Model
{
    /**
     * @description The available memory size.
     *
     * @example 14
     *
     * @var int
     */
    public $cpuNum;

    /**
     * @description The ID of the region.
     *
     * @example ob317v4uif****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the tenant.
     *
     * @example ob2mr3oae0****
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description The number of resource units in the tenant.
     *
     * @example 2
     *
     * @var int
     */
    public $unitNum;
    protected $_name = [
        'cpuNum'     => 'CpuNum',
        'instanceId' => 'InstanceId',
        'tenantId'   => 'TenantId',
        'unitNum'    => 'UnitNum',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return DescribeAvailableMemResourceRequest
     */
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
