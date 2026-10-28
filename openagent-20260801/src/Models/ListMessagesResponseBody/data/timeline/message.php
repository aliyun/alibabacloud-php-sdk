<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenAgent\V20260801\Models\ListMessagesResponseBody\data\timeline;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\OpenAgent\V20260801\Models\ListMessagesResponseBody\data\timeline\message\interruptOutcome;
use AlibabaCloud\SDK\OpenAgent\V20260801\Models\ListMessagesResponseBody\data\timeline\message\resumeInput;
use AlibabaCloud\SDK\OpenAgent\V20260801\Models\ListMessagesResponseBody\data\timeline\message\toolCalls;

class message extends Model
{
    /**
     * @var string
     */
    public $activityType;

    /**
     * @var mixed
     */
    public $content;

    /**
     * @var string
     */
    public $encryptedValue;

    /**
     * @var string
     */
    public $error;

    /**
     * @var string
     */
    public $id;

    /**
     * @var interruptOutcome
     */
    public $interruptOutcome;

    /**
     * @var mixed[]
     */
    public $metadata;

    /**
     * @var string
     */
    public $name;

    /**
     * @var resumeInput
     */
    public $resumeInput;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $toolCallId;

    /**
     * @var toolCalls[]
     */
    public $toolCalls;
    protected $_name = [
        'activityType' => 'activityType',
        'content' => 'content',
        'encryptedValue' => 'encryptedValue',
        'error' => 'error',
        'id' => 'id',
        'interruptOutcome' => 'interruptOutcome',
        'metadata' => 'metadata',
        'name' => 'name',
        'resumeInput' => 'resumeInput',
        'role' => 'role',
        'toolCallId' => 'toolCallId',
        'toolCalls' => 'toolCalls',
    ];

    public function validate()
    {
        if (null !== $this->interruptOutcome) {
            $this->interruptOutcome->validate();
        }
        if (\is_array($this->metadata)) {
            Model::validateArray($this->metadata);
        }
        if (null !== $this->resumeInput) {
            $this->resumeInput->validate();
        }
        if (\is_array($this->toolCalls)) {
            Model::validateArray($this->toolCalls);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->activityType) {
            $res['activityType'] = $this->activityType;
        }

        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->encryptedValue) {
            $res['encryptedValue'] = $this->encryptedValue;
        }

        if (null !== $this->error) {
            $res['error'] = $this->error;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->interruptOutcome) {
            $res['interruptOutcome'] = null !== $this->interruptOutcome ? $this->interruptOutcome->toArray($noStream) : $this->interruptOutcome;
        }

        if (null !== $this->metadata) {
            if (\is_array($this->metadata)) {
                $res['metadata'] = [];
                foreach ($this->metadata as $key1 => $value1) {
                    $res['metadata'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->resumeInput) {
            $res['resumeInput'] = null !== $this->resumeInput ? $this->resumeInput->toArray($noStream) : $this->resumeInput;
        }

        if (null !== $this->role) {
            $res['role'] = $this->role;
        }

        if (null !== $this->toolCallId) {
            $res['toolCallId'] = $this->toolCallId;
        }

        if (null !== $this->toolCalls) {
            if (\is_array($this->toolCalls)) {
                $res['toolCalls'] = [];
                $n1 = 0;
                foreach ($this->toolCalls as $item1) {
                    $res['toolCalls'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
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
        if (isset($map['activityType'])) {
            $model->activityType = $map['activityType'];
        }

        if (isset($map['content'])) {
            $model->content = $map['content'];
        }

        if (isset($map['encryptedValue'])) {
            $model->encryptedValue = $map['encryptedValue'];
        }

        if (isset($map['error'])) {
            $model->error = $map['error'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['interruptOutcome'])) {
            $model->interruptOutcome = interruptOutcome::fromMap($map['interruptOutcome']);
        }

        if (isset($map['metadata'])) {
            if (!empty($map['metadata'])) {
                $model->metadata = [];
                foreach ($map['metadata'] as $key1 => $value1) {
                    $model->metadata[$key1] = $value1;
                }
            }
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['resumeInput'])) {
            $model->resumeInput = resumeInput::fromMap($map['resumeInput']);
        }

        if (isset($map['role'])) {
            $model->role = $map['role'];
        }

        if (isset($map['toolCallId'])) {
            $model->toolCallId = $map['toolCallId'];
        }

        if (isset($map['toolCalls'])) {
            if (!empty($map['toolCalls'])) {
                $model->toolCalls = [];
                $n1 = 0;
                foreach ($map['toolCalls'] as $item1) {
                    $model->toolCalls[$n1] = toolCalls::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
