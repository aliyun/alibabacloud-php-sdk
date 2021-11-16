<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models\DescribePolicyInstancesResponse;

use AlibabaCloud\Tea\Model;

class body extends Model
{
    /**
     * @description 策略实例实施者UID
     *
     * @var string
     */
    public $aliUid;

    /**
     * @description 目标集群ID
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description 规则实例名称
     *
     * @var string
     */
    public $instanceName;

    /**
     * @description 策略治理规则名称
     *
     * @var string
     */
    public $policyName;

    /**
     * @description 策略类型名称
     *
     * @var string
     */
    public $policyCategory;

    /**
     * @description 规则模板描述
     *
     * @var string
     */
    public $policyDescription;

    /**
     * @description 当前规则实例的配置参数
     *
     * @var string
     */
    public $policyParameters;

    /**
     * @description 规则实例治理等级
     *
     * @var string
     */
    public $policySeverity;

    /**
     * @description 策略实例实施范围： 默认"*"代表集群所有ns 否则返回作用namespaces名称，多个namespaces以逗号分隔
     *
     * @var string
     */
    public $policyScope;

    /**
     * @description 规则治理动作  deny: 拦截违规部署  warn：告警
     *
     * @var string
     */
    public $policyAction;
    protected $_name = [
        'aliUid'            => 'ali_uid',
        'clusterId'         => 'cluster_id',
        'instanceName'      => 'instance_name',
        'policyName'        => 'policy_name',
        'policyCategory'    => 'policy_category',
        'policyDescription' => 'policy_description',
        'policyParameters'  => 'policy_parameters',
        'policySeverity'    => 'policy_severity',
        'policyScope'       => 'policy_scope',
        'policyAction'      => 'policy_action',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->aliUid) {
            $res['ali_uid'] = $this->aliUid;
        }
        if (null !== $this->clusterId) {
            $res['cluster_id'] = $this->clusterId;
        }
        if (null !== $this->instanceName) {
            $res['instance_name'] = $this->instanceName;
        }
        if (null !== $this->policyName) {
            $res['policy_name'] = $this->policyName;
        }
        if (null !== $this->policyCategory) {
            $res['policy_category'] = $this->policyCategory;
        }
        if (null !== $this->policyDescription) {
            $res['policy_description'] = $this->policyDescription;
        }
        if (null !== $this->policyParameters) {
            $res['policy_parameters'] = $this->policyParameters;
        }
        if (null !== $this->policySeverity) {
            $res['policy_severity'] = $this->policySeverity;
        }
        if (null !== $this->policyScope) {
            $res['policy_scope'] = $this->policyScope;
        }
        if (null !== $this->policyAction) {
            $res['policy_action'] = $this->policyAction;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return body
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ali_uid'])) {
            $model->aliUid = $map['ali_uid'];
        }
        if (isset($map['cluster_id'])) {
            $model->clusterId = $map['cluster_id'];
        }
        if (isset($map['instance_name'])) {
            $model->instanceName = $map['instance_name'];
        }
        if (isset($map['policy_name'])) {
            $model->policyName = $map['policy_name'];
        }
        if (isset($map['policy_category'])) {
            $model->policyCategory = $map['policy_category'];
        }
        if (isset($map['policy_description'])) {
            $model->policyDescription = $map['policy_description'];
        }
        if (isset($map['policy_parameters'])) {
            $model->policyParameters = $map['policy_parameters'];
        }
        if (isset($map['policy_severity'])) {
            $model->policySeverity = $map['policy_severity'];
        }
        if (isset($map['policy_scope'])) {
            $model->policyScope = $map['policy_scope'];
        }
        if (isset($map['policy_action'])) {
            $model->policyAction = $map['policy_action'];
        }

        return $model;
    }
}
