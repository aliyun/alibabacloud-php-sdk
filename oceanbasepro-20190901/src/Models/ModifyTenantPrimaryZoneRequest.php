<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models;

use AlibabaCloud\Dara\Model;

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
    public $primaryZone;

    /**
     * @var string
     */
    public $tenantEndpointDirectId;

    /**
     * @var string
     */
    public $tenantEndpointId;

    /**
     * @var string
     */
    public $tenantId;

    /**
     * @var string
     */
    public $userDirectVSwitchId;

    /**
     * @var string
     */
    public $userVSwitchId;

    /**
     * @var string
     */
    public $userVpcOwnerId;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'instanceId' => 'InstanceId',
        'masterIntranetAddressZone' => 'MasterIntranetAddressZone',
        'primaryZone' => 'PrimaryZone',
        'tenantEndpointDirectId' => 'TenantEndpointDirectId',
        'tenantEndpointId' => 'TenantEndpointId',
        'tenantId' => 'TenantId',
        'userDirectVSwitchId' => 'UserDirectVSwitchId',
        'userVSwitchId' => 'UserVSwitchId',
        'userVpcOwnerId' => 'UserVpcOwnerId',
        'vpcId' => 'VpcId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

        if (null !== $this->tenantEndpointDirectId) {
            $res['TenantEndpointDirectId'] = $this->tenantEndpointDirectId;
        }

        if (null !== $this->tenantEndpointId) {
            $res['TenantEndpointId'] = $this->tenantEndpointId;
        }

        if (null !== $this->tenantId) {
            $res['TenantId'] = $this->tenantId;
        }

        if (null !== $this->userDirectVSwitchId) {
            $res['UserDirectVSwitchId'] = $this->userDirectVSwitchId;
        }

        if (null !== $this->userVSwitchId) {
            $res['UserVSwitchId'] = $this->userVSwitchId;
        }

        if (null !== $this->userVpcOwnerId) {
            $res['UserVpcOwnerId'] = $this->userVpcOwnerId;
        }

        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
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
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }

        if (isset($map['MasterIntranetAddressZone'])) {
            $model->masterIntranetAddressZone = $map['MasterIntranetAddressZone'];
        }

        if (isset($map['PrimaryZone'])) {
            $model->primaryZone = $map['PrimaryZone'];
        }

        if (isset($map['TenantEndpointDirectId'])) {
            $model->tenantEndpointDirectId = $map['TenantEndpointDirectId'];
        }

        if (isset($map['TenantEndpointId'])) {
            $model->tenantEndpointId = $map['TenantEndpointId'];
        }

        if (isset($map['TenantId'])) {
            $model->tenantId = $map['TenantId'];
        }

        if (isset($map['UserDirectVSwitchId'])) {
            $model->userDirectVSwitchId = $map['UserDirectVSwitchId'];
        }

        if (isset($map['UserVSwitchId'])) {
            $model->userVSwitchId = $map['UserVSwitchId'];
        }

        if (isset($map['UserVpcOwnerId'])) {
            $model->userVpcOwnerId = $map['UserVpcOwnerId'];
        }

        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
