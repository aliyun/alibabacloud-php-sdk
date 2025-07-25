<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models;

use AlibabaCloud\Tea\Model;

class ListIpamResourceCidrsRequest extends Model
{
    /**
     * @description The ID of the IPAM pool.
     *
     * >  You must specify at least one of **IpamScopeId** and **IpamPoolId**.
     *
     * @example ipam-pool-6rcq3tobayc20t****
     *
     * @var string
     */
    public $ipamPoolId;

    /**
     * @description The ID of the IPAM scope.
     *
     * >  You must specify at least one of **IpamScopeId** and **IpamPoolId**.
     *
     * @example ipam-scope-glfmcyldpm8lsy****
     *
     * @var string
     */
    public $ipamScopeId;

    /**
     * @description The number of entries per page. Valid values: **1** to **100**. Default value: **10**.
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. Valid values:
     *
     *   You do not need to specify this parameter for the first request.
     *   You must specify the token that is obtained from the previous query as the value of **NextToken**.
     *
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the region where the IPAM instance is hosted.
     *
     * You can call the [DescribeRegions](https://help.aliyun.com/document_detail/36063.html) operation to query the most recent region list.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource ID.
     *
     * @example vpc-bp16qjewdsunr41m1****
     *
     * @var string
     */
    public $resourceId;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The type of resource. Valid values:
     *
     *   **VPC**
     *   **VSwitch**
     *
     * @example VPC
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The VPC ID.
     *
     * @example vpc-bp1fjfnrg3av6zb9e****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'ipamPoolId' => 'IpamPoolId',
        'ipamScopeId' => 'IpamScopeId',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'regionId' => 'RegionId',
        'resourceId' => 'ResourceId',
        'resourceOwnerId' => 'ResourceOwnerId',
        'resourceType' => 'ResourceType',
        'vpcId' => 'VpcId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipamPoolId) {
            $res['IpamPoolId'] = $this->ipamPoolId;
        }
        if (null !== $this->ipamScopeId) {
            $res['IpamScopeId'] = $this->ipamScopeId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIpamResourceCidrsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpamPoolId'])) {
            $model->ipamPoolId = $map['IpamPoolId'];
        }
        if (isset($map['IpamScopeId'])) {
            $model->ipamScopeId = $map['IpamScopeId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceId'])) {
            $model->resourceId = $map['ResourceId'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
