<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeSecurityGroupsRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeSecurityGroupsRequest extends Model
{
    /**
     * @description The ID of the security group.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description The number of the page to return.
     *
     * > This parameter will be removed in the future. We recommend that you use the NextToken and MaxResults parameters for a paged query.
     * @example null
     *
     * @var bool
     */
    public $fuzzyQuery;

    /**
     * @description The ID of the resource group to which the security groups belong. When you use this parameter to filter resources, the number of resources in the specified resource group cannot exceed 1,000. You can call the [ListResourceGroups](~~158855~~) operation to query the most recent resource group list.
     *
     * > Resources in the default resource group are displayed in the response regardless of how you specify this parameter.
     * @example null
     *
     * @var bool
     */
    public $isQueryEcsCount;

    /**
     * @description The network type of the security group. Valid values:
     *
     *   vpc: virtual private cloud (VPC)
     *   classic: classic network
     *
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The name of the security group.
     *
     * @example vpc
     *
     * @var string
     */
    public $networkType;

    /**
     * @description The maximum number of entries to return on each page. If you specify the MaxResults parameter, the `MaxResults` and `NextToken` parameters are used for a paged query.
     *
     * Default value: 10.
     * @example e71d8a535bd9cc11
     *
     * @var string
     */
    public $nextToken;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The number of entries to return on each page.
     *
     * > This parameter will be removed in the future. We recommend that you use the NextToken and MaxResults parameters for a paged query.
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The ID of the request.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The IDs of security groups. The value is a JSON array that consists of up to 100 security group IDs. Separate the IDs with commas (,).
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The tags of the security group.
     *
     * @example rg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description > This parameter is no longer used.
     *
     * @example sg-bp67acfmxazb4p****
     *
     * @var string
     */
    public $securityGroupId;

    /**
     * @description The ID of the virtual private cloud (VPC) to which the security groups belong.
     *
     * @example ["sg-bp67acfmxazb4p****", "sg-bp67acfmxazb4p****", "sg-bp67acfmxazb4p****",....]
     *
     * @var string
     */
    public $securityGroupIds;

    /**
     * @description > This parameter is no longer used.
     *
     * @example SGTestName
     *
     * @var string
     */
    public $securityGroupName;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. Set this parameter to the NextToken value that is returned when you called the DescribeInstanceTypes operation last time. You do not need to specify this parameter for the first request.
     *
     * @example normal
     *
     * @var string
     */
    public $securityGroupType;

    /**
     * @description The tags of the security group.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The type of the security group. Valid values:
     *
     *   normal: basic security group
     *   enterprise: advanced security group
     *
     * > If you do not specify this parameter, basic and advanced security groups are queried.
     * @example vpc-bp67acfmxazb4p****
     *
     * @var string
     */
    public $vpcId;
    protected $_name = [
        'dryRun'               => 'DryRun',
        'fuzzyQuery'           => 'FuzzyQuery',
        'isQueryEcsCount'      => 'IsQueryEcsCount',
        'maxResults'           => 'MaxResults',
        'networkType'          => 'NetworkType',
        'nextToken'            => 'NextToken',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'pageNumber'           => 'PageNumber',
        'pageSize'             => 'PageSize',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'securityGroupId'      => 'SecurityGroupId',
        'securityGroupIds'     => 'SecurityGroupIds',
        'securityGroupName'    => 'SecurityGroupName',
        'securityGroupType'    => 'SecurityGroupType',
        'tag'                  => 'Tag',
        'vpcId'                => 'VpcId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->fuzzyQuery) {
            $res['FuzzyQuery'] = $this->fuzzyQuery;
        }
        if (null !== $this->isQueryEcsCount) {
            $res['IsQueryEcsCount'] = $this->isQueryEcsCount;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->networkType) {
            $res['NetworkType'] = $this->networkType;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->securityGroupId) {
            $res['SecurityGroupId'] = $this->securityGroupId;
        }
        if (null !== $this->securityGroupIds) {
            $res['SecurityGroupIds'] = $this->securityGroupIds;
        }
        if (null !== $this->securityGroupName) {
            $res['SecurityGroupName'] = $this->securityGroupName;
        }
        if (null !== $this->securityGroupType) {
            $res['SecurityGroupType'] = $this->securityGroupType;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->vpcId) {
            $res['VpcId'] = $this->vpcId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeSecurityGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['FuzzyQuery'])) {
            $model->fuzzyQuery = $map['FuzzyQuery'];
        }
        if (isset($map['IsQueryEcsCount'])) {
            $model->isQueryEcsCount = $map['IsQueryEcsCount'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NetworkType'])) {
            $model->networkType = $map['NetworkType'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['SecurityGroupId'])) {
            $model->securityGroupId = $map['SecurityGroupId'];
        }
        if (isset($map['SecurityGroupIds'])) {
            $model->securityGroupIds = $map['SecurityGroupIds'];
        }
        if (isset($map['SecurityGroupName'])) {
            $model->securityGroupName = $map['SecurityGroupName'];
        }
        if (isset($map['SecurityGroupType'])) {
            $model->securityGroupType = $map['SecurityGroupType'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['VpcId'])) {
            $model->vpcId = $map['VpcId'];
        }

        return $model;
    }
}
