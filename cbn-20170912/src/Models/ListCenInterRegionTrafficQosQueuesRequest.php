<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cbn\V20170912\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cbn\V20170912\Models\ListCenInterRegionTrafficQosQueuesRequest\effectiveBandwidthFilter;

class ListCenInterRegionTrafficQosQueuesRequest extends Model
{
    /**
     * @var effectiveBandwidthFilter
     */
    public $effectiveBandwidthFilter;
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
    public $trafficQosPolicyId;
    /**
     * @var string
     */
    public $trafficQosQueueDescription;
    /**
     * @var string
     */
    public $trafficQosQueueId;
    /**
     * @var string
     */
    public $trafficQosQueueName;
    /**
     * @var string
     */
    public $transitRouterAttachmentId;
    /**
     * @var string
     */
    public $transitRouterId;
    protected $_name = [
        'effectiveBandwidthFilter'   => 'EffectiveBandwidthFilter',
        'maxResults'                 => 'MaxResults',
        'nextToken'                  => 'NextToken',
        'ownerAccount'               => 'OwnerAccount',
        'ownerId'                    => 'OwnerId',
        'resourceOwnerAccount'       => 'ResourceOwnerAccount',
        'resourceOwnerId'            => 'ResourceOwnerId',
        'trafficQosPolicyId'         => 'TrafficQosPolicyId',
        'trafficQosQueueDescription' => 'TrafficQosQueueDescription',
        'trafficQosQueueId'          => 'TrafficQosQueueId',
        'trafficQosQueueName'        => 'TrafficQosQueueName',
        'transitRouterAttachmentId'  => 'TransitRouterAttachmentId',
        'transitRouterId'            => 'TransitRouterId',
    ];

    public function validate()
    {
        if (null !== $this->effectiveBandwidthFilter) {
            $this->effectiveBandwidthFilter->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->effectiveBandwidthFilter) {
            $res['EffectiveBandwidthFilter'] = null !== $this->effectiveBandwidthFilter ? $this->effectiveBandwidthFilter->toArray($noStream) : $this->effectiveBandwidthFilter;
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

        if (null !== $this->trafficQosPolicyId) {
            $res['TrafficQosPolicyId'] = $this->trafficQosPolicyId;
        }

        if (null !== $this->trafficQosQueueDescription) {
            $res['TrafficQosQueueDescription'] = $this->trafficQosQueueDescription;
        }

        if (null !== $this->trafficQosQueueId) {
            $res['TrafficQosQueueId'] = $this->trafficQosQueueId;
        }

        if (null !== $this->trafficQosQueueName) {
            $res['TrafficQosQueueName'] = $this->trafficQosQueueName;
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
        if (isset($map['EffectiveBandwidthFilter'])) {
            $model->effectiveBandwidthFilter = effectiveBandwidthFilter::fromMap($map['EffectiveBandwidthFilter']);
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

        if (isset($map['TrafficQosPolicyId'])) {
            $model->trafficQosPolicyId = $map['TrafficQosPolicyId'];
        }

        if (isset($map['TrafficQosQueueDescription'])) {
            $model->trafficQosQueueDescription = $map['TrafficQosQueueDescription'];
        }

        if (isset($map['TrafficQosQueueId'])) {
            $model->trafficQosQueueId = $map['TrafficQosQueueId'];
        }

        if (isset($map['TrafficQosQueueName'])) {
            $model->trafficQosQueueName = $map['TrafficQosQueueName'];
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
