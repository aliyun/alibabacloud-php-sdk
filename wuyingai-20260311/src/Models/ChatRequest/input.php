<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\WuyingAI\V20260311\Models\ChatRequest;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\WuyingAI\V20260311\Models\ChatRequest\input\content;

class input extends Model
{
    /**
     * @var content[]
     */
    public $content;

    /**
     * @var string
     */
    public $role;
    protected $_name = [
        'content' => 'Content',
        'role' => 'Role',
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
                $res['Content'] = [];
                $n1 = 0;
                foreach ($this->content as $item1) {
                    $res['Content'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->role) {
            $res['Role'] = $this->role;
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
        if (isset($map['Content'])) {
            if (!empty($map['Content'])) {
                $model->content = [];
                $n1 = 0;
                foreach ($map['Content'] as $item1) {
                    $model->content[$n1] = content::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }

        return $model;
    }
}
