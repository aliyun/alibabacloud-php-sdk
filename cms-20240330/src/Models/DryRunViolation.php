<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class DryRunViolation extends Model
{
    /**
     * @var string
     */
    public $field;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $suggestion;
    protected $_name = [
        'field' => 'field',
        'message' => 'message',
        'suggestion' => 'suggestion',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->field) {
            $res['field'] = $this->field;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->suggestion) {
            $res['suggestion'] = $this->suggestion;
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
        if (isset($map['field'])) {
            $model->field = $map['field'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['suggestion'])) {
            $model->suggestion = $map['suggestion'];
        }

        return $model;
    }
}
