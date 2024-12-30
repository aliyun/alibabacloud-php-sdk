<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class DescribeDefenseResourceTemplatesRequest extends Model
{
    /**
     * @description The ID of the Web Application Firewall (WAF) instance.
     *
     * This parameter is required.
     * @example waf_v3prepaid_public_cn-9lb36****0e
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The region in which the WAF instance is deployed. Valid values:
     *
     *   **cn-hangzhou**: Chinese mainland.
     *   **ap-southeast-1**: outside the Chinese mainland.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The name of the protected object or protected object group that you want to query.
     *
     * This parameter is required.
     * @example xxxxxhemicals.cn-waf
     *
     * @var string
     */
    public $resource;

    /**
     * @description The ID of the Alibaba Cloud resource group.
     *
     * @example rg-aek2ax2y5****pi
     *
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @description The type of the protected resource. Valid values:
     *
     *   **single**: protected object. This is the default value.
     *   **group**: protected object group.
     *
     * @example single
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The ID of the protection rule.
     *
     * @example 20111098
     *
     * @var int
     */
    public $ruleId;

    /**
     * @var string
     */
    public $ruleName;

    /**
     * @description The type of the protection rule. Valid values:
     *
     *   **defense**: defense rule. This is the default value.
     *   **whitelist**: whitelist rule.
     *
     * @example whitelist
     *
     * @var string
     */
    public $ruleType;

    /**
     * @var string
     */
    public $templateName;
    protected $_name = [
        'instanceId'                     => 'InstanceId',
        'regionId'                       => 'RegionId',
        'resource'                       => 'Resource',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'resourceType'                   => 'ResourceType',
        'ruleId'                         => 'RuleId',
        'ruleName'                       => 'RuleName',
        'ruleType'                       => 'RuleType',
        'templateName'                   => 'TemplateName',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resource) {
            $res['Resource'] = $this->resource;
        }
        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->ruleId) {
            $res['RuleId'] = $this->ruleId;
        }
        if (null !== $this->ruleName) {
            $res['RuleName'] = $this->ruleName;
        }
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->templateName) {
            $res['TemplateName'] = $this->templateName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDefenseResourceTemplatesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['Resource'])) {
            $model->resource = $map['Resource'];
        }
        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['RuleId'])) {
            $model->ruleId = $map['RuleId'];
        }
        if (isset($map['RuleName'])) {
            $model->ruleName = $map['RuleName'];
        }
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['TemplateName'])) {
            $model->templateName = $map['TemplateName'];
        }

        return $model;
    }
}
