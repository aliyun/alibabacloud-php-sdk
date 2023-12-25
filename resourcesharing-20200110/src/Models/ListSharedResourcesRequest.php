<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\Tea\Model;

class ListSharedResourcesRequest extends Model
{
    /**
     * @description The maximum number of entries to return for a single request.
     *
     * Valid values: 1 to 100. Default value: 20.
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The `token` that is used to initiate the next request. If the response of the current request is truncated, you can use the token to initiate another request and obtain the remaining records.
     *
     * @example TGlzdFJlc291cm****
     *
     * @var string
     */
    public $nextToken;

    /**
     * @description The ID of a shared resource.
     *
     * @example vsw-bp1upw03qyz8n7us9****
     *
     * @var string[]
     */
    public $resourceIds;

    /**
     * @description The owner of the resource shares. Valid values:
     *
     *   Self: your account. If you set the value to Self, the resources you share with other accounts are queried.
     *   OtherAccounts: another account. If you set the value to OtherAccounts, the resources other accounts share with you are queried.
     *
     * @example Self
     *
     * @var string
     */
    public $resourceOwner;

    /**
     * @description The ID of a resource share.
     *
     * @example rs-6GRmdD3X****
     *
     * @var string[]
     */
    public $resourceShareIds;

    /**
     * @description The type of the shared resources.
     *
     * For more information about the types of resources that can be shared, see [Services that work with Resource Sharing](~~450526~~).
     * @example VSwitch
     *
     * @var string
     */
    public $resourceType;

    /**
     * @description The ID of the principal or resource owner.
     *
     *   If the value of `ResourceOwner` is `Self`, set this parameter to the ID of a principal.
     *   If the value of `ResourceOwner` is `OtherAccounts`, set this parameter to the ID of a resource owner.
     *
     * @example 172050525300****
     *
     * @var string
     */
    public $target;
    protected $_name = [
        'maxResults'       => 'MaxResults',
        'nextToken'        => 'NextToken',
        'resourceIds'      => 'ResourceIds',
        'resourceOwner'    => 'ResourceOwner',
        'resourceShareIds' => 'ResourceShareIds',
        'resourceType'     => 'ResourceType',
        'target'           => 'Target',
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
        if (null !== $this->resourceIds) {
            $res['ResourceIds'] = $this->resourceIds;
        }
        if (null !== $this->resourceOwner) {
            $res['ResourceOwner'] = $this->resourceOwner;
        }
        if (null !== $this->resourceShareIds) {
            $res['ResourceShareIds'] = $this->resourceShareIds;
        }
        if (null !== $this->resourceType) {
            $res['ResourceType'] = $this->resourceType;
        }
        if (null !== $this->target) {
            $res['Target'] = $this->target;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListSharedResourcesRequest
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
        if (isset($map['ResourceIds'])) {
            if (!empty($map['ResourceIds'])) {
                $model->resourceIds = $map['ResourceIds'];
            }
        }
        if (isset($map['ResourceOwner'])) {
            $model->resourceOwner = $map['ResourceOwner'];
        }
        if (isset($map['ResourceShareIds'])) {
            if (!empty($map['ResourceShareIds'])) {
                $model->resourceShareIds = $map['ResourceShareIds'];
            }
        }
        if (isset($map['ResourceType'])) {
            $model->resourceType = $map['ResourceType'];
        }
        if (isset($map['Target'])) {
            $model->target = $map['Target'];
        }

        return $model;
    }
}
