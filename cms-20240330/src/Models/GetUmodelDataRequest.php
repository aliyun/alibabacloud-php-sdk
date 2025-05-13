<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class GetUmodelDataRequest extends Model
{
    /**
     * @var mixed
     */
    public $content;

    /**
     * @var string
     */
    public $method;
    protected $_name = [
        'content' => 'content',
        'method' => 'method',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->content) {
            $res['content'] = $this->content;
        }

        if (null !== $this->method) {
            $res['method'] = $this->method;
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
            $model->content = $map['content'];
        }

        if (isset($map['method'])) {
            $model->method = $map['method'];
        }

        return $model;
    }
}
