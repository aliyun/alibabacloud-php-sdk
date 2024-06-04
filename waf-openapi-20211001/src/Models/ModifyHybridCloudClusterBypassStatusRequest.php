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
     * @example hdbc_cluster_****
     *
     * @var string
     */
    public $clusterResourceId;

    /**
     * @description The ID of the Web Application Firewall (WAF) instance.
     *
     **
     *
     **You can call the **DescribeInstanceInfo[ operation to obtain the ID of the WAF instance.](https://help.aliyun.com/document_detail/140857.html)
     *
     * This parameter is required.
     * @example waf_elasticity-cn-0xldbqt****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The status of manual bypass. Valid values:
     *
     *   **on**: enabled.
     *   **off**: disabled. This is the default value.
     *
     * This parameter is required.
     * @example on
     *
     * @var string
     */
    public $ruleStatus;
    protected $_name = [
        'clusterResourceId' => 'ClusterResourceId',
        'instanceId'        => 'InstanceId',
        'ruleStatus'        => 'RuleStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterResourceId) {
            $res['ClusterResourceId'] = $this->clusterResourceId;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
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
        if (isset($map['RuleStatus'])) {
            $model->ruleStatus = $map['RuleStatus'];
        }

        return $model;
    }
}
