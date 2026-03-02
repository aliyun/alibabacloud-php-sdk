<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateRunResponseBody\messages;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateRunResponseBody\run;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CreateRunResponseBody\thread;

class CreateRunResponseBody extends Model
{
    /**
     * @var messages[]
     */
    public $messages;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var run
     */
    public $run;

    /**
     * @var thread
     */
    public $thread;
    protected $_name = [
        'messages' => 'messages',
        'requestId' => 'requestId',
        'run' => 'run',
        'thread' => 'thread',
    ];

    public function validate()
    {
        if (\is_array($this->messages)) {
            Model::validateArray($this->messages);
        }
        if (null !== $this->run) {
            $this->run->validate();
        }
        if (null !== $this->thread) {
            $this->thread->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->run) {
            $res['run'] = null !== $this->run ? $this->run->toArray($noStream) : $this->run;
        }

        if (null !== $this->thread) {
            $res['thread'] = null !== $this->thread ? $this->thread->toArray($noStream) : $this->thread;
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

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['run'])) {
            $model->run = run::fromMap($map['run']);
        }

        if (isset($map['thread'])) {
            $model->thread = thread::fromMap($map['thread']);
        }

        return $model;
    }
}
