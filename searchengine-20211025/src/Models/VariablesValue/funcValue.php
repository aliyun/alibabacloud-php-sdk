<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models\VariablesValue;

use AlibabaCloud\Tea\Model;

class funcValue extends Model
{
    /**
     * @description The class name of the function variable.
     *
     * @example ""
     *
     * @var string
     */
    public $funcClassName;

    /**
     * @description The template of the function variable.
     *
     * @example ""
     *
     * @var string
     */
    public $template;
    protected $_name = [
        'funcClassName' => 'funcClassName',
        'template'      => 'template',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return funcValue
     */
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
