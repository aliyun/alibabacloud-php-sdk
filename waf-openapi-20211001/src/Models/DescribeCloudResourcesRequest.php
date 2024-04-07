<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class DescribeCloudResourcesRequest extends Model
{
    /**
     * @description The ID of the WAF instance.
     *
     * >  You can call the [DescribeInstance](~~433756~~) operation to query the ID of the WAF instance.
     * @example waf_v3prepaid_public_cn-lbj****cn0c
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the Alibaba Cloud account to which the resource belongs.
     *
     * @example 11769793******
     *
     * @var string
     */
    public $ownerUserId;

    /**
     * @description The page number. Default value: **1**.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Default value: **10**.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

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
     * @description The domain name. You can use this parameter if you set ResourceProduct to fc or sae.
     *
     * @example fc-domain-test
     *
     * @var string
     */
    public $resourceDomain;

    /**
     * @description The function name. You can use this parameter if you set ResourceProduct to fc.
     *
     * @example fc-test
     *
     * @var string
     */
    public $resourceFunction;

    /**
     * @description The ID of the resource.
     *
     * @example alb-43glijk0fr****gths
     *
     * @var string
     */
    public $resourceInstanceId;

    /**
     * @description The ID of the Alibaba Cloud resource group.
     *
     * @example rg-acfm4gh****wela
     *
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @description The name of the resource.
     *
     * @example alb-name
     *
     * @var string
     */
    public $resourceName;

    /**
     * @description The cloud service to which the resource belongs. Valid values:
     *
     *   **alb**: Application Load Balancer (ALB).
     *   **mse**: Microservices Engine (MSE).
     *   **fc**: Function Compute.
     *   **sae**: Serverless App Engine (SAE).
     *
     * >  Different cloud services are available in different regions. The specified cloud service must be available in the specified region.
     * @example alb
     *
     * @var string
     */
    public $resourceProduct;

    /**
     * @description The region ID of the resource. For information about region IDs, see the following table.
     *
     * >  Different cloud services are available in different regions. The specified cloud service must be available in the specified region.
     * @example cn-beijing
     *
     * @var string
     */
    public $resourceRegionId;

    /**
     * @description The route name. You can use this parameter if you set ResourceProduct to mse.
     *
     * @example mse-default-traffic
     *
     * @var string
     */
    public $resourceRouteName;
    protected $_name = [
        'instanceId'                     => 'InstanceId',
        'ownerUserId'                    => 'OwnerUserId',
        'pageNumber'                     => 'PageNumber',
        'pageSize'                       => 'PageSize',
        'regionId'                       => 'RegionId',
        'resourceDomain'                 => 'ResourceDomain',
        'resourceFunction'               => 'ResourceFunction',
        'resourceInstanceId'             => 'ResourceInstanceId',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'resourceName'                   => 'ResourceName',
        'resourceProduct'                => 'ResourceProduct',
        'resourceRegionId'               => 'ResourceRegionId',
        'resourceRouteName'              => 'ResourceRouteName',
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
        if (null !== $this->ownerUserId) {
            $res['OwnerUserId'] = $this->ownerUserId;
        }
        if (null !== $this->pageNumber) {
            $res['PageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceDomain) {
            $res['ResourceDomain'] = $this->resourceDomain;
        }
        if (null !== $this->resourceFunction) {
            $res['ResourceFunction'] = $this->resourceFunction;
        }
        if (null !== $this->resourceInstanceId) {
            $res['ResourceInstanceId'] = $this->resourceInstanceId;
        }
        if (null !== $this->resourceManagerResourceGroupId) {
            $res['ResourceManagerResourceGroupId'] = $this->resourceManagerResourceGroupId;
        }
        if (null !== $this->resourceName) {
            $res['ResourceName'] = $this->resourceName;
        }
        if (null !== $this->resourceProduct) {
            $res['ResourceProduct'] = $this->resourceProduct;
        }
        if (null !== $this->resourceRegionId) {
            $res['ResourceRegionId'] = $this->resourceRegionId;
        }
        if (null !== $this->resourceRouteName) {
            $res['ResourceRouteName'] = $this->resourceRouteName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeCloudResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['InstanceId'])) {
            $model->instanceId = $map['InstanceId'];
        }
        if (isset($map['OwnerUserId'])) {
            $model->ownerUserId = $map['OwnerUserId'];
        }
        if (isset($map['PageNumber'])) {
            $model->pageNumber = $map['PageNumber'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceDomain'])) {
            $model->resourceDomain = $map['ResourceDomain'];
        }
        if (isset($map['ResourceFunction'])) {
            $model->resourceFunction = $map['ResourceFunction'];
        }
        if (isset($map['ResourceInstanceId'])) {
            $model->resourceInstanceId = $map['ResourceInstanceId'];
        }
        if (isset($map['ResourceManagerResourceGroupId'])) {
            $model->resourceManagerResourceGroupId = $map['ResourceManagerResourceGroupId'];
        }
        if (isset($map['ResourceName'])) {
            $model->resourceName = $map['ResourceName'];
        }
        if (isset($map['ResourceProduct'])) {
            $model->resourceProduct = $map['ResourceProduct'];
        }
        if (isset($map['ResourceRegionId'])) {
            $model->resourceRegionId = $map['ResourceRegionId'];
        }
        if (isset($map['ResourceRouteName'])) {
            $model->resourceRouteName = $map['ResourceRouteName'];
        }

        return $model;
    }
}
