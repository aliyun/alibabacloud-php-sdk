<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudCreateQueueRequest\queue;
use AlibabaCloud\SDK\Dyvmsapi\V20170525\Models\CloudCreateQueueRequest\queueSkills;

class CloudCreateQueueRequest extends Model
{
    /**
     * @var int
     */
    public $enterpriseId;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var queue
     */
    public $queue;

    /**
     * @var queueSkills[]
     */
    public $queueSkills;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;
    protected $_name = [
        'enterpriseId' => 'EnterpriseId',
        'ownerId' => 'OwnerId',
        'queue' => 'Queue',
        'queueSkills' => 'QueueSkills',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate()
    {
        if (null !== $this->queue) {
            $this->queue->validate();
        }
        if (\is_array($this->queueSkills)) {
            Model::validateArray($this->queueSkills);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->enterpriseId) {
            $res['EnterpriseId'] = $this->enterpriseId;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->queue) {
            $res['Queue'] = null !== $this->queue ? $this->queue->toArray($noStream) : $this->queue;
        }

        if (null !== $this->queueSkills) {
            if (\is_array($this->queueSkills)) {
                $res['QueueSkills'] = [];
                $n1 = 0;
                foreach ($this->queueSkills as $item1) {
                    $res['QueueSkills'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
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
        if (isset($map['EnterpriseId'])) {
            $model->enterpriseId = $map['EnterpriseId'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['Queue'])) {
            $model->queue = queue::fromMap($map['Queue']);
        }

        if (isset($map['QueueSkills'])) {
            if (!empty($map['QueueSkills'])) {
                $model->queueSkills = [];
                $n1 = 0;
                foreach ($map['QueueSkills'] as $item1) {
                    $model->queueSkills[$n1] = queueSkills::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        return $model;
    }
}
