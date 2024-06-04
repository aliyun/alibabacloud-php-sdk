<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Tea\Model;

class DescribeProductInstancesRequest extends Model
{
    /**
     * @description The ID of the WAF instance.
     *
     * This parameter is required.
     * @example waf_v3prepaid_public_cn-zxu****9d02
     *
     * @var string
     */
    public $instanceId;

    /**
     * @description The ID of the Alibaba Cloud account to which the resource belongs.
     *
     * @example 1704********9107
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
     * @description The ID of the instance.
     *
     * @example lb-2zeugkfj81jvo****4tqm
     *
     * @var string
     */
    public $resourceInstanceId;

    /**
     * @description The public IP address of the instance.
     *
     * @example 1.X.X.1
     *
     * @var string
     */
    public $resourceIp;

    /**
     * @description The ID of the Alibaba Cloud resource group.
     *
     * @example rg-aekz6ql****5uzi
     *
     * @var string
     */
    public $resourceManagerResourceGroupId;

    /**
     * @description The name of the instance.
     *
     * @example exampleResourceName
     *
     * @var string
     */
    public $resourceName;

    /**
     * @description The cloud service to which the instance belongs. Valid values:
     *
     *   **clb4**: Layer 4 Classic Load Balancer (CLB).
     *   **clb7**: Layer 7 CLB.
     *   **ecs**: Elastic Compute Service (ECS).
     *
     * @example clb7
     *
     * @var string
     */
    public $resourceProduct;

    /**
     * @description The region ID of the instance. Valid values:
     *
     *   **cn-chengdu**: China (Chengdu).
     *   **cn-beijing**: China (Beijing).
     *   **cn-zhangjiakou**: China (Zhangjiakou).
     *   **cn-hangzhou**: China (Hangzhou).
     *   **cn-shanghai**: China (Shanghai).
     *   **cn-shenzhen**: China (Shenzhen).
     *   **cn-qingdao**: China (Qingdao).
     *   **cn-hongkong**: China (Hong Kong).
     *   **ap-southeast-3**: Malaysia (Kuala Lumpur).
     *   **ap-southeast-5**: Indonesia (Jakarta).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $resourceRegionId;
    protected $_name = [
        'instanceId'                     => 'InstanceId',
        'ownerUserId'                    => 'OwnerUserId',
        'pageNumber'                     => 'PageNumber',
        'pageSize'                       => 'PageSize',
        'regionId'                       => 'RegionId',
        'resourceInstanceId'             => 'ResourceInstanceId',
        'resourceIp'                     => 'ResourceIp',
        'resourceManagerResourceGroupId' => 'ResourceManagerResourceGroupId',
        'resourceName'                   => 'ResourceName',
        'resourceProduct'                => 'ResourceProduct',
        'resourceRegionId'               => 'ResourceRegionId',
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
        if (null !== $this->resourceInstanceId) {
            $res['ResourceInstanceId'] = $this->resourceInstanceId;
        }
        if (null !== $this->resourceIp) {
            $res['ResourceIp'] = $this->resourceIp;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeProductInstancesRequest
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
        if (isset($map['ResourceInstanceId'])) {
            $model->resourceInstanceId = $map['ResourceInstanceId'];
        }
        if (isset($map['ResourceIp'])) {
            $model->resourceIp = $map['ResourceIp'];
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

        return $model;
    }
}
