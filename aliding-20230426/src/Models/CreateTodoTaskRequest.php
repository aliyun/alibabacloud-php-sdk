<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTodoTaskRequest\actionList;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTodoTaskRequest\contentFieldList;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTodoTaskRequest\detailUrl;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTodoTaskRequest\notifyConfigs;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTodoTaskRequest\remindNotifyConfigs;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTodoTaskRequest\tenantContext;

class CreateTodoTaskRequest extends Model
{
    /**
     * @var tenantContext
     */
    public $tenantContext;

    /**
     * @var actionList[]
     */
    public $actionList;

    /**
     * @var contentFieldList[]
     */
    public $contentFieldList;

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
     * @var int
     */
    public $dueTime;

    /**
     * @var string[]
     */
    public $executorIds;

    /**
     * @var bool
     */
    public $isOnlyShowExecutor;

    /**
     * @var notifyConfigs
     */
    public $notifyConfigs;

    /**
     * @var string
     */
    public $operatorId;

    /**
     * @var string[]
     */
    public $participantIds;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var remindNotifyConfigs
     */
    public $remindNotifyConfigs;

    /**
     * @var int
     */
    public $reminderTimeStamp;

    /**
     * @var string
     */
    public $sourceId;

    /**
     * @var string
     */
    public $subject;
    protected $_name = [
        'tenantContext' => 'TenantContext',
        'actionList' => 'actionList',
        'contentFieldList' => 'contentFieldList',
        'creatorId' => 'creatorId',
        'description' => 'description',
        'detailUrl' => 'detailUrl',
        'dueTime' => 'dueTime',
        'executorIds' => 'executorIds',
        'isOnlyShowExecutor' => 'isOnlyShowExecutor',
        'notifyConfigs' => 'notifyConfigs',
        'operatorId' => 'operatorId',
        'participantIds' => 'participantIds',
        'priority' => 'priority',
        'remindNotifyConfigs' => 'remindNotifyConfigs',
        'reminderTimeStamp' => 'reminderTimeStamp',
        'sourceId' => 'sourceId',
        'subject' => 'subject',
    ];

    public function validate()
    {
        if (null !== $this->tenantContext) {
            $this->tenantContext->validate();
        }
        if (\is_array($this->actionList)) {
            Model::validateArray($this->actionList);
        }
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
        if (null !== $this->remindNotifyConfigs) {
            $this->remindNotifyConfigs->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->tenantContext) {
            $res['TenantContext'] = null !== $this->tenantContext ? $this->tenantContext->toArray($noStream) : $this->tenantContext;
        }

        if (null !== $this->actionList) {
            if (\is_array($this->actionList)) {
                $res['actionList'] = [];
                $n1 = 0;
                foreach ($this->actionList as $item1) {
                    $res['actionList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->contentFieldList) {
            if (\is_array($this->contentFieldList)) {
                $res['contentFieldList'] = [];
                $n1 = 0;
                foreach ($this->contentFieldList as $item1) {
                    $res['contentFieldList'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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

        if (null !== $this->dueTime) {
            $res['dueTime'] = $this->dueTime;
        }

        if (null !== $this->executorIds) {
            if (\is_array($this->executorIds)) {
                $res['executorIds'] = [];
                $n1 = 0;
                foreach ($this->executorIds as $item1) {
                    $res['executorIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->isOnlyShowExecutor) {
            $res['isOnlyShowExecutor'] = $this->isOnlyShowExecutor;
        }

        if (null !== $this->notifyConfigs) {
            $res['notifyConfigs'] = null !== $this->notifyConfigs ? $this->notifyConfigs->toArray($noStream) : $this->notifyConfigs;
        }

        if (null !== $this->operatorId) {
            $res['operatorId'] = $this->operatorId;
        }

        if (null !== $this->participantIds) {
            if (\is_array($this->participantIds)) {
                $res['participantIds'] = [];
                $n1 = 0;
                foreach ($this->participantIds as $item1) {
                    $res['participantIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->priority) {
            $res['priority'] = $this->priority;
        }

        if (null !== $this->remindNotifyConfigs) {
            $res['remindNotifyConfigs'] = null !== $this->remindNotifyConfigs ? $this->remindNotifyConfigs->toArray($noStream) : $this->remindNotifyConfigs;
        }

        if (null !== $this->reminderTimeStamp) {
            $res['reminderTimeStamp'] = $this->reminderTimeStamp;
        }

        if (null !== $this->sourceId) {
            $res['sourceId'] = $this->sourceId;
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
        if (isset($map['TenantContext'])) {
            $model->tenantContext = tenantContext::fromMap($map['TenantContext']);
        }

        if (isset($map['actionList'])) {
            if (!empty($map['actionList'])) {
                $model->actionList = [];
                $n1 = 0;
                foreach ($map['actionList'] as $item1) {
                    $model->actionList[$n1] = actionList::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['contentFieldList'])) {
            if (!empty($map['contentFieldList'])) {
                $model->contentFieldList = [];
                $n1 = 0;
                foreach ($map['contentFieldList'] as $item1) {
                    $model->contentFieldList[$n1] = contentFieldList::fromMap($item1);
                    ++$n1;
                }
            }
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

        if (isset($map['dueTime'])) {
            $model->dueTime = $map['dueTime'];
        }

        if (isset($map['executorIds'])) {
            if (!empty($map['executorIds'])) {
                $model->executorIds = [];
                $n1 = 0;
                foreach ($map['executorIds'] as $item1) {
                    $model->executorIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['isOnlyShowExecutor'])) {
            $model->isOnlyShowExecutor = $map['isOnlyShowExecutor'];
        }

        if (isset($map['notifyConfigs'])) {
            $model->notifyConfigs = notifyConfigs::fromMap($map['notifyConfigs']);
        }

        if (isset($map['operatorId'])) {
            $model->operatorId = $map['operatorId'];
        }

        if (isset($map['participantIds'])) {
            if (!empty($map['participantIds'])) {
                $model->participantIds = [];
                $n1 = 0;
                foreach ($map['participantIds'] as $item1) {
                    $model->participantIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['priority'])) {
            $model->priority = $map['priority'];
        }

        if (isset($map['remindNotifyConfigs'])) {
            $model->remindNotifyConfigs = remindNotifyConfigs::fromMap($map['remindNotifyConfigs']);
        }

        if (isset($map['reminderTimeStamp'])) {
            $model->reminderTimeStamp = $map['reminderTimeStamp'];
        }

        if (isset($map['sourceId'])) {
            $model->sourceId = $map['sourceId'];
        }

        if (isset($map['subject'])) {
            $model->subject = $map['subject'];
        }

        return $model;
    }
}
