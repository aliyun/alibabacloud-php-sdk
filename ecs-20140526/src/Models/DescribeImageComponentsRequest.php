<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\SDK\Ecs\V20140526\Models\DescribeImageComponentsRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeImageComponentsRequest extends Model
{
    /**
     * @description The type of the image component.
     *
     * Valid values:
     *
     *   Build
     *   Test
     *
     * @example null
     *
     * @var string
     */
    public $componentType;

    /**
     * @description The version number of the image component in the \\<major>.\\<minor>.\\<patch> format. You can set \\<major>, \\<minor>, and \\<patch> to non-negative integers, or set one of \\<major>, \\<minor>, and \\<patch> to the wildcard (\\*) and the other two to non-negative integers.
     *
     * >  This parameter takes effect only if you specify Name.
     * @example null
     *
     * @var string
     */
    public $componentVersion;

    /**
     * @description The IDs of image components. Valid values of N: 1 to 20.
     *
     * @example ic-bp67acfmxazb4p****
     *
     * @var string[]
     */
    public $imageComponentId;

    /**
     * @description The maximum number of entries per page. Valid values: 1 to 500.
     *
     * Default value: 50.
     * @example 50
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The name of the image component. You must specify an exact name to search for the image component.
     *
     * @example testComponent
     *
     * @var string
     */
    public $name;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. You do not need to specify this parameter for the first request. You must specify the token that is obtained from the previous query as the value of `NextToken`.
     *
     * @example AAAAAdDWBF2****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The type of the image component. Valid values:
     *
     *   SELF: the custom component that you created.
     *   ALIYUN: the system component provided by Alibaba Cloud.
     *
     * @example SELF
     *
     * @var string
     */
    public $owner;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The region ID of the image component. You can call the [DescribeRegions](https://help.aliyun.com/document_detail/25609.html) operation to query the most recent region list.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group. If this parameter is specified to query resources, up to 1,000 resources that belong to the specified resource group can be displayed in the response.
     *
     * >  Resources in the default resource group are displayed in the response regardless of how this parameter is set.
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
     * @description The type of the operating system supported by the image component.
     *
     * Valid values:
     *
     *   Linux
     *   Windows
     *
     * @example null
     *
     * @var string
     */
    public $systemType;

    /**
     * @description The tags of the image component.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'componentType'        => 'ComponentType',
        'componentVersion'     => 'ComponentVersion',
        'imageComponentId'     => 'ImageComponentId',
        'maxResults'           => 'MaxResults',
        'name'                 => 'Name',
        'nextToken'            => 'NextToken',
        'owner'                => 'Owner',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'systemType'           => 'SystemType',
        'tag'                  => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->componentType) {
            $res['ComponentType'] = $this->componentType;
        }
        if (null !== $this->componentVersion) {
            $res['ComponentVersion'] = $this->componentVersion;
        }
        if (null !== $this->imageComponentId) {
            $res['ImageComponentId'] = $this->imageComponentId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->owner) {
            $res['Owner'] = $this->owner;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
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
        if (null !== $this->systemType) {
            $res['SystemType'] = $this->systemType;
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeImageComponentsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ComponentType'])) {
            $model->componentType = $map['ComponentType'];
        }
        if (isset($map['ComponentVersion'])) {
            $model->componentVersion = $map['ComponentVersion'];
        }
        if (isset($map['ImageComponentId'])) {
            if (!empty($map['ImageComponentId'])) {
                $model->imageComponentId = $map['ImageComponentId'];
            }
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['Owner'])) {
            $model->owner = $map['Owner'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
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
        if (isset($map['SystemType'])) {
            $model->systemType = $map['SystemType'];
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

        return $model;
    }
}
