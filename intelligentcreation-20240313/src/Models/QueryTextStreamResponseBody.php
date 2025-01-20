<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class QueryTextStreamResponseBody extends Model
{
    /**
     * @var bool
     */
    public $end;
    /**
     * @var int
     */
    public $index;
    /**
     * @var string
     */
    public $message;
    /**
     * @var int
     */
    public $type;
    protected $_name = [
        'end'     => 'end',
        'index'   => 'index',
        'message' => 'message',
        'type'    => 'type',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->end) {
            $res['end'] = $this->end;
        }

        if (null !== $this->index) {
            $res['index'] = $this->index;
        }

        if (null !== $this->message) {
            $res['message'] = $this->message;
        }

        if (null !== $this->type) {
            $res['type'] = $this->type;
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
        if (isset($map['end'])) {
            $model->end = $map['end'];
        }

        if (isset($map['index'])) {
            $model->index = $map['index'];
        }

        if (isset($map['message'])) {
            $model->message = $map['message'];
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
