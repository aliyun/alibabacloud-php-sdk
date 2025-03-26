<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;

class DescribeExpressConnectTrafficQosQueueRequest extends Model
{
    /**
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
     * @var string
     */
    public $regionId;

    /**
     * @var string
     */
    public $resourceOwnerAccount;
    protected $_name = [
        'clientToken' => 'ClientToken',
        'ownerAccount' => 'OwnerAccount',
        'ownerId' => 'OwnerId',
        'qosId' => 'QosId',
        'queueIdList' => 'QueueIdList',
        'queueNameList' => 'QueueNameList',
        'regionId' => 'RegionId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
    ];

    public function validate()
    {
        if (\is_array($this->queueIdList)) {
            Model::validateArray($this->queueIdList);
        }
        if (\is_array($this->queueNameList)) {
            Model::validateArray($this->queueNameList);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            if (\is_array($this->queueIdList)) {
                $res['QueueIdList'] = [];
                $n1 = 0;
                foreach ($this->queueIdList as $item1) {
                    $res['QueueIdList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->queueNameList) {
            if (\is_array($this->queueNameList)) {
                $res['QueueNameList'] = [];
                $n1 = 0;
                foreach ($this->queueNameList as $item1) {
                    $res['QueueNameList'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
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
                $model->queueIdList = [];
                $n1 = 0;
                foreach ($map['QueueIdList'] as $item1) {
                    $model->queueIdList[$n1++] = $item1;
                }
            }
        }

        if (isset($map['QueueNameList'])) {
            if (!empty($map['QueueNameList'])) {
                $model->queueNameList = [];
                $n1 = 0;
                foreach ($map['QueueNameList'] as $item1) {
                    $model->queueNameList[$n1++] = $item1;
                }
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
