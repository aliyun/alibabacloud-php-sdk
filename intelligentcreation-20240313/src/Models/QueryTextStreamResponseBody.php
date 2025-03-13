<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class QueryTextStreamResponseBody extends Model
{
    /**
     * @example false
     *
     * @var bool
     */
    public $end;

    /**
     * @example 1
     *
     * @var int
     */
    public $index;

    /**
     * @description Id of the request
     *
     * @example None
     *
     * @var string
     */
    public $message;

    /**
     * @example 1
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return QueryTextStreamResponseBody
     */
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
