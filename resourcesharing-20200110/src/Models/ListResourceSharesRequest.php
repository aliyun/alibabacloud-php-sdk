<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceSharing\V20200110\Models;

use AlibabaCloud\SDK\ResourceSharing\V20200110\Models\ListResourceSharesRequest\tag;
use AlibabaCloud\Tea\Model;

class ListResourceSharesRequest extends Model
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
     * @description The name of the permission. For more information, see [Permission library](https://help.aliyun.com/document_detail/465474.html).
     *
     * @example AliyunRSDefaultPermissionVSwitch
     *
     * @var string
     */
    public $permissionName;

    /**
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The owner of the resource shares. Valid values:
     *
     *   Self: the current account
     *   OtherAccounts: an account other than the current account
     *
     * This parameter is required.
     * @example Self
     *
     * @var string
     */
    public $resourceOwner;

    /**
     * @description The ID of a resource share.
     *
     * @example rs-PqysnzIj****
     *
     * @var string[]
     */
    public $resourceShareIds;

    /**
     * @description The name of the resource share.
     *
     * @example test
     *
     * @var string
     */
    public $resourceShareName;

    /**
     * @description The status of the resource share. Valid values:
     *
     *   Active: The resource share is enabled.
     *   Pending: The resource share is associated with one or more resource sharing invitations that are waiting for confirmation.
     *   Deleting: The resource share is being deleted.
     *   Deleted: The resource share is deleted.
     *
     * >  The system deletes the records of resource shares in the Deleted state within 48 hours to 96 hours after you delete the resource shares.
     * @example Active
     *
     * @var string
     */
    public $resourceShareStatus;

    /**
     * @var tag[]
     */
    public $tag;
    protected $_name = [
        'maxResults'          => 'MaxResults',
        'nextToken'           => 'NextToken',
        'permissionName'      => 'PermissionName',
        'resourceGroupId'     => 'ResourceGroupId',
        'resourceOwner'       => 'ResourceOwner',
        'resourceShareIds'    => 'ResourceShareIds',
        'resourceShareName'   => 'ResourceShareName',
        'resourceShareStatus' => 'ResourceShareStatus',
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
        if (null !== $this->permissionName) {
            $res['PermissionName'] = $this->permissionName;
        }
        if (null !== $this->resourceGroupId) {
            $res['ResourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->resourceOwner) {
            $res['ResourceOwner'] = $this->resourceOwner;
        }
        if (null !== $this->resourceShareIds) {
            $res['ResourceShareIds'] = $this->resourceShareIds;
        }
        if (null !== $this->resourceShareName) {
            $res['ResourceShareName'] = $this->resourceShareName;
        }
        if (null !== $this->resourceShareStatus) {
            $res['ResourceShareStatus'] = $this->resourceShareStatus;
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
     * @return ListResourceSharesRequest
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
        if (isset($map['PermissionName'])) {
            $model->permissionName = $map['PermissionName'];
        }
        if (isset($map['ResourceGroupId'])) {
            $model->resourceGroupId = $map['ResourceGroupId'];
        }
        if (isset($map['ResourceOwner'])) {
            $model->resourceOwner = $map['ResourceOwner'];
        }
        if (isset($map['ResourceShareIds'])) {
            if (!empty($map['ResourceShareIds'])) {
                $model->resourceShareIds = $map['ResourceShareIds'];
            }
        }
        if (isset($map['ResourceShareName'])) {
            $model->resourceShareName = $map['ResourceShareName'];
        }
        if (isset($map['ResourceShareStatus'])) {
            $model->resourceShareStatus = $map['ResourceShareStatus'];
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
