<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\ListCopilotSessionMessagesResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListCopilotSessionMessagesResponseBody\data\messages;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListCopilotSessionMessagesResponseBody\data\session;

class data extends Model
{
    /**
     * @var string
     */
    public $cursor;

    /**
     * @var bool
     */
    public $hasMore;

    /**
     * @var int
     */
    public $maxResults;

    /**
     * @var messages[]
     */
    public $messages;

    /**
     * @var string
     */
    public $nextToken;

    /**
     * @var session
     */
    public $session;
    protected $_name = [
        'cursor' => 'cursor',
        'hasMore' => 'hasMore',
        'maxResults' => 'maxResults',
        'messages' => 'messages',
        'nextToken' => 'nextToken',
        'session' => 'session',
    ];

    public function validate()
    {
        if (\is_array($this->messages)) {
            Model::validateArray($this->messages);
        }
        if (null !== $this->session) {
            $this->session->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->cursor) {
            $res['cursor'] = $this->cursor;
        }

        if (null !== $this->hasMore) {
            $res['hasMore'] = $this->hasMore;
        }

        if (null !== $this->maxResults) {
            $res['maxResults'] = $this->maxResults;
        }

        if (null !== $this->messages) {
            if (\is_array($this->messages)) {
                $res['messages'] = [];
                $n1 = 0;
                foreach ($this->messages as $item1) {
                    $res['messages'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->nextToken) {
            $res['nextToken'] = $this->nextToken;
        }

        if (null !== $this->session) {
            $res['session'] = null !== $this->session ? $this->session->toArray($noStream) : $this->session;
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
        if (isset($map['cursor'])) {
            $model->cursor = $map['cursor'];
        }

        if (isset($map['hasMore'])) {
            $model->hasMore = $map['hasMore'];
        }

        if (isset($map['maxResults'])) {
            $model->maxResults = $map['maxResults'];
        }

        if (isset($map['messages'])) {
            if (!empty($map['messages'])) {
                $model->messages = [];
                $n1 = 0;
                foreach ($map['messages'] as $item1) {
                    $model->messages[$n1] = messages::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['nextToken'])) {
            $model->nextToken = $map['nextToken'];
        }

        if (isset($map['session'])) {
            $model->session = session::fromMap($map['session']);
        }

        return $model;
    }
}
