<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTodoTaskRequest\actionList;

use AlibabaCloud\Tea\Model;

class param extends Model
{
    /**
     * @var string
     */
    public $body;

    /**
     * @var string[]
     */
    public $header;
    protected $_name = [
        'body' => 'body',
        'header' => 'header',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }
        if (null !== $this->header) {
            $res['header'] = $this->header;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return param
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }
        if (isset($map['header'])) {
            $model->header = $map['header'];
        }

        return $model;
    }
}
