<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class DescribeRuleHitsTopRuleIdRequest extends Model
{
    /**
     * @description The end of the time range to query. Unit: seconds. If you do not specify this parameter, the current time is used.
     *
     * @example 1665386280
     *
     * @var string
     */
    public $endTimestamp;

    /**
     * @description The ID of the Web Application Firewall (WAF) instance.
     *
     * >  You can call the [DescribeInstance](~~433756~~) operation to query the ID of the WAF instance.
     * @example waf_cdnsdf3****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @example true
     *
     * @var string
     */
    public $isGroupResource;

    /**
     * @description The region where the WAF instance resides. Valid values:
     *
     *   **cn-hangzhou:** the Chinese mainland.
     *   **ap-southeast-1:** outside the Chinese mainland.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The protected object.
     *
     * @example www.aliyundoc.com
     *
     * @var string
     */
    public $resource;

    /**
     * @description The ID of the Alibaba Cloud resource group.
     *
     * @example rg-acfm***q
     *
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @description The type of rules that are triggered by the protected object. By default, this parameter is not specified and all types of rules are queried.
     *
     *   **blacklist:** IP address blacklist rules.
     *   **custom:** custom rules.
     *   **antiscan:** scan protection rules.
     *   **cc_system:** HTTP flood protection rules.
     *   **region_block:** region blacklist rules.
     *
     * @example blacklist
     *
     * @var string
     */
    public $ruleType;

    /**
     * @description The beginning of the time range to query. Unit: seconds.
     *
     * @example 1665331200
     *
     * @var string
     */
    public $startTimestamp;
    protected $_name = [
        'endTimestamp'                   => 'EndTimestamp',
        'instanceId'                     => 'InstanceId',
        'isGroupResource'                => 'IsGroupResource',
        'regionId'                       => 'RegionId',
        'resource'                       => 'Resource',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'ruleType'                       => 'RuleType',
        'startTimestamp'                 => 'StartTimestamp',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->endTimestamp) {
            $res['EndTimestamp'] = $this->endTimestamp;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->isGroupResource) {
            $res['IsGroupResource'] = $this->isGroupResource;
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
        if (null !== $this->ruleType) {
            $res['RuleType'] = $this->ruleType;
        }
        if (null !== $this->startTimestamp) {
            $res['StartTimestamp'] = $this->startTimestamp;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeRuleHitsTopRuleIdRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['EndTimestamp'])) {
            $model->endTimestamp = $map['EndTimestamp'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['IsGroupResource'])) {
            $model->isGroupResource = $map['IsGroupResource'];
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
        if (isset($map['RuleType'])) {
            $model->ruleType = $map['RuleType'];
        }
        if (isset($map['StartTimestamp'])) {
            $model->startTimestamp = $map['StartTimestamp'];
        }

        return $model;
    }
}
