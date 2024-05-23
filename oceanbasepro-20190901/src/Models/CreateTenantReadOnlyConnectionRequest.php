<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class CreateTenantReadOnlyConnectionRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example ob317v4uif****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description This parameter is required.
     *
     * @example ob2mr3oae0****
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description This parameter is required.
     *
     * @example vsw-bp11k1aypnzu1l3whi****
     *
     * @var string
     */
    public $vSwitchId;

    /**
     * @example vpc-bp1d2q3mhg9i23ofi****
     *
     * @var string
     */
    public $vpcId;

    /**
     * @description This parameter is required.
     *
     * @example cn-hangzhou-i
     *
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'tenantId'   => 'TenantId',
        'vSwitchId'  => 'VSwitchId',
        'vpcId'      => 'VpcId',
        'zoneId'     => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->vSwitchId) {
            $res['VSwitchId'] = $this->vSwitchId;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateTenantReadOnlyConnectionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['VSwitchId'])) {
            $model->vSwitchId = $map['VSwitchId'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
