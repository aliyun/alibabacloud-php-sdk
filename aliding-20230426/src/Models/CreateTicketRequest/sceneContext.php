<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTicketRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTicketRequest\sceneContext\groupMsgs;

class sceneContext extends Model
{
    /**
     * @var groupMsgs[]
     */
    public $groupMsgs;
    /**
     * @var string
     */
    public $openConversationId;
    /**
     * @var string[]
     */
    public $relevantorUserIds;
    /**
     * @var string
     */
    public $topicId;
    protected $_name = [
        'groupMsgs'          => 'GroupMsgs',
        'openConversationId' => 'OpenConversationId',
        'relevantorUserIds'  => 'RelevantorUserIds',
        'topicId'            => 'TopicId',
    ];

    public function validate()
    {
        if (\is_array($this->groupMsgs)) {
            Model::validateArray($this->groupMsgs);
        }
        if (\is_array($this->relevantorUserIds)) {
            Model::validateArray($this->relevantorUserIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->groupMsgs) {
            if (\is_array($this->groupMsgs)) {
                $res['GroupMsgs'] = [];
                $n1               = 0;
                foreach ($this->groupMsgs as $item1) {
                    $res['GroupMsgs'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->openConversationId) {
            $res['OpenConversationId'] = $this->openConversationId;
        }

        if (null !== $this->relevantorUserIds) {
            if (\is_array($this->relevantorUserIds)) {
                $res['RelevantorUserIds'] = [];
                $n1                       = 0;
                foreach ($this->relevantorUserIds as $item1) {
                    $res['RelevantorUserIds'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->topicId) {
            $res['TopicId'] = $this->topicId;
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
        if (isset($map['GroupMsgs'])) {
            if (!empty($map['GroupMsgs'])) {
                $model->groupMsgs = [];
                $n1               = 0;
                foreach ($map['GroupMsgs'] as $item1) {
                    $model->groupMsgs[$n1++] = groupMsgs::fromMap($item1);
                }
            }
        }

        if (isset($map['OpenConversationId'])) {
            $model->openConversationId = $map['OpenConversationId'];
        }

        if (isset($map['RelevantorUserIds'])) {
            if (!empty($map['RelevantorUserIds'])) {
                $model->relevantorUserIds = [];
                $n1                       = 0;
                foreach ($map['RelevantorUserIds'] as $item1) {
                    $model->relevantorUserIds[$n1++] = $item1;
                }
            }
        }

        if (isset($map['TopicId'])) {
            $model->topicId = $map['TopicId'];
        }

        return $model;
    }
}
