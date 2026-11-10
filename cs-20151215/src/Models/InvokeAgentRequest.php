<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\InvokeAgentRequest\context;
use AlibabaCloud\SDK\CS\V20151215\Models\InvokeAgentRequest\forwardedProps;
use AlibabaCloud\SDK\CS\V20151215\Models\InvokeAgentRequest\messages;
use AlibabaCloud\SDK\CS\V20151215\Models\InvokeAgentRequest\resume;
use AlibabaCloud\SDK\CS\V20151215\Models\InvokeAgentRequest\tools;

class InvokeAgentRequest extends Model
{
    /**
     * @var context[]
     */
    public $context;

    /**
     * @var forwardedProps
     */
    public $forwardedProps;

    /**
     * @var messages[]
     */
    public $messages;

    /**
     * @var string
     */
    public $parentRunId;

    /**
     * @var resume[]
     */
    public $resume;

    /**
     * @var string
     */
    public $runId;

    /**
     * @var mixed
     */
    public $state;

    /**
     * @var string
     */
    public $threadId;

    /**
     * @var tools[]
     */
    public $tools;
    protected $_name = [
        'context' => 'context',
        'forwardedProps' => 'forwardedProps',
        'messages' => 'messages',
        'parentRunId' => 'parentRunId',
        'resume' => 'resume',
        'runId' => 'runId',
        'state' => 'state',
        'threadId' => 'threadId',
        'tools' => 'tools',
    ];

    public function validate()
    {
        if (\is_array($this->context)) {
            Model::validateArray($this->context);
        }
        if (null !== $this->forwardedProps) {
            $this->forwardedProps->validate();
        }
        if (\is_array($this->messages)) {
            Model::validateArray($this->messages);
        }
        if (\is_array($this->resume)) {
            Model::validateArray($this->resume);
        }
        if (\is_array($this->tools)) {
            Model::validateArray($this->tools);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->context) {
            if (\is_array($this->context)) {
                $res['context'] = [];
                $n1 = 0;
                foreach ($this->context as $item1) {
                    $res['context'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->forwardedProps) {
            $res['forwardedProps'] = null !== $this->forwardedProps ? $this->forwardedProps->toArray($noStream) : $this->forwardedProps;
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

        if (null !== $this->parentRunId) {
            $res['parentRunId'] = $this->parentRunId;
        }

        if (null !== $this->resume) {
            if (\is_array($this->resume)) {
                $res['resume'] = [];
                $n1 = 0;
                foreach ($this->resume as $item1) {
                    $res['resume'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->runId) {
            $res['runId'] = $this->runId;
        }

        if (null !== $this->state) {
            $res['state'] = $this->state;
        }

        if (null !== $this->threadId) {
            $res['threadId'] = $this->threadId;
        }

        if (null !== $this->tools) {
            if (\is_array($this->tools)) {
                $res['tools'] = [];
                $n1 = 0;
                foreach ($this->tools as $item1) {
                    $res['tools'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['context'])) {
            if (!empty($map['context'])) {
                $model->context = [];
                $n1 = 0;
                foreach ($map['context'] as $item1) {
                    $model->context[$n1] = context::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['forwardedProps'])) {
            $model->forwardedProps = forwardedProps::fromMap($map['forwardedProps']);
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

        if (isset($map['parentRunId'])) {
            $model->parentRunId = $map['parentRunId'];
        }

        if (isset($map['resume'])) {
            if (!empty($map['resume'])) {
                $model->resume = [];
                $n1 = 0;
                foreach ($map['resume'] as $item1) {
                    $model->resume[$n1] = resume::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['runId'])) {
            $model->runId = $map['runId'];
        }

        if (isset($map['state'])) {
            $model->state = $map['state'];
        }

        if (isset($map['threadId'])) {
            $model->threadId = $map['threadId'];
        }

        if (isset($map['tools'])) {
            if (!empty($map['tools'])) {
                $model->tools = [];
                $n1 = 0;
                foreach ($map['tools'] as $item1) {
                    $model->tools[$n1] = tools::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
