<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\ListTagResourcesRequest\tag;
use AlibabaCloud\Tea\Model;

class ListTagResourcesRequest extends Model
{
    /**
     * @description The token that is used to initiate the next request if the response of the current request is truncated. You can use the token to initiate another request and obtain the remaining records.
     *
     * @example caeba0bbb2be03f84eb48b699f0a4883
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The number of entries to return. If a response is truncated because it reaches the value of PageSize, the value of IsTruncated will be true.
     *
     * Valid values: 1 to 100. Default value: 100.
     * @example 2
     *
     * @var int
     */
    public $pageSize;

    /**
     * @var string[]
     */
    public $resourceId;

    /**
     * @var string[]
     */
    public $resourcePrincipalName;

    /**
     * @description The type of the resource. Valid values:
     *
     *   user: a RAM user
     *
     * @example user
     *
     * @var string
     */
    public $resourceType;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'nextToken'             => 'NextToken',
        'pageSize'              => 'PageSize',
        'resourceId'            => 'ResourceId',
        'resourcePrincipalName' => 'ResourcePrincipalName',
        'resourceType'          => 'ResourceType',
        'tag'                   => 'Tag',
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
        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }
        if (null !== $this->resourceId) {
            $res['ResourceId'] = $this->resourceId;
        }
        if (null !== $this->resourcePrincipalName) {
            $res['ResourcePrincipalName'] = $this->resourcePrincipalName;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
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
     * @return ListTagResourcesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NextToken'])) {
            $model->nextToken = $map['NextToken'];
        }
        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }
        if (isset($map['ResourceId'])) {
            if (!empty($map['ResourceId'])) {
                $model->resourceId = $map['ResourceId'];
            }
        }
        if (isset($map['ResourcePrincipalName'])) {
            if (!empty($map['ResourcePrincipalName'])) {
                $model->resourcePrincipalName = $map['ResourcePrincipalName'];
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
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
