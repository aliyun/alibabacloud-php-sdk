<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eci\V20180808\Models;

use AlibabaCloud\SDK\Eci\V20180808\Models\DescribeVirtualNodesRequest\tag;
use AlibabaCloud\Tea\Model;

class DescribeVirtualNodesRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request. You can use the client to generate the value, but you must ensure that it is unique among different requests. The token can only contain ASCII characters and cannot exceed 64 characters in length. For more information, see [How to ensure idempotency of requests?](https://help.aliyun.com/document_detail/25693.html)
     *
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The maximum number of resources that are allowed to return for this request. Default value: 20. Maximum value: 20.
     *
     * >  The number of returned resources is less than or equal to the specified number.
     * @example 20
     *
     * @var int
     */
    public $limit;

    /**
     * @description The token that determines the start point of the next query. If this parameter is empty, all results have been returned.
     *
     * You do not need to specify this parameter in the first request. From the second request, you can obtain the token from the result returned by the previous request.
     * @example d78f2dd8-5979-42fe-****-b16db43be5bc
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
     * @description The region ID of the virtual nodes.
     *
     * This parameter is required.
     * @example cn-hangzhou
     *
     * @var string
     */
    public $regionId;

    /**
     * @description The ID of the resource group.
     *
     * @example rg-uf66jeqopgqa9hdn****
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
     * @description The status of the virtual node. Valid values:
     *
     *   Pending
     *   Ready
     *   Failed
     *
     * @example Ready
     *
     * @var string
     */
    public $status;

    /**
     * @description The tags that are bound to the virtual node.
     *
     * @var tag[]
     */
    public $tag;

    /**
     * @description The IDs of the virtual nodes. You can specify up to 20 IDs. Each ID must be a string in the JSON format.
     *
     * @example ["vnd-2ze960zkdqrldeaw****","vnd-3ebzcviqbwt25dsz****"]
     *
     * @var string
     */
    public $virtualNodeIds;

    /**
     * @description The names of the virtual nodes.
     *
     * @example testNode
     *
     * @var string
     */
    public $virtualNodeName;
    protected $_name = [
        'clientToken'          => 'ClientToken',
        'limit'                => 'Limit',
        'nextToken'            => 'NextToken',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'regionId'             => 'RegionId',
        'resourceGroupId'      => 'ResourceGroupId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId'      => 'ResourceOwnerId',
        'status'               => 'Status',
        'tag'                  => 'Tag',
        'virtualNodeIds'       => 'VirtualNodeIds',
        'virtualNodeName'      => 'VirtualNodeName',
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
        if (null !== $this->limit) {
            $res['Limit'] = $this->limit;
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
        if (null !== $this->status) {
            $res['Status'] = $this->status;
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
        if (null !== $this->virtualNodeIds) {
            $res['VirtualNodeIds'] = $this->virtualNodeIds;
        }
        if (null !== $this->virtualNodeName) {
            $res['VirtualNodeName'] = $this->virtualNodeName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeVirtualNodesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['Limit'])) {
            $model->limit = $map['Limit'];
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
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
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
        if (isset($map['VirtualNodeIds'])) {
            $model->virtualNodeIds = $map['VirtualNodeIds'];
        }
        if (isset($map['VirtualNodeName'])) {
            $model->virtualNodeName = $map['VirtualNodeName'];
        }

        return $model;
    }
}
