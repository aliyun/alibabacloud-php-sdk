<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models;

use AlibabaCloud\Tea\Model;

class ListIpamDiscoveredResourceRequest extends Model
{
    /**
     * @description The ID of the resource discovery instance.
     *
     * This parameter is required.
     *
     * @example ipam-res-disco-jt5f2af2u6nk2z321****
     *
     * @var string
     */
    public $ipamResourceDiscoveryId;

    /**
     * @description The maximum number of entries on each page. Valid values: 1 to 100. Default value: 10.
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
     * @description The ID of the hosted region of the IPAM pool.
     *
     * You can call the [DescribeRegions](https://help.aliyun.com/document_detail/36063.html) operation to query the region list.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The region where resource discovery is performed.
     *
     * This parameter is required.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $resourceRegionId;

    /**
     * @description The resource type. Valid values:
     *
     *   **VPC**
     *   **VSwitch**
     *
     * @example VPC
     *
     * @var string
     */
    public $resourceType;
    protected $_name = [
        'ipamResourceDiscoveryId' => 'IpamResourceDiscoveryId',
        'maxResults' => 'MaxResults',
        'nextToken' => 'NextToken',
        'regionId' => 'RegionId',
        'resourceRegionId' => 'ResourceRegionId',
        'resourceType' => 'ResourceType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipamResourceDiscoveryId) {
            $res['IpamResourceDiscoveryId'] = $this->ipamResourceDiscoveryId;
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
        if (null !== $this->resourceRegionId) {
            $res['ResourceRegionId'] = $this->resourceRegionId;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListIpamDiscoveredResourceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IpamResourceDiscoveryId'])) {
            $model->ipamResourceDiscoveryId = $map['IpamResourceDiscoveryId'];
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
        if (isset($map['ResourceRegionId'])) {
            $model->resourceRegionId = $map['ResourceRegionId'];
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }

        return $model;
    }
}
