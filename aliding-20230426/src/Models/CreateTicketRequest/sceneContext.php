<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTicketRequest;

use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTicketRequest\sceneContext\groupMsgs;
use AlibabaCloud\Tea\Model;

class sceneContext extends Model
{
    /**
     * @var groupMsgs[]
     */
    public $groupMsgs;

    /**
     * @example cidDKVAOW8yVWPEN+WZfwSSAQ==
     *
     * @var string
     */
    public $openConversationId;

    /**
     * @var string[]
     */
    public $relevantorUserIds;

    /**
     * @example 42674892
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupMsgs) {
            $res['GroupMsgs'] = [];
            if (null !== $this->groupMsgs && \is_array($this->groupMsgs)) {
                $n = 0;
                foreach ($this->groupMsgs as $item) {
                    $res['GroupMsgs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->openConversationId) {
            $res['OpenConversationId'] = $this->openConversationId;
        }
        if (null !== $this->relevantorUserIds) {
            $res['RelevantorUserIds'] = $this->relevantorUserIds;
        }
        if (null !== $this->topicId) {
            $res['TopicId'] = $this->topicId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return sceneContext
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupMsgs'])) {
            if (!empty($map['GroupMsgs'])) {
                $model->groupMsgs = [];
                $n                = 0;
                foreach ($map['GroupMsgs'] as $item) {
                    $model->groupMsgs[$n++] = null !== $item ? groupMsgs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['OpenConversationId'])) {
            $model->openConversationId = $map['OpenConversationId'];
        }
        if (isset($map['RelevantorUserIds'])) {
            if (!empty($map['RelevantorUserIds'])) {
                $model->relevantorUserIds = $map['RelevantorUserIds'];
            }
        }
        if (isset($map['TopicId'])) {
            $model->topicId = $map['TopicId'];
        }

        return $model;
    }
}
