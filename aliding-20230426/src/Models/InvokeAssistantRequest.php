<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantRequest\content;
use AlibabaCloud\SDK\Aliding\V20230426\Models\InvokeAssistantRequest\history;

class InvokeAssistantRequest extends Model
{
    /**
     * @var string
     */
    public $assistantId;
    /**
     * @var content[]
     */
    public $content;
    /**
     * @var history[]
     */
    public $history;
    /**
     * @var string
     */
    public $sessionId;
    /**
     * @var bool
     */
    public $stream;
    protected $_name = [
        'assistantId' => 'assistantId',
        'content'     => 'content',
        'history'     => 'history',
        'sessionId'   => 'sessionId',
        'stream'      => 'stream',
    ];

    public function validate()
    {
        if (\is_array($this->content)) {
            Model::validateArray($this->content);
        }
        if (\is_array($this->history)) {
            Model::validateArray($this->history);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->assistantId) {
            $res['assistantId'] = $this->assistantId;
        }

        if (null !== $this->content) {
            if (\is_array($this->content)) {
                $res['content'] = [];
                $n1             = 0;
                foreach ($this->content as $item1) {
                    $res['content'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->history) {
            if (\is_array($this->history)) {
                $res['history'] = [];
                $n1             = 0;
                foreach ($this->history as $item1) {
                    $res['history'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->sessionId) {
            $res['sessionId'] = $this->sessionId;
        }

        if (null !== $this->stream) {
            $res['stream'] = $this->stream;
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
        if (isset($map['assistantId'])) {
            $model->assistantId = $map['assistantId'];
        }

        if (isset($map['content'])) {
            if (!empty($map['content'])) {
                $model->content = [];
                $n1             = 0;
                foreach ($map['content'] as $item1) {
                    $model->content[$n1++] = content::fromMap($item1);
                }
            }
        }

        if (isset($map['history'])) {
            if (!empty($map['history'])) {
                $model->history = [];
                $n1             = 0;
                foreach ($map['history'] as $item1) {
                    $model->history[$n1++] = history::fromMap($item1);
                }
            }
        }

        if (isset($map['sessionId'])) {
            $model->sessionId = $map['sessionId'];
        }

        if (isset($map['stream'])) {
            $model->stream = $map['stream'];
        }

        return $model;
    }
}
