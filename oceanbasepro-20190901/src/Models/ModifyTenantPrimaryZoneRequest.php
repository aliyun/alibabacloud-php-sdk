<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Tea\Model;

class ModifyTenantPrimaryZoneRequest extends Model
{
    /**
     * @var string
     */
    public $instanceId;

    /**
     * @var string
     */
    public $masterIntranetAddressZone;

    /**
     * @var string
     */
    public $modifyType;

    /**
     * @var string
     */
    public $primaryZone;

    /**
     * @var string
     */
    public $primaryZoneDeployType;

    /**
     * @var string
     */
    public $tenantId;

    /**
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
