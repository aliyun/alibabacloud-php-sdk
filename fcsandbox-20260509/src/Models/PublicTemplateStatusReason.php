<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FCSandbox\V20260509\Models;

use AlibabaCloud\Dara\Model;

class PublicTemplateStatusReason extends Model
{
    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $step;
    protected $_name = [
        'message' => 'message',
        'step' => 'step',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->step) {
            $res['step'] = $this->step;
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
        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['step'])) {
            $model->step = $map['step'];
        }

        return $model;
    }
}
