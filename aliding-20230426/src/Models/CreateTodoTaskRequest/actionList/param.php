<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models\CreateTodoTaskRequest\actionList;

use AlibabaCloud\Dara\Model;

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

    public function validate()
    {
        if (\is_array($this->header)) {
            Model::validateArray($this->header);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = $this->body;
        }

        if (null !== $this->header) {
            if (\is_array($this->header)) {
                $res['header'] = [];
                foreach ($this->header as $key1 => $value1) {
                    $res['header'][$key1] = $value1;
                }
            }
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
        if (isset($map['body'])) {
            $model->body = $map['body'];
        }

        if (isset($map['header'])) {
            if (!empty($map['header'])) {
                $model->header = [];
                foreach ($map['header'] as $key1 => $value1) {
                    $model->header[$key1] = $value1;
                }
            }
        }

        return $model;
    }
}
