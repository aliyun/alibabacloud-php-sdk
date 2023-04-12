<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Config\V20200907\Models\ListAggregateResourceEvaluationResultsResponseBody\evaluationResults\evaluationResultList\evaluationResultIdentifier;

use AlibabaCloud\Tea\Model;

class evaluationResultQualifier extends Model
{
    /**
     * @description The Alibaba Cloud Resource Name (ARN) of the rule.
     *
     * @example acs:config::100931896542****:rule/cr-7f7d626622af0041****
     *
     * @var string
     */
    public $configRuleArn;

    /**
     * @description The ID of the rule.
     *
     * @example cr-7f7d626622af0041****
     *
     * @var string
     */
    public $configRuleId;

    /**
     * @description The name of the monitoring rule.
     *
     * @var string
     */
    public $configRuleName;

    /**
     * @description The date from which the system automatically re-evaluates the ignored incompliant resources.
     *
     * >  If the value of this parameter is left empty, the system does not automatically re-evaluate the ignored incompliant resources. You must manually re-evaluate the ignored incompliant resources.
     * @example 2022-06-01
     *
     * @var string
     */
    public $ignoreDate;

    /**
     * @description The ID of the region where the resource resides.
     *
     * @example global
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource.
     *
     * @example 23642660635396****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @description The name of the resource.
     *
     * @example rd_member
     *
     * @var string
     */
    public $resourceName;

    /**
     * @description The type of the resource.
     *
     * @example ACS::RAM::User
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'configRuleArn'  => 'ConfigRuleArn',
        'configRuleId'   => 'ConfigRuleId',
        'configRuleName' => 'ConfigRuleName',
        'ignoreDate'     => 'IgnoreDate',
        'regionId'       => 'RegionId',
        'resourceId'     => 'ResourceId',
        'resourceName'   => 'ResourceName',
        'resourceType'   => 'ResourceType',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
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
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
