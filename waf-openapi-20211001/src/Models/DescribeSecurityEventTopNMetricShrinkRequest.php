<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class DescribeSecurityEventTopNMetricShrinkRequest extends Model
{
    /**
     * @description The filter conditions for the query. Multiple conditions are evaluated by using a logical AND.
     *
     * This parameter is required.
     *
     * @var string
     */
    public $filterShrink;

    /**
     * @description The ID of the Web Application Firewall (WAF) instance.
     *
     * >  You can call the [DescribeInstanceInfo](https://help.aliyun.com/document_detail/140857.html) operation to query the ID of the WAF instance.
     *
     * This parameter is required.
     *
     * @example waf_cdnsdf3****
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The number of data entries that can be returned. Data entries are sorted in descending order before they are returned. Maximum value: 10.
     *
     * This parameter is required.
     *
     * @example 10
     *
     * @var int
     */
    public $limit;

    /**
     * @description The metric whose top N data entries you want to return. The following metrics are supported:
     *
     * >  For more information about attack requests, see the "Operation description" section of this topic.
     *
     *   real_client_ip: The system aggregates the source IP addresses of attack requests to collect statistics, sorts the statistical results in descending order, and returns top N data entries.
     *   http_user_agent: The system aggregates the User-Agent header field of attack requests to collect statistics, sorts the statistical results in descending order, and returns top N data entries.
     *   matched_host: The system aggregates the protected objects that are matched by attack requests to collect statistics, sorts the statistical results in descending order, and returns top N data entries.
     *   remote_region_id: The system aggregates the countries to which the source IP addresses of attack requests belong to collect statistics, sorts the statistical results in descending order, and returns top N data entries.
     *   request_path: The system aggregates the URLs of attack requests to collect statistics, sorts the statistical results in descending order, and returns top N data entries. The URLs exclude query strings.
     *   block_defense_scene: The system aggregates the protection modules that block attack requests to collect statistics, sorts the statistical results in descending order, and returns top N data entries. The requests match protection rules whose actions are not set to Monitor.
     *   defense_scene: The system aggregates the protection modules that are matched by attack requests to collect statistics, sorts the statistical results in descending order, and returns top N data entries.
     *   defense_scene_rule_id: The system returns the IDs of top N protection rules that are matched by attack requests and also the related protection modules. Only protection rules whose actions are not set to Monitor are counted. The system returns the value in the following format:\\
     * `{ "Attribute": "waf_base", "Value": 140, "Name": "111034" }`
     *   defense_scene_with_rule_id: The system returns the IDs of top N protection rules that are matched by attack requests and also the related protection modules. The IDs and protection modules are connected by using hyphens (-). Protection rules whose actions are set to Monitor and Block are counted. The system returns the value in the following format:\\
     * `{ "Attribute": "", "Value": 1, "Name": "120075-waf_base" }`
     *   defense_scene_top_rule_id: The system returns top N matched protection rules of a specific protection module. You can specify Conditions in Filter to configure filter conditions. For example, you can use the following condition to query top N matched protection rules of the custom rule module:\\
     * `{ "Key": "defense_scene_map", "OpValue": "contain", "Values": "custom_acl" }`
     *   defense_scene_rule_type: The system returns top N matched protection rules of the core web protection module. This metric is supported only by the core web protection module because only this module supports subtypes of protection rules. You must specify Conditions in Filter to configure filter conditions. Example:\\
     * `{ "Key": "defense_scene", "OpValue": "eq", "Values": "waf_base" }`
     *
     * This parameter is required.
     *
     * @example real_client_ip
     *
     * @var string
     */
    public $metric;

    /**
     * @description The region ID of the WAF instance. Valid values:
     *
     *   **cn-hangzhou**: The Chinese mainland.
     *   **ap-southeast-1**: Outside the Chinese mainland.
     *
     * @example ap-southeast-1
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
    protected $_name = [
        'filterShrink' => 'Filter',
        'instanceId' => 'InstanceId',
        'limit' => 'Limit',
        'metric' => 'Metric',
        'regionId' => 'RegionId',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->filterShrink) {
            $res['Filter'] = $this->filterShrink;
        }
        if (null !== $this->instanceId) {
            $res['InstanceId'] = $this->instanceId;
        }
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
        }
        if (null !== $this->metric) {
            $res['Metric'] = $this->metric;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSecurityEventTopNMetricShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Filter'])) {
            $model->filterShrink = $map['Filter'];
        }
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
        }
        if (isset($map['Metric'])) {
            $model->metric = $map['Metric'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }

        return $model;
    }
}
