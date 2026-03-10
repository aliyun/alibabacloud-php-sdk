<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\GetMemoryHistoryResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\GetMemoryHistoryResponseBody\results\input;

class results extends Model
{
    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $event;

    /**
     * @var string
     */
    public $id;

    /**
     * @var input[]
     */
    public $input;

    /**
     * @var string
     */
    public $memoryId;

    /**
     * @var mixed[]
     */
    public $metadata;

    /**
     * @var string
     */
    public $newMemory;

    /**
     * @var string
     */
    public $oldMemory;

    /**
     * @var string
     */
    public $updatedAt;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'createdAt' => 'createdAt',
        'event' => 'event',
        'id' => 'id',
        'input' => 'input',
        'memoryId' => 'memoryId',
        'metadata' => 'metadata',
        'newMemory' => 'newMemory',
        'oldMemory' => 'oldMemory',
        'updatedAt' => 'updatedAt',
        'userId' => 'userId',
    ];

    public function validate()
    {
        if (\is_array($this->input)) {
            Model::validateArray($this->input);
        }
        if (\is_array($this->metadata)) {
            Model::validateArray($this->metadata);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->event) {
            $res['event'] = $this->event;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->input) {
            if (\is_array($this->input)) {
                $res['input'] = [];
                $n1 = 0;
                foreach ($this->input as $item1) {
                    $res['input'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->memoryId) {
            $res['memoryId'] = $this->memoryId;
        }

        if (null !== $this->metadata) {
            if (\is_array($this->metadata)) {
                $res['metadata'] = [];
                foreach ($this->metadata as $key1 => $value1) {
                    $res['metadata'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->newMemory) {
            $res['newMemory'] = $this->newMemory;
        }

        if (null !== $this->oldMemory) {
            $res['oldMemory'] = $this->oldMemory;
        }

        if (null !== $this->updatedAt) {
            $res['updatedAt'] = $this->updatedAt;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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
        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['event'])) {
            $model->event = $map['event'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['input'])) {
            if (!empty($map['input'])) {
                $model->input = [];
                $n1 = 0;
                foreach ($map['input'] as $item1) {
                    $model->input[$n1] = input::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['memoryId'])) {
            $model->memoryId = $map['memoryId'];
        }

        if (isset($map['metadata'])) {
            if (!empty($map['metadata'])) {
                $model->metadata = [];
                foreach ($map['metadata'] as $key1 => $value1) {
                    $model->metadata[$key1] = $value1;
                }
            }
        }

        if (isset($map['newMemory'])) {
            $model->newMemory = $map['newMemory'];
        }

        if (isset($map['oldMemory'])) {
            $model->oldMemory = $map['oldMemory'];
        }

        if (isset($map['updatedAt'])) {
            $model->updatedAt = $map['updatedAt'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
