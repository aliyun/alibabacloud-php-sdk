<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\GetAddonSchemaResponseBody\fields;

use AlibabaCloud\Dara\Model;

class conditions extends Model
{
    /**
     * @var string
     */
    public $action;

    /**
     * @var string
     */
    public $field;

    /**
     * @var string
     */
    public $op;

    /**
     * @var mixed
     */
    public $value;
    protected $_name = [
        'action' => 'action',
        'field' => 'field',
        'op' => 'op',
        'value' => 'value',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->action) {
            $res['action'] = $this->action;
        }

        if (null !== $this->field) {
            $res['field'] = $this->field;
        }

        if (null !== $this->op) {
            $res['op'] = $this->op;
        }

        if (null !== $this->value) {
            $res['value'] = $this->value;
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
        if (isset($map['action'])) {
            $model->action = $map['action'];
        }

        if (isset($map['field'])) {
            $model->field = $map['field'];
        }

        if (isset($map['op'])) {
            $model->op = $map['op'];
        }

        if (isset($map['value'])) {
            $model->value = $map['value'];
        }

        return $model;
    }
}
