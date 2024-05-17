<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Tea\Model;

class DescribeTransitRouteTableAggregationRequest extends Model
{
    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * >  If you do not set this parameter, ClientToken is set to the value of RequestId. The value of RequestId for each API request may be different.
     * @example 02fb3da4-130e-11e9-8e44-001****
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The number of entries to return on each page. Default value: **20**.
     *
     * @example 20
     *
     * @var int
     */
    public $maxResults;

    /**
     * @description The token that determines the start point of the query. Valid values:
     *
     *   If this is your first query or no subsequent query is to be sent, ignore this parameter.
     *   If a next query is to be sent, set the value to the value of **NextToken** that is returned from the last call.
     *
     * @example FFmyTO70tTpLG6I3FmYAXGKPd****
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
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @description The destination CIDR block of the aggregate route.
     *
     * @example 192.168.10.0/24
     *
     * @var string
     */
    public $transitRouteTableAggregationCidr;

    /**
     * @description The ID of the route table of the Enterprise Edition transit router.
     *
     * This parameter is required.
     * @example vtb-6ehgc262hr170qgyc****
     *
     * @var string
     */
    public $transitRouteTableId;
    protected $_name = [
        'clientToken'                      => 'ClientToken',
        'maxResults'                       => 'MaxResults',
        'nextToken'                        => 'NextToken',
        'ownerAccount'                     => 'OwnerAccount',
        'ownerId'                          => 'OwnerId',
        'resourceOwnerAccount'             => 'ResourceOwnerAccount',
        'resourceOwnerId'                  => 'ResourceOwnerId',
        'transitRouteTableAggregationCidr' => 'TransitRouteTableAggregationCidr',
        'transitRouteTableId'              => 'TransitRouteTableId',
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
        if (null !== $this->maxResults) {
            $res['MaxResults'] = $this->maxResults;
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
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }
        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
        }
        if (null !== $this->transitRouteTableAggregationCidr) {
            $res['TransitRouteTableAggregationCidr'] = $this->transitRouteTableAggregationCidr;
        }
        if (null !== $this->transitRouteTableId) {
            $res['TransitRouteTableId'] = $this->transitRouteTableId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeTransitRouteTableAggregationRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['MaxResults'])) {
            $model->maxResults = $map['MaxResults'];
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
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }
        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }
        if (isset($map['TransitRouteTableAggregationCidr'])) {
            $model->transitRouteTableAggregationCidr = $map['TransitRouteTableAggregationCidr'];
        }
        if (isset($map['TransitRouteTableId'])) {
            $model->transitRouteTableId = $map['TransitRouteTableId'];
        }

        return $model;
    }
}
