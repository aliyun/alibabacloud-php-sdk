<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dyvmsapi\V20170525\Models;

use AlibabaCloud\Dara\Model;

class CloudCreateQueueShrinkRequest extends Model
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
     * @var string
     */
    public $queueShrink;

    /**
     * @var string
     */
    public $queueSkillsShrink;

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
        'queueShrink' => 'Queue',
        'queueSkillsShrink' => 'QueueSkills',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
    ];

    public function validate()
    {
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

        if (null !== $this->queueShrink) {
            $res['Queue'] = $this->queueShrink;
        }

        if (null !== $this->queueSkillsShrink) {
            $res['QueueSkills'] = $this->queueSkillsShrink;
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
            $model->queueShrink = $map['Queue'];
        }

        if (isset($map['QueueSkills'])) {
            $model->queueSkillsShrink = $map['QueueSkills'];
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
