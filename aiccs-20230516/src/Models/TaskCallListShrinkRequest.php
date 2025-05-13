<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516\Models;

use AlibabaCloud\Dara\Model;

class TaskCallListShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $batchId;

    /**
     * @var string
     */
    public $callDate;

    /**
     * @var string
     */
    public $endCallDate;

    /**
     * @var string
     */
    public $intentTagsShrink;

    /**
     * @var string
     */
    public $numbersShrink;

    /**
     * @var int
     */
    public $ownerId;

    /**
     * @var int
     */
    public $page;

    /**
     * @var int
     */
    public $pageSize;

    /**
     * @var string
     */
    public $resourceOwnerAccount;

    /**
     * @var int
     */
    public $resourceOwnerId;

    /**
     * @var int
     */
    public $taskId;
    protected $_name = [
        'batchId' => 'BatchId',
        'callDate' => 'CallDate',
        'endCallDate' => 'EndCallDate',
        'intentTagsShrink' => 'IntentTags',
        'numbersShrink' => 'Numbers',
        'ownerId' => 'OwnerId',
        'page' => 'Page',
        'pageSize' => 'PageSize',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->batchId) {
            $res['BatchId'] = $this->batchId;
        }

        if (null !== $this->callDate) {
            $res['CallDate'] = $this->callDate;
        }

        if (null !== $this->endCallDate) {
            $res['EndCallDate'] = $this->endCallDate;
        }

        if (null !== $this->intentTagsShrink) {
            $res['IntentTags'] = $this->intentTagsShrink;
        }

        if (null !== $this->numbersShrink) {
            $res['Numbers'] = $this->numbersShrink;
        }

        if (null !== $this->ownerId) {
            $res['OwnerId'] = $this->ownerId;
        }

        if (null !== $this->page) {
            $res['Page'] = $this->page;
        }

        if (null !== $this->pageSize) {
            $res['PageSize'] = $this->pageSize;
        }

        if (null !== $this->resourceOwnerAccount) {
            $res['ResourceOwnerAccount'] = $this->resourceOwnerAccount;
        }

        if (null !== $this->resourceOwnerId) {
            $res['ResourceOwnerId'] = $this->resourceOwnerId;
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
        if (isset($map['BatchId'])) {
            $model->batchId = $map['BatchId'];
        }

        if (isset($map['CallDate'])) {
            $model->callDate = $map['CallDate'];
        }

        if (isset($map['EndCallDate'])) {
            $model->endCallDate = $map['EndCallDate'];
        }

        if (isset($map['IntentTags'])) {
            $model->intentTagsShrink = $map['IntentTags'];
        }

        if (isset($map['Numbers'])) {
            $model->numbersShrink = $map['Numbers'];
        }

        if (isset($map['OwnerId'])) {
            $model->ownerId = $map['OwnerId'];
        }

        if (isset($map['Page'])) {
            $model->page = $map['Page'];
        }

        if (isset($map['PageSize'])) {
            $model->pageSize = $map['PageSize'];
        }

        if (isset($map['ResourceOwnerAccount'])) {
            $model->resourceOwnerAccount = $map['ResourceOwnerAccount'];
        }

        if (isset($map['ResourceOwnerId'])) {
            $model->resourceOwnerId = $map['ResourceOwnerId'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
