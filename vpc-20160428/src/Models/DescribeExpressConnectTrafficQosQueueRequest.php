<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class DescribeExpressConnectTrafficQosQueueRequest extends Model
{
    /**
     * @example 0c593ea1-3bea-11e9-b96b-88e9fe63****
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
     * @example qos-2giu0a6vd5x0mv4700
     *
     * @var string
     */
    public $qosId;

    /**
     * @var string[]
     */
    public $queueIdList;

    /**
     * @var string[]
     */
    public $queueNameList;

    /**
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
        'clientToken'          => 'ClientToken',
        'ownerAccount'         => 'OwnerAccount',
        'ownerId'              => 'OwnerId',
        'qosId'                => 'QosId',
        'queueIdList'          => 'QueueIdList',
        'queueNameList'        => 'QueueNameList',
        'regionId'             => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
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
        if (null !== $this->ownerAccount) {
            $res['OwnerAccount'] = $this->ownerAccount;
        }
        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }
        if (null !== $this->qosId) {
            $res['QosId'] = $this->qosId;
        }
        if (null !== $this->queueIdList) {
            $res['QueueIdList'] = $this->queueIdList;
        }
        if (null !== $this->queueNameList) {
            $res['QueueNameList'] = $this->queueNameList;
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
     * @return DescribeExpressConnectTrafficQosQueueRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
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
        if (isset($map['QueueIdList'])) {
            if (!empty($map['QueueIdList'])) {
                $model->queueIdList = $map['QueueIdList'];
            }
        }
        if (isset($map['QueueNameList'])) {
            if (!empty($map['QueueNameList'])) {
                $model->queueNameList = $map['QueueNameList'];
            }
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
