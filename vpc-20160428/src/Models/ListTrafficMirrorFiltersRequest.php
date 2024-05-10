<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\SDK\Vpc\V20160428\Models\ListTrafficMirrorFiltersRequest\tags;
use AlibabaCloud\Tea\Model;

class ListTrafficMirrorFiltersRequest extends Model
{
    /**
     * @description The maximum number of entries to return.
     *
     * Valid values: **1** to **100**. Default value: **10**.
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results. Valid values:
     *
     *   You do not need to specify this parameter for the first request.
     *   You must specify the token that is obtained from the previous query as the value of NextToken.
     *
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
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
     * @description The ID of the region to which the mirrored traffic belongs.
     *
     * This parameter is required.
     * @example cn-hongkong
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the mirrored traffic belongs.
     *
     * @example rg-bp67acfmxazb4ph****
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
     * @description The tag list.
     *
     * @var tags[]
     */
    public $tags;

    /**
     * @description The ID of the traffic mirror filter. The maximum value of **N** is **100**, which specifies that you can query up to 100 filters at a time.
     *
     * @example tmf-j6cmls82xnc86vtpe****
     *
     * @var string[]
     */
    public $trafficMirrorFilterIds;

    /**
     * @description The name of the filter.
     *
     * @example abc
     *
     * @var string
     */
    public $trafficMirrorFilterName;
    protected $_name = [
        'maxResults'              => 'MaxResults',
        'nextToken'               => 'NextToken',
        'ownerAccount'            => 'OwnerAccount',
        'ownerId'                 => 'OwnerId',
        'regionId'                => 'RegionId',
        'resourceGroupId'         => 'ResourceGroupId',
        'resourceOwnerAccount'    => 'ResourceOwnerAccount',
        'resourceOwnerId'         => 'ResourceOwnerId',
        'tags'                    => 'Tags',
        'trafficMirrorFilterIds'  => 'TrafficMirrorFilterIds',
        'trafficMirrorFilterName' => 'TrafficMirrorFilterName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
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
        if (null !== $this->tags) {
            $res['Tags'] = [];
            if (null !== $this->tags && \is_array($this->tags)) {
                $n = 0;
                foreach ($this->tags as $item) {
                    $res['Tags'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->trafficMirrorFilterIds) {
            $res['TrafficMirrorFilterIds'] = $this->trafficMirrorFilterIds;
        }
        if (null !== $this->trafficMirrorFilterName) {
            $res['TrafficMirrorFilterName'] = $this->trafficMirrorFilterName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListTrafficMirrorFiltersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
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
        if (isset($map['Tags'])) {
            if (!empty($map['Tags'])) {
                $model->tags = [];
                $n           = 0;
                foreach ($map['Tags'] as $item) {
                    $model->tags[$n++] = null !== $item ? tags::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['TrafficMirrorFilterIds'])) {
            if (!empty($map['TrafficMirrorFilterIds'])) {
                $model->trafficMirrorFilterIds = $map['TrafficMirrorFilterIds'];
            }
        }
        if (isset($map['TrafficMirrorFilterName'])) {
            $model->trafficMirrorFilterName = $map['TrafficMirrorFilterName'];
        }

        return $model;
    }
}
