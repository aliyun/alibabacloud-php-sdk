<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;

class ListCenInterRegionTrafficQosPoliciesRequest extends Model
{
    /**
     * @var int
     */
    public $maxResults;
    /**
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
     * @var string
     */
    public $trafficQosPolicyDescription;
    /**
     * @var string
     */
    public $trafficQosPolicyId;
    /**
     * @var string
     */
    public $trafficQosPolicyName;
    /**
     * @var string
     */
    public $transitRouterAttachmentId;
    /**
     * @var string
     */
    public $transitRouterId;
    protected $_name = [
        'maxResults'                  => 'MaxResults',
        'nextToken'                   => 'NextToken',
        'ownerAccount'                => 'OwnerAccount',
        'ownerId'                     => 'OwnerId',
        'resourceOwnerAccount'        => 'ResourceOwnerAccount',
        'resourceOwnerId'             => 'ResourceOwnerId',
        'trafficQosPolicyDescription' => 'TrafficQosPolicyDescription',
        'trafficQosPolicyId'          => 'TrafficQosPolicyId',
        'trafficQosPolicyName'        => 'TrafficQosPolicyName',
        'transitRouterAttachmentId'   => 'TransitRouterAttachmentId',
        'transitRouterId'             => 'TransitRouterId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->trafficQosPolicyDescription) {
            $res['TrafficQosPolicyDescription'] = $this->trafficQosPolicyDescription;
        }

        if (null !== $this->trafficQosPolicyId) {
            $res['TrafficQosPolicyId'] = $this->trafficQosPolicyId;
        }

        if (null !== $this->trafficQosPolicyName) {
            $res['TrafficQosPolicyName'] = $this->trafficQosPolicyName;
        }

        if (null !== $this->transitRouterAttachmentId) {
            $res['TransitRouterAttachmentId'] = $this->transitRouterAttachmentId;
        }

        if (null !== $this->transitRouterId) {
            $res['TransitRouterId'] = $this->transitRouterId;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
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

        if (isset($map['TrafficQosPolicyDescription'])) {
            $model->trafficQosPolicyDescription = $map['TrafficQosPolicyDescription'];
        }

        if (isset($map['TrafficQosPolicyId'])) {
            $model->trafficQosPolicyId = $map['TrafficQosPolicyId'];
        }

        if (isset($map['TrafficQosPolicyName'])) {
            $model->trafficQosPolicyName = $map['TrafficQosPolicyName'];
        }

        if (isset($map['TransitRouterAttachmentId'])) {
            $model->transitRouterAttachmentId = $map['TransitRouterAttachmentId'];
        }

        if (isset($map['TransitRouterId'])) {
            $model->transitRouterId = $map['TransitRouterId'];
        }

        return $model;
    }
}
