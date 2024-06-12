<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListConfigRuleEvaluationResultsResponseBody\evaluationResults\evaluationResultList\evaluationResultIdentifier;

use AlibabaCloud\Tea\Model;

class evaluationResultQualifier extends Model
{
    /**
     * @description The ID of the compliance package to which the rule belongs.
     *
     * @example cp-bcc33457e0d900d5****
     *
     * @var string
     */
    public $compliancePackId;

    /**
     * @description The ARN of the rule.
     *
     * @example acs:config::120886317861****:rule/cr-cac56457e0d900d3****
     *
     * @var string
     */
    public $configRuleArn;

    /**
     * @description The rule ID.
     *
     * @example cr-cac56457e0d900d3****
     *
     * @var string
     */
    public $configRuleId;

    /**
     * @description The rule name.
     *
     * @example test-rule-name
     *
     * @var string
     */
    public $configRuleName;

    /**
     * @description The date on which the system automatically re-evaluates the ignored incompliant resources.
     *
     * >  If the value of this parameter is left empty, the system does not automatically re-evaluate the ignored incompliant resources. You must manually re-evaluate the ignored incompliant resources.
     * @example 2022-06-01
     *
     * @var string
     */
    public $ignoreDate;

    /**
     * @description The ID of the region in which your resources reside.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource ID.
     *
     * @example i-hp3e4kvhzqn2s11t****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The resource name.
     *
     * @example iZuf6j91r34rnwawoox****
     *
     * @var string
     */
    public $resourceName;

    /**
     * @description The ID of the Alibaba Cloud account to which the resource belongs.
     *
     * @example 120886317861****
     *
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The type of the resource that is monitored by Cloud Config.
     *
     * @example ACS::ECS::Instance
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'compliancePackId' => 'CompliancePackId',
        'configRuleArn'    => 'ConfigRuleArn',
        'configRuleId'     => 'ConfigRuleId',
        'configRuleName'   => 'ConfigRuleName',
        'ignoreDate'       => 'IgnoreDate',
        'regionId'         => 'RegionId',
        'resourceId'       => 'ResourceId',
        'resourceName'     => 'ResourceName',
        'resourceOwnerId'  => 'ResourceOwnerId',
        'resourceType'     => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->compliancePackId) {
            $res['CompliancePackId'] = $this->compliancePackId;
        }
        if (null !== $this->configRuleArn) {
            $res['ConfigRuleArn'] = $this->configRuleArn;
        }
        if (null !== $this->configRuleId) {
            $res['ConfigRuleId'] = $this->configRuleId;
        }
        if (null !== $this->configRuleName) {
            $res['ConfigRuleName'] = $this->configRuleName;
        }
        if (null !== $this->ignoreDate) {
            $res['IgnoreDate'] = $this->ignoreDate;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return evaluationResultQualifier
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompliancePackId'])) {
            $model->compliancePackId = $map['CompliancePackId'];
        }
        if (isset($map['ConfigRuleArn'])) {
            $model->configRuleArn = $map['ConfigRuleArn'];
        }
        if (isset($map['ConfigRuleId'])) {
            $model->configRuleId = $map['ConfigRuleId'];
        }
        if (isset($map['ConfigRuleName'])) {
            $model->configRuleName = $map['ConfigRuleName'];
        }
        if (isset($map['IgnoreDate'])) {
            $model->ignoreDate = $map['IgnoreDate'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
