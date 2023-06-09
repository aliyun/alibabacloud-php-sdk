<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models;

use AlibabaCloud\Tea\Model;

class ListMultiAccountResourceGroupsRequest extends Model
{
    /**
     * @description The ID of the management account or member of the resource directory.
     *
     * @example 1394339739****
     *
     * @var string
     */
    public $accountId;

    /**
     * @description The maximum number of entries to return on each page.
     *
     * Maximum value: 100. Default value: 10.
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results.
     *
     * @example AAAAAS2Nboi3t4xGrdlG5/Ks/Q1xPG9jzviYEuZydevXIkgF
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The IDs of resource groups.
     *
     * @var string[]
     */
    public $resourceGroupIds;
    protected $_name = [
        'accountId'        => 'AccountId',
        'maxResults'       => 'MaxResults',
        'nextToken'        => 'NextToken',
        'resourceGroupIds' => 'ResourceGroupIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accountId) {
            $res['AccountId'] = $this->accountId;
        }
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
        }
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->resourceGroupIds) {
            $res['ResourceGroupIds'] = $this->resourceGroupIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMultiAccountResourceGroupsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccountId'])) {
            $model->accountId = $map['AccountId'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
        }
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['ResourceGroupIds'])) {
            if (!empty($map['ResourceGroupIds'])) {
                $model->resourceGroupIds = $map['ResourceGroupIds'];
            }
        }

        return $model;
    }
}
