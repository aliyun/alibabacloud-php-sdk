<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models;

use AlibabaCloud\Tea\Model;

class CreateHubClusterRequest extends Model
{
    /**
     * @var bool
     */
    public $apiServerPublicEip;

    /**
     * @var bool
     */
    public $auditLogEnabled;

    /**
     * @var string
     */
    public $auditLogProject;

    /**
     * @var string
     */
    public $auditLogStoreTTL;

    /**
     * @var bool
     */
    public $controlPlaneLogEnabled;

    /**
     * @var string
     */
    public $controlPlaneLogProject;

    /**
     * @var string
     */
    public $controlPlaneLogTTL;

    /**
     * @description 是否企业安全组
     *
     * @var bool
     */
    public $isEnterpriseSecurityGroup;

    /**
     * @description 集群名称
     *
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $vSwitches;

    /**
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'apiServerPublicEip'        => 'ApiServerPublicEip',
        'auditLogEnabled'           => 'AuditLogEnabled',
        'auditLogProject'           => 'AuditLogProject',
        'auditLogStoreTTL'          => 'AuditLogStoreTTL',
        'controlPlaneLogEnabled'    => 'ControlPlaneLogEnabled',
        'controlPlaneLogProject'    => 'ControlPlaneLogProject',
        'controlPlaneLogTTL'        => 'ControlPlaneLogTTL',
        'isEnterpriseSecurityGroup' => 'IsEnterpriseSecurityGroup',
        'name'                      => 'Name',
        'regionId'                  => 'RegionId',
        'vSwitches'                 => 'VSwitches',
        'vpcId'                     => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiServerPublicEip) {
            $res['ApiServerPublicEip'] = $this->apiServerPublicEip;
        }
        if (null !== $this->auditLogEnabled) {
            $res['AuditLogEnabled'] = $this->auditLogEnabled;
        }
        if (null !== $this->auditLogProject) {
            $res['AuditLogProject'] = $this->auditLogProject;
        }
        if (null !== $this->auditLogStoreTTL) {
            $res['AuditLogStoreTTL'] = $this->auditLogStoreTTL;
        }
        if (null !== $this->controlPlaneLogEnabled) {
            $res['ControlPlaneLogEnabled'] = $this->controlPlaneLogEnabled;
        }
        if (null !== $this->controlPlaneLogProject) {
            $res['ControlPlaneLogProject'] = $this->controlPlaneLogProject;
        }
        if (null !== $this->controlPlaneLogTTL) {
            $res['ControlPlaneLogTTL'] = $this->controlPlaneLogTTL;
        }
        if (null !== $this->isEnterpriseSecurityGroup) {
            $res['IsEnterpriseSecurityGroup'] = $this->isEnterpriseSecurityGroup;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->vSwitches) {
            $res['VSwitches'] = $this->vSwitches;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateHubClusterRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiServerPublicEip'])) {
            $model->apiServerPublicEip = $map['ApiServerPublicEip'];
        }
        if (isset($map['AuditLogEnabled'])) {
            $model->auditLogEnabled = $map['AuditLogEnabled'];
        }
        if (isset($map['AuditLogProject'])) {
            $model->auditLogProject = $map['AuditLogProject'];
        }
        if (isset($map['AuditLogStoreTTL'])) {
            $model->auditLogStoreTTL = $map['AuditLogStoreTTL'];
        }
        if (isset($map['ControlPlaneLogEnabled'])) {
            $model->controlPlaneLogEnabled = $map['ControlPlaneLogEnabled'];
        }
        if (isset($map['ControlPlaneLogProject'])) {
            $model->controlPlaneLogProject = $map['ControlPlaneLogProject'];
        }
        if (isset($map['ControlPlaneLogTTL'])) {
            $model->controlPlaneLogTTL = $map['ControlPlaneLogTTL'];
        }
        if (isset($map['IsEnterpriseSecurityGroup'])) {
            $model->isEnterpriseSecurityGroup = $map['IsEnterpriseSecurityGroup'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['VSwitches'])) {
            $model->vSwitches = $map['VSwitches'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
