<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeDiskReplicaGroupsRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeDiskReplicaGroupsRequest extends Model
{
    /**
     * @description The IDs of replication pair-consistent groups. You can specify the IDs of one or more replication pair-consistent groups. Separate the IDs with commas (,).
     *
     * This parameter is empty by default, which indicates that all replication pair-consistent groups in the specified region are queried.
     * @example AAAAAdDWBF2****
     *
     * @var string
     */
    public $groupIds;

    /**
     * @description The maximum number of entries to return on each page. Valid values: 1 to 500.
     *
     * Default value: 10.
     * @example 10
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The query token. Set the value to the NextToken value returned in the previous call to the DescribeDiskReplicaGroups operation. Leave this parameter empty the first time you call this operation. When NextToken is specified, the PageSize and PageNumber request parameters do not take effect and the TotalCount response parameter is invalid.
     *
     * @example AAAAAdDWBF2****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The number of the page to return.
     *
     * @example 5
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries to return on each page.
     *
     * Valid values: 1 to 100.
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The region ID of the replication pair-consistent group.
     *
     * @example cn-beijing
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the replication group belongs.
     *
     * @example rg-aekz*****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The type of the site from which the information of replication pair-consistent groups is retrieved. This parameter is used for scenarios where data is replicated across zones in replication pairs.
     *
     *   If the Site parameter is not specified, information such as the state of replication pair-consistent groups at the primary site is queried and returned.
     *
     *   Otherwise, information such as the state of replication pair-consistent groups at the site specified by the Site parameter is queried and returned. Valid values:
     *
     *   production: primary site
     *   backup: secondary site
     *
     * @example production
     *
     * @var string
     */
    public $site;

    /**
     * @description The resource tags. You can specify up to 20 tags.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'groupIds'        => 'GroupIds',
        'maxResults'      => 'MaxResults',
        'nextToken'       => 'NextToken',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'site'            => 'Site',
        'tag'             => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupIds) {
            $res['GroupIds'] = $this->groupIds;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
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
        if (null !== $this->site) {
            $res['Site'] = $this->site;
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
     * @return DescribeDiskReplicaGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupIds'])) {
            $model->groupIds = $map['GroupIds'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
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
        if (isset($map['Site'])) {
            $model->site = $map['Site'];
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
