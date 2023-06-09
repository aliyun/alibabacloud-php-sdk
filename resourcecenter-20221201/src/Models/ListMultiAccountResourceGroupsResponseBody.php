<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceCenter\V20221201\Models;

use AlibabaCloud\SDK\ResourceCenter\V20221201\Models\ListMultiAccountResourceGroupsResponseBody\resourceGroups;
use AlibabaCloud\Tea\Model;

class ListMultiAccountResourceGroupsResponseBody extends Model
{
    /**
     * @description The pagination token that is used in the next request to retrieve a new page of results.
     *
     * @example AAAAAU5VsT9R1adMTuz9GzginZ3Y+7Y/5JATS+6q5GK9kT75
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of the request.
     *
     * @example 0FF0A66E-781F-51EE-9531-928F197558F2
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The information about the resource groups.
     *
     * @var resourceGroups[]
     */
    public $resourceGroups;
    protected $_name = [
        'nextToken'      => 'NextToken',
        'requestId'      => 'RequestId',
        'resourceGroups' => 'ResourceGroups',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->nextToken) {
            $res['NextToken'] = $this->nextToken;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->resourceGroups) {
            $res['ResourceGroups'] = [];
            if (null !== $this->resourceGroups && \is_array($this->resourceGroups)) {
                $n = 0;
                foreach ($this->resourceGroups as $item) {
                    $res['ResourceGroups'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMultiAccountResourceGroupsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['ResourceGroups'])) {
            if (!empty($map['ResourceGroups'])) {
                $model->resourceGroups = [];
                $n                     = 0;
                foreach ($map['ResourceGroups'] as $item) {
                    $model->resourceGroups[$n++] = null !== $item ? resourceGroups::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
