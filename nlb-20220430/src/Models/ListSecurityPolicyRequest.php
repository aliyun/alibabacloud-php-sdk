<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nlb\V20220430\Models;

use AlibabaCloud\SDK\Nlb\V20220430\Models\ListSecurityPolicyRequest\tag;
use AlibabaCloud\Tea\Model;

class ListSecurityPolicyRequest extends Model
{
    /**
     * @description The number of entries to return per page. Valid values: **1** to **100**. Default value: **20**.
     *
     * @example 20
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
     * @description The region ID of the NLB instance.
     *
     * You can call the [DescribeRegions](https://help.aliyun.com/document_detail/443657.html) operation to query the most recent region list.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The resource group ID.
     *
     * @example rg-atstuj3rtop****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The IDs of the TLS security policies. You can specify at most 20 policy IDs in each call.
     *
     * @var string[]
     */
    public $securityPolicyIds;

    /**
     * @description The names of the TLS security policies. You can specify at most 20 policy names.
     *
     * @var string[]
     */
    public $securityPolicyNames;

    /**
     * @description The tags.
     *
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'maxResults'          => 'MaxResults',
        'nextToken'           => 'NextToken',
        'regionId'            => 'RegionId',
        'resourceGroupId'     => 'ResourceGroupId',
        'securityPolicyIds'   => 'SecurityPolicyIds',
        'securityPolicyNames' => 'SecurityPolicyNames',
        'tag'                 => 'Tag',
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
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->securityPolicyIds) {
            $res['SecurityPolicyIds'] = $this->securityPolicyIds;
        }
        if (null !== $this->securityPolicyNames) {
            $res['SecurityPolicyNames'] = $this->securityPolicyNames;
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
     * @return ListSecurityPolicyRequest
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
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['SecurityPolicyIds'])) {
            if (!empty($map['SecurityPolicyIds'])) {
                $model->securityPolicyIds = $map['SecurityPolicyIds'];
            }
        }
        if (isset($map['SecurityPolicyNames'])) {
            if (!empty($map['SecurityPolicyNames'])) {
                $model->securityPolicyNames = $map['SecurityPolicyNames'];
            }
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
