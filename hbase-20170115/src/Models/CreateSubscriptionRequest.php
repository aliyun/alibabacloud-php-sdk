<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\HBase\V20170115\Models;

use AlibabaCloud\Tea\Model;

class CreateSubscriptionRequest extends Model
{
    /**
     * @var string
     */
    public $destinationInstanceId;

    /**
     * @var string
     */
    public $destinationInstanceRegionId;

    /**
     * @var string
     */
    public $extraContext;

    /**
     * @var string
     */
    public $mapping;

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
    public $slbServer;

    /**
     * @var string
     */
    public $sourceInstanceId;

    /**
     * @var string
     */
    public $sourceInstanceRegionId;

    /**
     * @var string
     */
    public $subscriptionDescription;

    /**
     * @var string
     */
    public $subscriptionType;

    /**
     * @var string
     */
    public $zoneId;
    protected $_name = [
        'destinationInstanceId'       => 'DestinationInstanceId',
        'destinationInstanceRegionId' => 'DestinationInstanceRegionId',
        'extraContext'                => 'ExtraContext',
        'mapping'                     => 'Mapping',
        'ownerId'                     => 'OwnerId',
        'resourceOwnerAccount'        => 'ResourceOwnerAccount',
        'resourceOwnerId'             => 'ResourceOwnerId',
        'slbServer'                   => 'SlbServer',
        'sourceInstanceId'            => 'SourceInstanceId',
        'sourceInstanceRegionId'      => 'SourceInstanceRegionId',
        'subscriptionDescription'     => 'SubscriptionDescription',
        'subscriptionType'            => 'SubscriptionType',
        'zoneId'                      => 'ZoneId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->destinationInstanceId) {
            $res['DestinationInstanceId'] = $this->destinationInstanceId;
        }
        if (null !== $this->destinationInstanceRegionId) {
            $res['DestinationInstanceRegionId'] = $this->destinationInstanceRegionId;
        }
        if (null !== $this->extraContext) {
            $res['ExtraContext'] = $this->extraContext;
        }
        if (null !== $this->mapping) {
            $res['Mapping'] = $this->mapping;
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
        if (null !== $this->slbServer) {
            $res['SlbServer'] = $this->slbServer;
        }
        if (null !== $this->sourceInstanceId) {
            $res['SourceInstanceId'] = $this->sourceInstanceId;
        }
        if (null !== $this->sourceInstanceRegionId) {
            $res['SourceInstanceRegionId'] = $this->sourceInstanceRegionId;
        }
        if (null !== $this->subscriptionDescription) {
            $res['SubscriptionDescription'] = $this->subscriptionDescription;
        }
        if (null !== $this->subscriptionType) {
            $res['SubscriptionType'] = $this->subscriptionType;
        }
        if (null !== $this->zoneId) {
            $res['ZoneId'] = $this->zoneId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSubscriptionRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DestinationInstanceId'])) {
            $model->destinationInstanceId = $map['DestinationInstanceId'];
        }
        if (isset($map['DestinationInstanceRegionId'])) {
            $model->destinationInstanceRegionId = $map['DestinationInstanceRegionId'];
        }
        if (isset($map['ExtraContext'])) {
            $model->extraContext = $map['ExtraContext'];
        }
        if (isset($map['Mapping'])) {
            $model->mapping = $map['Mapping'];
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
        if (isset($map['SlbServer'])) {
            $model->slbServer = $map['SlbServer'];
        }
        if (isset($map['SourceInstanceId'])) {
            $model->sourceInstanceId = $map['SourceInstanceId'];
        }
        if (isset($map['SourceInstanceRegionId'])) {
            $model->sourceInstanceRegionId = $map['SourceInstanceRegionId'];
        }
        if (isset($map['SubscriptionDescription'])) {
            $model->subscriptionDescription = $map['SubscriptionDescription'];
        }
        if (isset($map['SubscriptionType'])) {
            $model->subscriptionType = $map['SubscriptionType'];
        }
        if (isset($map['ZoneId'])) {
            $model->zoneId = $map['ZoneId'];
        }

        return $model;
    }
}
