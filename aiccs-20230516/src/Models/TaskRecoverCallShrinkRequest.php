<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516\Models;

use AlibabaCloud\Dara\Model;

class TaskRecoverCallShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $beginImportTime;

    /**
     * @var string
     */
    public $endImportTime;

    /**
     * @var string
     */
    public $numbersShrink;

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
    public $tagsShrink;

    /**
     * @var int
     */
    public $taskId;
    protected $_name = [
        'beginImportTime' => 'BeginImportTime',
        'endImportTime' => 'EndImportTime',
        'numbersShrink' => 'Numbers',
        'ownerId' => 'OwnerId',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'tagsShrink' => 'Tags',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->beginImportTime) {
            $res['BeginImportTime'] = $this->beginImportTime;
        }

        if (null !== $this->endImportTime) {
            $res['EndImportTime'] = $this->endImportTime;
        }

        if (null !== $this->numbersShrink) {
            $res['Numbers'] = $this->numbersShrink;
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

        if (null !== $this->tagsShrink) {
            $res['Tags'] = $this->tagsShrink;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['BeginImportTime'])) {
            $model->beginImportTime = $map['BeginImportTime'];
        }

        if (isset($map['EndImportTime'])) {
            $model->endImportTime = $map['EndImportTime'];
        }

        if (isset($map['Numbers'])) {
            $model->numbersShrink = $map['Numbers'];
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

        if (isset($map['Tags'])) {
            $model->tagsShrink = $map['Tags'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
