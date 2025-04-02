<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTodoTaskResponseBody\contentFieldList;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTodoTaskResponseBody\detailUrl;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTodoTaskResponseBody\notifyConfigs;

class CreateTodoTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $bizTag;

    /**
     * @var contentFieldList[]
     */
    public $contentFieldList;

    /**
     * @var int
     */
    public $createdTime;

    /**
     * @var string
     */
    public $creatorId;

    /**
     * @var string
     */
    public $description;

    /**
     * @var detailUrl
     */
    public $detailUrl;

    /**
     * @var bool
     */
    public $done;

    /**
     * @var int
     */
    public $dueTime;

    /**
     * @var string[]
     */
    public $executorIds;

    /**
     * @var int
     */
    public $finishTime;

    /**
     * @var string
     */
    public $id;

    /**
     * @var bool
     */
    public $isOnlyShowExecutor;

    /**
     * @var int
     */
    public $modifiedTime;

    /**
     * @var string
     */
    public $modifierId;

    /**
     * @var notifyConfigs
     */
    public $notifyConfigs;

    /**
     * @var string[]
     */
    public $participantIds;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $source;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var int
     */
    public $startTime;

    /**
     * @var string
     */
    public $subject;
    protected $_name = [
        'bizTag' => 'bizTag',
        'contentFieldList' => 'contentFieldList',
        'createdTime' => 'createdTime',
        'creatorId' => 'creatorId',
        'description' => 'description',
        'detailUrl' => 'detailUrl',
        'done' => 'done',
        'dueTime' => 'dueTime',
        'executorIds' => 'executorIds',
        'finishTime' => 'finishTime',
        'id' => 'id',
        'isOnlyShowExecutor' => 'isOnlyShowExecutor',
        'modifiedTime' => 'modifiedTime',
        'modifierId' => 'modifierId',
        'notifyConfigs' => 'notifyConfigs',
        'participantIds' => 'participantIds',
        'priority' => 'priority',
        'requestId' => 'requestId',
        'source' => 'source',
        'sourceId' => 'sourceId',
        'startTime' => 'startTime',
        'subject' => 'subject',
    ];

    public function validate()
    {
        if (\is_array($this->contentFieldList)) {
            Model::validateArray($this->contentFieldList);
        }
        if (null !== $this->detailUrl) {
            $this->detailUrl->validate();
        }
        if (\is_array($this->executorIds)) {
            Model::validateArray($this->executorIds);
        }
        if (null !== $this->notifyConfigs) {
            $this->notifyConfigs->validate();
        }
        if (\is_array($this->participantIds)) {
            Model::validateArray($this->participantIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bizTag) {
            $res['bizTag'] = $this->bizTag;
        }

        if (null !== $this->contentFieldList) {
            if (\is_array($this->contentFieldList)) {
                $res['contentFieldList'] = [];
                $n1 = 0;
                foreach ($this->contentFieldList as $item1) {
                    $res['contentFieldList'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->createdTime) {
            $res['createdTime'] = $this->createdTime;
        }

        if (null !== $this->creatorId) {
            $res['creatorId'] = $this->creatorId;
        }

        if (null !== $this->description) {
            $res['description'] = $this->description;
        }

        if (null !== $this->detailUrl) {
            $res['detailUrl'] = null !== $this->detailUrl ? $this->detailUrl->toArray($noStream) : $this->detailUrl;
        }

        if (null !== $this->done) {
            $res['done'] = $this->done;
        }

        if (null !== $this->dueTime) {
            $res['dueTime'] = $this->dueTime;
        }

        if (null !== $this->executorIds) {
            if (\is_array($this->executorIds)) {
                $res['executorIds'] = [];
                $n1 = 0;
                foreach ($this->executorIds as $item1) {
                    $res['executorIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->finishTime) {
            $res['finishTime'] = $this->finishTime;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->isOnlyShowExecutor) {
            $res['isOnlyShowExecutor'] = $this->isOnlyShowExecutor;
        }

        if (null !== $this->modifiedTime) {
            $res['modifiedTime'] = $this->modifiedTime;
        }

        if (null !== $this->modifierId) {
            $res['modifierId'] = $this->modifierId;
        }

        if (null !== $this->notifyConfigs) {
            $res['notifyConfigs'] = null !== $this->notifyConfigs ? $this->notifyConfigs->toArray($noStream) : $this->notifyConfigs;
        }

        if (null !== $this->participantIds) {
            if (\is_array($this->participantIds)) {
                $res['participantIds'] = [];
                $n1 = 0;
                foreach ($this->participantIds as $item1) {
                    $res['participantIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->priority) {
            $res['priority'] = $this->priority;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->source) {
            $res['source'] = $this->source;
        }

        if (null !== $this->sourceId) {
            $res['sourceId'] = $this->sourceId;
        }

        if (null !== $this->startTime) {
            $res['startTime'] = $this->startTime;
        }

        if (null !== $this->subject) {
            $res['subject'] = $this->subject;
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
        if (isset($map['bizTag'])) {
            $model->bizTag = $map['bizTag'];
        }

        if (isset($map['contentFieldList'])) {
            if (!empty($map['contentFieldList'])) {
                $model->contentFieldList = [];
                $n1 = 0;
                foreach ($map['contentFieldList'] as $item1) {
                    $model->contentFieldList[$n1++] = contentFieldList::fromMap($item1);
                }
            }
        }

        if (isset($map['createdTime'])) {
            $model->createdTime = $map['createdTime'];
        }

        if (isset($map['creatorId'])) {
            $model->creatorId = $map['creatorId'];
        }

        if (isset($map['description'])) {
            $model->description = $map['description'];
        }

        if (isset($map['detailUrl'])) {
            $model->detailUrl = detailUrl::fromMap($map['detailUrl']);
        }

        if (isset($map['done'])) {
            $model->done = $map['done'];
        }

        if (isset($map['dueTime'])) {
            $model->dueTime = $map['dueTime'];
        }

        if (isset($map['executorIds'])) {
            if (!empty($map['executorIds'])) {
                $model->executorIds = [];
                $n1 = 0;
                foreach ($map['executorIds'] as $item1) {
                    $model->executorIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['finishTime'])) {
            $model->finishTime = $map['finishTime'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['isOnlyShowExecutor'])) {
            $model->isOnlyShowExecutor = $map['isOnlyShowExecutor'];
        }

        if (isset($map['modifiedTime'])) {
            $model->modifiedTime = $map['modifiedTime'];
        }

        if (isset($map['modifierId'])) {
            $model->modifierId = $map['modifierId'];
        }

        if (isset($map['notifyConfigs'])) {
            $model->notifyConfigs = notifyConfigs::fromMap($map['notifyConfigs']);
        }

        if (isset($map['participantIds'])) {
            if (!empty($map['participantIds'])) {
                $model->participantIds = [];
                $n1 = 0;
                foreach ($map['participantIds'] as $item1) {
                    $model->participantIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['priority'])) {
            $model->priority = $map['priority'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['source'])) {
            $model->source = $map['source'];
        }

        if (isset($map['sourceId'])) {
            $model->sourceId = $map['sourceId'];
        }

        if (isset($map['startTime'])) {
            $model->startTime = $map['startTime'];
        }

        if (isset($map['subject'])) {
            $model->subject = $map['subject'];
        }

        return $model;
    }
}
