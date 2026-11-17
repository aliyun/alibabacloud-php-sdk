<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentCore\V20260804\Models\ListEventsResponseBody\items;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListEventsResponseBody\items\data\content;
use AlibabaCloud\SDK\AgentCore\V20260804\Models\ListEventsResponseBody\items\data\parentScope;

class data extends Model
{
    /**
     * @var string
     */
    public $callId;

    /**
     * @var content[]
     */
    public $content;

    /**
     * @var string[]
     */
    public $eventIds;

    /**
     * @var string
     */
    public $parentEventId;

    /**
     * @var parentScope
     */
    public $parentScope;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $summary;
    protected $_name = [
        'callId' => 'callId',
        'content' => 'content',
        'eventIds' => 'eventIds',
        'parentEventId' => 'parentEventId',
        'parentScope' => 'parentScope',
        'role' => 'role',
        'summary' => 'summary',
    ];

    public function validate()
    {
        if (\is_array($this->content)) {
            Model::validateArray($this->content);
        }
        if (\is_array($this->eventIds)) {
            Model::validateArray($this->eventIds);
        }
        if (null !== $this->parentScope) {
            $this->parentScope->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callId) {
            $res['callId'] = $this->callId;
        }

        if (null !== $this->content) {
            if (\is_array($this->content)) {
                $res['content'] = [];
                $n1 = 0;
                foreach ($this->content as $item1) {
                    $res['content'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->eventIds) {
            if (\is_array($this->eventIds)) {
                $res['eventIds'] = [];
                $n1 = 0;
                foreach ($this->eventIds as $item1) {
                    $res['eventIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->parentEventId) {
            $res['parentEventId'] = $this->parentEventId;
        }

        if (null !== $this->parentScope) {
            $res['parentScope'] = null !== $this->parentScope ? $this->parentScope->toArray($noStream) : $this->parentScope;
        }

        if (null !== $this->role) {
            $res['role'] = $this->role;
        }

        if (null !== $this->summary) {
            $res['summary'] = $this->summary;
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
        if (isset($map['callId'])) {
            $model->callId = $map['callId'];
        }

        if (isset($map['content'])) {
            if (!empty($map['content'])) {
                $model->content = [];
                $n1 = 0;
                foreach ($map['content'] as $item1) {
                    $model->content[$n1] = content::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['eventIds'])) {
            if (!empty($map['eventIds'])) {
                $model->eventIds = [];
                $n1 = 0;
                foreach ($map['eventIds'] as $item1) {
                    $model->eventIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['parentEventId'])) {
            $model->parentEventId = $map['parentEventId'];
        }

        if (isset($map['parentScope'])) {
            $model->parentScope = parentScope::fromMap($map['parentScope']);
        }

        if (isset($map['role'])) {
            $model->role = $map['role'];
        }

        if (isset($map['summary'])) {
            $model->summary = $map['summary'];
        }

        return $model;
    }
}
