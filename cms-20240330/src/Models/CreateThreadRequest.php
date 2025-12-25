<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20240330\Models\CreateThreadRequest\variables;

class CreateThreadRequest extends Model
{
    /**
     * @var string
     */
    public $title;

    /**
     * @var variables
     */
    public $variables;
    protected $_name = [
        'title' => 'title',
        'variables' => 'variables',
    ];

    public function validate()
    {
        if (null !== $this->variables) {
            $this->variables->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->title) {
            $res['title'] = $this->title;
        }

        if (null !== $this->variables) {
            $res['variables'] = null !== $this->variables ? $this->variables->toArray($noStream) : $this->variables;
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
        if (isset($map['title'])) {
            $model->title = $map['title'];
        }

        if (isset($map['variables'])) {
            $model->variables = variables::fromMap($map['variables']);
        }

        return $model;
    }
}
