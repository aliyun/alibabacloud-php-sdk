<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aidge\V20260428\Models\ConversationItemCreated;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aidge\V20260428\Models\ConversationItemCreated\item\content;

class item extends Model
{
    /**
     * @var string
     */
    public $id;

    /**
     * @var string
     */
    public $object;

    /**
     * @var string
     */
    public $type;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $role;

    /**
     * @var content[]
     */
    public $content;
    protected $_name = [
        'id' => 'id',
        'object' => 'object',
        'type' => 'type',
        'status' => 'status',
        'role' => 'role',
        'content' => 'content',
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
        if (null !== $this->id) {
            $res['id'] = $this->id;
        }

        if (null !== $this->object) {
            $res['object'] = $this->object;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->role) {
            $res['role'] = $this->role;
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

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['id'])) {
            $model->id = $map['id'];
        }

        if (isset($map['object'])) {
            $model->object = $map['object'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['role'])) {
            $model->role = $map['role'];
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

        return $model;
    }
}
