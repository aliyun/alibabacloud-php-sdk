<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class ModifyTenantPrimaryZoneRequest extends Model
{
    /**
     * @description The primary zone of the tenant.
     * It is one of the zones in which the cluster is deployed.
     * @example ob317v4uif****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description ```
     * http(s)://[Endpoint]/?Action=ModifyTenantPrimaryZone
     * &TenantId=ob2mr3oae0****
     * &InstanceId=ob317v4uif****
     * ```
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $masterIntranetAddressZone;

    /**
     * @description The ID of the vSwitch.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $primaryZone;

    /**
     * @example obe-4tw51gp7****
     *
     * @var string
     */
    public $tenantEndpointId;

    /**
     * @description The return result of the request.
     *
     * @example ob2mr3oae0****
     *
     * @var string
     */
    public $tenantId;

    /**
     * @description The request ID.
     *
     * @example vsw-xxx
     *
     * @var string
     */
    public $userVSwitchId;
    protected $_name = [
        'instanceId'                => 'InstanceId',
        'masterIntranetAddressZone' => 'MasterIntranetAddressZone',
        'primaryZone'               => 'PrimaryZone',
        'tenantEndpointId'          => 'TenantEndpointId',
        'tenantId'                  => 'TenantId',
        'userVSwitchId'             => 'UserVSwitchId',
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
        if (null !== $this->masterIntranetAddressZone) {
            $res['MasterIntranetAddressZone'] = $this->masterIntranetAddressZone;
        }
        if (null !== $this->primaryZone) {
            $res['PrimaryZone'] = $this->primaryZone;
        }
        if (null !== $this->tenantEndpointId) {
            $res['TenantEndpointId'] = $this->tenantEndpointId;
        }
        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }
        if (null !== $this->userVSwitchId) {
            $res['UserVSwitchId'] = $this->userVSwitchId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyTenantPrimaryZoneRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['MasterIntranetAddressZone'])) {
            $model->masterIntranetAddressZone = $map['MasterIntranetAddressZone'];
        }
        if (isset($map['PrimaryZone'])) {
            $model->primaryZone = $map['PrimaryZone'];
        }
        if (isset($map['TenantEndpointId'])) {
            $model->tenantEndpointId = $map['TenantEndpointId'];
        }
        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }
        if (isset($map['UserVSwitchId'])) {
            $model->userVSwitchId = $map['UserVSwitchId'];
        }

        return $model;
    }
}
