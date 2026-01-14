<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20230516\Models;

use AlibabaCloud\Dara\Model;

class TaskCallListRequest extends Model
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
     * @var string[]
     */
    public $intentTags;

    /**
     * @var string[]
     */
    public $numbers;

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
        'intentTags' => 'IntentTags',
        'numbers' => 'Numbers',
        'ownerId' => 'OwnerId',
        'page' => 'Page',
        'pageSize' => 'PageSize',
        'resourceOwnerAccount' => 'ResourceOwnerAccount',
        'resourceOwnerId' => 'ResourceOwnerId',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        if (\is_array($this->intentTags)) {
            Model::validateArray($this->intentTags);
        }
        if (\is_array($this->numbers)) {
            Model::validateArray($this->numbers);
        }
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

        if (null !== $this->intentTags) {
            if (\is_array($this->intentTags)) {
                $res['IntentTags'] = [];
                $n1 = 0;
                foreach ($this->intentTags as $item1) {
                    $res['IntentTags'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->numbers) {
            if (\is_array($this->numbers)) {
                $res['Numbers'] = [];
                $n1 = 0;
                foreach ($this->numbers as $item1) {
                    $res['Numbers'][$n1] = $item1;
                    ++$n1;
                }
            }
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
            if (!empty($map['IntentTags'])) {
                $model->intentTags = [];
                $n1 = 0;
                foreach ($map['IntentTags'] as $item1) {
                    $model->intentTags[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Numbers'])) {
            if (!empty($map['Numbers'])) {
                $model->numbers = [];
                $n1 = 0;
                foreach ($map['Numbers'] as $item1) {
                    $model->numbers[$n1] = $item1;
                    ++$n1;
                }
            }
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
