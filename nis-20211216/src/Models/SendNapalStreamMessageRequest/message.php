<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Nis\V20211216\Models\SendNapalStreamMessageRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Nis\V20211216\Models\SendNapalStreamMessageRequest\message\parts;

class message extends Model
{
    /**
     * @var string
     */
    public $contextId;

    /**
     * @var string[]
     */
    public $extensions;

    /**
     * @var string
     */
    public $messageId;

    /**
     * @var mixed[]
     */
    public $metadata;

    /**
     * @var parts[]
     */
    public $parts;

    /**
     * @var string[]
     */
    public $referenceTaskIds;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'contextId' => 'ContextId',
        'extensions' => 'Extensions',
        'messageId' => 'MessageId',
        'metadata' => 'Metadata',
        'parts' => 'Parts',
        'referenceTaskIds' => 'ReferenceTaskIds',
        'role' => 'Role',
        'taskId' => 'TaskId',
    ];

    public function validate()
    {
        if (\is_array($this->extensions)) {
            Model::validateArray($this->extensions);
        }
        if (\is_array($this->metadata)) {
            Model::validateArray($this->metadata);
        }
        if (\is_array($this->parts)) {
            Model::validateArray($this->parts);
        }
        if (\is_array($this->referenceTaskIds)) {
            Model::validateArray($this->referenceTaskIds);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contextId) {
            $res['ContextId'] = $this->contextId;
        }

        if (null !== $this->extensions) {
            if (\is_array($this->extensions)) {
                $res['Extensions'] = [];
                $n1 = 0;
                foreach ($this->extensions as $item1) {
                    $res['Extensions'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->messageId) {
            $res['MessageId'] = $this->messageId;
        }

        if (null !== $this->metadata) {
            if (\is_array($this->metadata)) {
                $res['Metadata'] = [];
                foreach ($this->metadata as $key1 => $value1) {
                    $res['Metadata'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->parts) {
            if (\is_array($this->parts)) {
                $res['Parts'] = [];
                $n1 = 0;
                foreach ($this->parts as $item1) {
                    $res['Parts'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->referenceTaskIds) {
            if (\is_array($this->referenceTaskIds)) {
                $res['ReferenceTaskIds'] = [];
                $n1 = 0;
                foreach ($this->referenceTaskIds as $item1) {
                    $res['ReferenceTaskIds'][$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }

        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
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
        if (isset($map['ContextId'])) {
            $model->contextId = $map['ContextId'];
        }

        if (isset($map['Extensions'])) {
            if (!empty($map['Extensions'])) {
                $model->extensions = [];
                $n1 = 0;
                foreach ($map['Extensions'] as $item1) {
                    $model->extensions[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['MessageId'])) {
            $model->messageId = $map['MessageId'];
        }

        if (isset($map['Metadata'])) {
            if (!empty($map['Metadata'])) {
                $model->metadata = [];
                foreach ($map['Metadata'] as $key1 => $value1) {
                    $model->metadata[$key1] = $value1;
                }
            }
        }

        if (isset($map['Parts'])) {
            if (!empty($map['Parts'])) {
                $model->parts = [];
                $n1 = 0;
                foreach ($map['Parts'] as $item1) {
                    $model->parts[$n1] = parts::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['ReferenceTaskIds'])) {
            if (!empty($map['ReferenceTaskIds'])) {
                $model->referenceTaskIds = [];
                $n1 = 0;
                foreach ($map['ReferenceTaskIds'] as $item1) {
                    $model->referenceTaskIds[$n1] = $item1;
                    ++$n1;
                }
            }
        }

        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
