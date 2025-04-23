<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\VariablesValue;

use AlibabaCloud\Dara\Model;

class funcValue extends Model
{
    /**
     * @var string
     */
    public $funcClassName;

    /**
     * @var string
     */
    public $template;
    protected $_name = [
        'funcClassName' => 'funcClassName',
        'template' => 'template',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->funcClassName) {
            $res['funcClassName'] = $this->funcClassName;
        }

        if (null !== $this->template) {
            $res['template'] = $this->template;
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
        if (isset($map['funcClassName'])) {
            $model->funcClassName = $map['funcClassName'];
        }

        if (isset($map['template'])) {
            $model->template = $map['template'];
        }

        return $model;
    }
}
