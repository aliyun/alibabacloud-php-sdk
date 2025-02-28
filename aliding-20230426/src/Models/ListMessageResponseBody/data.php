<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\ListMessageResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\ListMessageResponseBody\data\content;

class data extends Model
{
    /**
     * @var content[]
     */
    public $content;
    /**
     * @var int
     */
    public $createAt;
    /**
     * @var string
     */
    public $id;
    /**
     * @var mixed[]
     */
    public $metadata;
    /**
     * @var string
     */
    public $object;
    /**
     * @var string
     */
    public $role;
    /**
     * @var string
     */
    public $runId;
    /**
     * @var string
     */
    public $threadId;
    protected $_name = [
        'content'  => 'content',
        'createAt' => 'createAt',
        'id'       => 'id',
        'metadata' => 'metadata',
        'object'   => 'object',
        'role'     => 'role',
        'runId'    => 'runId',
        'threadId' => 'threadId',
    ];

    public function validate()
    {
        if (\is_array($this->content)) {
            Model::validateArray($this->content);
        }
        if (\is_array($this->metadata)) {
            Model::validateArray($this->metadata);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            if (\is_array($this->content)) {
                $res['content'] = [];
                $n1             = 0;
                foreach ($this->content as $item1) {
                    $res['content'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->createAt) {
            $res['createAt'] = $this->createAt;
        }

        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->metadata) {
            if (\is_array($this->metadata)) {
                $res['metadata'] = [];
                foreach ($this->metadata as $key1 => $value1) {
                    $res['metadata'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->object) {
            $res['object'] = $this->object;
        }

        if (null !== $this->role) {
            $res['role'] = $this->role;
        }

        if (null !== $this->runId) {
            $res['runId'] = $this->runId;
        }

        if (null !== $this->threadId) {
            $res['threadId'] = $this->threadId;
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
                $n1             = 0;
                foreach ($map['content'] as $item1) {
                    $model->content[$n1++] = content::fromMap($item1);
                }
            }
        }

        if (isset($map['createAt'])) {
            $model->createAt = $map['createAt'];
        }

        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['metadata'])) {
            if (!empty($map['metadata'])) {
                $model->metadata = [];
                foreach ($map['metadata'] as $key1 => $value1) {
                    $model->metadata[$key1] = $value1;
                }
            }
        }

        if (isset($map['object'])) {
            $model->object = $map['object'];
        }

        if (isset($map['role'])) {
            $model->role = $map['role'];
        }

        if (isset($map['runId'])) {
            $model->runId = $map['runId'];
        }

        if (isset($map['threadId'])) {
            $model->threadId = $map['threadId'];
        }

        return $model;
    }
}
