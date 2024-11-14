<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class DescribeUserApiRequestRequest extends Model
{
    /**
     * @description The API.
     *
     * @example /api/v1/know
     *
     * @var string
     */
    public $apiFormat;

    /**
     * @description The ID of the API.
     *
     * This parameter is required.
     * @example 3799f0695c0d687f3295d132fe49bc14
     *
     * @var string
     */
    public $apiId;

    /**
     * @description The ID of the hybrid cloud cluster.
     * >For hybrid cloud scenarios only, you can call the [DescribeHybridCloudClusters](https://help.aliyun.com/document_detail/2849376.html) operation to query the hybrid cloud clusters.
     * @example 428
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The domain name or IP address of the API.
     *
     * @example c.***.com
     *
     * @var string
     */
    public $domain;

    /**
     * @description The ID of the Web Application Firewall (WAF) instance.
     *
     * This parameter is required.
     * @example waf_v3prepaid_public_cn-zxu38***
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The region in which the WAF instance is deployed. Valid values:
     *
     *   **cn-hangzhou**: Chinese mainland
     *   **ap-southeast-1**: outside the Chinese mainland
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
     * @description The type of the statistics. Valid values:
     *
     *   **api_ip**: total traffic
     *   **api_cross_border_ip**: cross-border traffic
     *   **api_bot_ip**: bot traffic
     *   **remote_region**: geographical location
     *   **client_id**: client type
     *   **http_referer**: Referer
     *   **api_cnt**: total number of calls
     *   **bot_cnt**: number of bot calls
     *   **cross_border_cnt**: number of cross-border requests
     *   **api_freq**: call frequency
     *
     * @example api_ip
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'apiFormat'                      => 'ApiFormat',
        'apiId'                          => 'ApiId',
        'clusterId'                      => 'ClusterId',
        'domain'                         => 'Domain',
        'instanceId'                     => 'InstanceId',
        'regionId'                       => 'RegionId',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'type'                           => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->apiFormat) {
            $res['ApiFormat'] = $this->apiFormat;
        }
        if (null !== $this->apiId) {
            $res['ApiId'] = $this->apiId;
        }
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
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
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserApiRequestRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApiFormat'])) {
            $model->apiFormat = $map['ApiFormat'];
        }
        if (isset($map['ApiId'])) {
            $model->apiId = $map['ApiId'];
        }
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
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
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
