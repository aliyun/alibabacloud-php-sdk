<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adcp\V20220101\Models;

use AlibabaCloud\Tea\Model;

class CreateHubClusterRequest extends Model
{
    /**
     * @description Specifies whether to use a public IP address to expose the API server. Valid values: - true: uses a public IP address to expose the API server. - true: uses an internal IP address to expose the API server.
     *
     * @example true
     *
     * @var bool
     */
    public $apiServerPublicEip;

    /**
     * @description Specifies whether to enable audit logs. Valid values: - true: enables audit logs. - false: disables audit logs.
     *
     * @example false
     *
     * @var bool
     */
    public $auditLogEnabled;

    /**
     * @description Specifies whether the security group is an advanced security group.
     *
     * @example false
     *
     * @var bool
     */
    public $isEnterpriseSecurityGroup;

    /**
     * @description The name of the master instance.
     *
     * @example ack-demo
     *
     * @var string
     */
    public $name;

    /**
     * @description Scenario-oriented master control type. The value can be:
     *
     * Default Value: `Default`.
     * @example Default
     *
     * @var string
     */
    public $profile;

    /**
     * @description The ID of the region. You can call the DescribeRegions operation to query available regions.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the vSwitch.
     *
     * @example ["vsw-2zeaijsas4zkzz81xm***"]
     *
     * @var string
     */
    public $vSwitches;

    /**
     * @description The ID of the virtual private cloud (VPC) to which the master instance belongs. You can call the DescribeVpcs operation to query available VPCs.
     *
     * @example vpc-f8zin0jscsr84s96tg***
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'apiServerPublicEip'        => 'ApiServerPublicEip',
        'auditLogEnabled'           => 'AuditLogEnabled',
        'isEnterpriseSecurityGroup' => 'IsEnterpriseSecurityGroup',
        'name'                      => 'Name',
        'profile'                   => 'Profile',
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
        if (null !== $this->isEnterpriseSecurityGroup) {
            $res['IsEnterpriseSecurityGroup'] = $this->isEnterpriseSecurityGroup;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->profile) {
            $res['Profile'] = $this->profile;
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
        if (isset($map['IsEnterpriseSecurityGroup'])) {
            $model->isEnterpriseSecurityGroup = $map['IsEnterpriseSecurityGroup'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Profile'])) {
            $model->profile = $map['Profile'];
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
