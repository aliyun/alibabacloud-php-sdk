<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Dara\Model;

class ListPostQueryResultRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $body;

    /**
     * @var string
     */
    public $type;
    protected $_name = [
        'body' => 'body',
        'type' => 'type',
    ];

    public function validate()
    {
        if (\is_array($this->body)) {
            Model::validateArray($this->body);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->body) {
            if (\is_array($this->body)) {
                $res['body'] = [];
                foreach ($this->body as $key1 => $value1) {
                    $res['body'][$key1] = $value1;
                }
            }
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
        if (isset($map['body'])) {
            if (!empty($map['body'])) {
                $model->body = [];
                foreach ($map['body'] as $key1 => $value1) {
                    $model->body[$key1] = $value1;
                }
            }
        }

        if (isset($map['type'])) {
            $model->type = $map['type'];
        }

        return $model;
    }
}
