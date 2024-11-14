<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class DescribeUserAssetRequest extends Model
{
    /**
     * @description The ID of the hybrid cloud cluster.
     * >For hybrid cloud scenarios only, you can call the [DescribeHybridCloudClusters](https://help.aliyun.com/document_detail/2849376.html) operation to query the hybrid cloud clusters.
     * @example 428
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The type of the statistics. Valid values:
     *
     *   **asset_num**: total number of APIs
     *   **asset_active**: number of active APIs
     *   **asset_newborn**: number of new APIs
     *   **asset_offline**: number of deactivated APIs
     *   **asset_bot**: number of APIs that are called by bots
     *   **asset_cross_border**: number of APIs that are called for cross-border data transfer
     *   **sensitive_api**: number of response-sensitive APIs
     *   **sensitive_domain**: number of response-sensitive domain names
     *
     * This parameter is required.
     * @example asset_num
     *
     * @var string
     */
    public $dataType;

    /**
     * @description The time at which the API was called. The value is a UNIX timestamp displayed in UTC. Unit: seconds.
     *
     * @example 1723435200
     *
     * @var string
     */
    public $days;

    /**
     * @description The ID of the Web Application Firewall (WAF) instance.
     *
     * This parameter is required.
     * @example waf-cn-uax37ijm***
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
    protected $_name = [
        'clusterId'                      => 'ClusterId',
        'dataType'                       => 'DataType',
        'days'                           => 'Days',
        'instanceId'                     => 'InstanceId',
        'regionId'                       => 'RegionId',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->dataType) {
            $res['DataType'] = $this->dataType;
        }
        if (null !== $this->days) {
            $res['Days'] = $this->days;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeUserAssetRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['DataType'])) {
            $model->dataType = $map['DataType'];
        }
        if (isset($map['Days'])) {
            $model->days = $map['Days'];
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

        return $model;
    }
}
