<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class ModifyHybridCloudClusterBypassStatusRequest extends Model
{
    /**
     * @description The ID of the hybrid cloud cluster.
     *
     * This parameter is required.
     *
     * @example hdbc_cluster_****
     *
     * @var string
     */
    public $clusterResourceId;

    /**
     * @description The ID of the Web Application Firewall (WAF) instance.
     * This parameter is required.
     * @example waf_elasticity-cn-0xldbqt****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The region ID of the WAF instance. Valid values:
     *
     *   **cn-hangzhou**: Chinese mainland
     *   **ap-southeast-1**: outside the Chinese mainland.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the Alibaba Cloud resource group.
     *
     * @example rg-acfm***q
     *
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @description The status of manual bypass. Valid values:
     *
     *   **on**: enabled.
     *   **off**: disabled. This is the default value.
     *
     * This parameter is required.
     *
     * @example on
     *
     * @var string
     */
    public $ruleStatus;
    protected $_name = [
        'clusterResourceId' => 'ClusterResourceId',
        'instanceId' => 'InstanceId',
        'regionId' => 'RegionId',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'ruleStatus' => 'RuleStatus',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterResourceId) {
            $res['ClusterResourceId'] = $this->clusterResourceId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }
        if (null !== $this->ruleStatus) {
            $res['RuleStatus'] = $this->ruleStatus;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ModifyHybridCloudClusterBypassStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterResourceId'])) {
            $model->clusterResourceId = $map['ClusterResourceId'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }
        if (isset($map['RuleStatus'])) {
            $model->ruleStatus = $map['RuleStatus'];
        }

        return $model;
    }
}
