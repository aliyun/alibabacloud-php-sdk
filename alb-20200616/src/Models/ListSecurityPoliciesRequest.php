<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\SDK\Alb\V20200616\Models\ListSecurityPoliciesRequest\tag;
use AlibabaCloud\Tea\Model;

class ListSecurityPoliciesRequest extends Model
{
    /**
     * @description The number of entries per page. Valid values: **1** to **100**. Default value: **20**.
     *
     * @example 50
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
     * @description The resource group ID.
     *
     * @example rg-atstuj3rtop****
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The security policy IDs. You can specify up to 20 IDs.
     *
     * @var string[]
     */
    public $securityPolicyIds;

    /**
     * @description The names of the security policies. You can specify up to 10 names.
     *
     * @var string[]
     */
    public $securityPolicyNames;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'maxResults'          => 'MaxResults',
        'nextToken'           => 'NextToken',
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
     * @return ListSecurityPoliciesRequest
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
