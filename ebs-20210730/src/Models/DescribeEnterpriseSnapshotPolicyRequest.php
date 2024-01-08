<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ebs\V20210730\Models;

use AlibabaCloud\SDK\Ebs\V20210730\Models\DescribeEnterpriseSnapshotPolicyRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeEnterpriseSnapshotPolicyRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must ensure that it is unique among different requests.
     *
     * The ClientToken value can contain only ASCII characters and cannot exceed 64 characters in length. For more information, see [How do I ensure idempotence ](~~25693~~).
     * @example 123e4567-e89b-12d3-a456-42665544****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var string[]
     */
    public $diskIds;

    /**
     * @description The maximum number of entries to be returned. You can use this parameter together with NextToken.
     *
     * Default value: 10.
     * @example 100
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that is used for the next query. Valid values:
     *
     *   If the value of **NextToken** is not returned, it indicates that no next query is to be sent.
     *   If a value of **NextToken** is returned, the value is the token that is used for the subsequent query.
     *
     * @example xxx
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The number of the page to return.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries returned per page.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The list of policies.
     *
     * @var string[]
     */
    public $policyIds;

    /**
     * @description The region ID . You can call the [DescribeRegions](~~354276~~) operation to query the most recent list of regions in which snapshot policy is supported.
     *
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group to which the policy belongs.
     *
     * @example xxx
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The list of tags.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'clientToken'     => 'ClientToken',
        'diskIds'         => 'DiskIds',
        'maxResults'      => 'MaxResults',
        'nextToken'       => 'NextToken',
        'pageNumber'      => 'PageNumber',
        'pageSize'        => 'PageSize',
        'policyIds'       => 'PolicyIds',
        'regionId'        => 'RegionId',
        'resourceGroupId' => 'ResourceGroupId',
        'tag'             => 'Tag',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->diskIds) {
            $res['DiskIds'] = $this->diskIds;
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
        if (null !== $this->policyIds) {
            $res['PolicyIds'] = $this->policyIds;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
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
     * @return DescribeEnterpriseSnapshotPolicyRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DiskIds'])) {
            if (!empty($map['DiskIds'])) {
                $model->diskIds = $map['DiskIds'];
            }
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
        if (isset($map['PolicyIds'])) {
            if (!empty($map['PolicyIds'])) {
                $model->policyIds = $map['PolicyIds'];
            }
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
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
