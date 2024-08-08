<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateExpressConnectTrafficQosQueueRequest extends Model
{
    /**
     * @description The percentage of bandwidth allocated to the QoS queue.
     *
     *   If QueueType is set to **Medium**, this parameter is required. Valid values: 1 to 100.
     *   If QueueType is set to **Default**, a value of - is returned.
     *
     * @example 100
     *
     * @var string
     */
    public $bandwidthPercent;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the value, but you must make sure that it is unique among all requests. ClientToken can contain only ASCII characters.
     *
     * >  If you do not specify this parameter, **ClientToken** is set to the value of **RequestId**. The value of **RequestId** for each API request may be different.
     * @example 0c593ea1-3bea-11e9-b96b-88e9fe637760
     *
     * @var string
     */
    public $clientToken;

    /**
     * @var string
     */
    public $ownerAccount;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @description The ID of the QoS policy.
     *
     * This parameter is required.
     * @example qos-2giu0a6vd5x0mv4700
     *
     * @var string
     */
    public $qosId;

    /**
     * @description The description of the QoS queue.
     *
     * It must be 0 to 256 characters in length and cannot start with `http://` or `https://`.
     * @example qos-queue-test
     *
     * @var string
     */
    public $queueDescription;

    /**
     * @description The name of the QoS queue.
     *
     * It must be 0 to 128 characters in length and cannot start with `http://` or `https://`.
     * @example qos-queue-test
     *
     * @var string
     */
    public $queueName;

    /**
     * @description The priority of the QoS queue. Valid values:
     *
     *   **High**
     *   **Medium**
     *   **Default**: default queue.
     *
     * This parameter is required.
     * @example High
     *
     * @var string
     */
    public $queueType;

    /**
     * @description The region ID of the QoS policy.
     *
     * This parameter is required.
     * @example cn-shanghai
     *
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;
    protected $_name = [
        'bandwidthPercent'     => 'BandwidthPercent',
        'clientToken'          => 'ClientToken',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'qosId'                => 'QosId',
        'queueDescription'     => 'QueueDescription',
        'queueName'            => 'QueueName',
        'queueType'            => 'QueueType',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bandwidthPercent) {
            $res['BandwidthPercent'] = $this->bandwidthPercent;
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->qosId) {
            $res['QosId'] = $this->qosId;
        }
        if (null !== $this->queueDescription) {
            $res['QueueDescription'] = $this->queueDescription;
        }
        if (null !== $this->queueName) {
            $res['QueueName'] = $this->queueName;
        }
        if (null !== $this->queueType) {
            $res['QueueType'] = $this->queueType;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }
        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateExpressConnectTrafficQosQueueRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BandwidthPercent'])) {
            $model->bandwidthPercent = $map['BandwidthPercent'];
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['OwnerAccount'])) {
            $model->ownerAccount = $map['OwnerAccount'];
        }
        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }
        if (isset($map['QosId'])) {
            $model->qosId = $map['QosId'];
        }
        if (isset($map['QueueDescription'])) {
            $model->queueDescription = $map['QueueDescription'];
        }
        if (isset($map['QueueName'])) {
            $model->queueName = $map['QueueName'];
        }
        if (isset($map['QueueType'])) {
            $model->queueType = $map['QueueType'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }
        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        return $model;
    }
}
