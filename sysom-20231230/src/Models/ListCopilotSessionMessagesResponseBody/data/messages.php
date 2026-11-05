<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SysOM\V20231230\Models\ListCopilotSessionMessagesResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\SysOM\V20231230\Models\ListCopilotSessionMessagesResponseBody\data\messages\content;

class messages extends Model
{
    /**
     * @var content[]
     */
    public $content;

    /**
     * @var string
     */
    public $createdAt;

    /**
     * @var string
     */
    public $eventId;

    /**
     * @var string
     */
    public $finishedAt;

    /**
     * @var string
     */
    public $id;

    /**
     * @var mixed
     */
    public $metadata;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $role;

    /**
     * @var string
     */
    public $turnId;

    /**
     * @var mixed
     */
    public $usage;
    protected $_name = [
        'content' => 'content',
        'createdAt' => 'createdAt',
        'eventId' => 'eventId',
        'finishedAt' => 'finishedAt',
        'id' => 'id',
        'metadata' => 'metadata',
        'name' => 'name',
        'role' => 'role',
        'turnId' => 'turnId',
        'usage' => 'usage',
    ];

    public function validate()
    {
        if (\is_array($this->content)) {
            Model::validateArray($this->content);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
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

        if (null !== $this->createdAt) {
            $res['createdAt'] = $this->createdAt;
        }

        if (null !== $this->eventId) {
            $res['eventId'] = $this->eventId;
        }

        if (null !== $this->finishedAt) {
            $res['finishedAt'] = $this->finishedAt;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->metadata) {
            $res['metadata'] = $this->metadata;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->role) {
            $res['role'] = $this->role;
        }

        if (null !== $this->turnId) {
            $res['turnId'] = $this->turnId;
        }

        if (null !== $this->usage) {
            $res['usage'] = $this->usage;
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

        if (isset($map['createdAt'])) {
            $model->createdAt = $map['createdAt'];
        }

        if (isset($map['eventId'])) {
            $model->eventId = $map['eventId'];
        }

        if (isset($map['finishedAt'])) {
            $model->finishedAt = $map['finishedAt'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['metadata'])) {
            $model->metadata = $map['metadata'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['role'])) {
            $model->role = $map['role'];
        }

        if (isset($map['turnId'])) {
            $model->turnId = $map['turnId'];
        }

        if (isset($map['usage'])) {
            $model->usage = $map['usage'];
        }

        return $model;
    }
}
