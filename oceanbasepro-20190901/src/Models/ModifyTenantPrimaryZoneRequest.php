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
     * @description The switching mode.
     *
     * @example AllLink
     *
     * @var string
     */
    public $modifyType;

    /**
     * @description The ID of the vSwitch.
     *
     * @example cn-hangzhou-h
     *
     * @var string
     */
    public $primaryZone;

    /**
     * @description Example 1
     *
     * @example RANDOM
     *
     * @var string
     */
    public $primaryZoneDeployType;

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
        'modifyType'                => 'ModifyType',
        'primaryZone'               => 'PrimaryZone',
        'primaryZoneDeployType'     => 'PrimaryZoneDeployType',
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
        if (null !== $this->modifyType) {
            $res['ModifyType'] = $this->modifyType;
        }
        if (null !== $this->primaryZone) {
            $res['PrimaryZone'] = $this->primaryZone;
        }
        if (null !== $this->primaryZoneDeployType) {
            $res['PrimaryZoneDeployType'] = $this->primaryZoneDeployType;
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
        if (isset($map['ModifyType'])) {
            $model->modifyType = $map['ModifyType'];
        }
        if (isset($map['PrimaryZone'])) {
            $model->primaryZone = $map['PrimaryZone'];
        }
        if (isset($map['PrimaryZoneDeployType'])) {
            $model->primaryZoneDeployType = $map['PrimaryZoneDeployType'];
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
