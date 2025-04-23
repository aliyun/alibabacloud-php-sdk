<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Searchengine\V20211025\Models;

use AlibabaCloud\Dara\Model;

class PushDocumentsRequest extends Model
{
    /**
     * @var mixed[]
     */
    public $body;

    /**
     * @var string
     */
    public $pkField;
    protected $_name = [
        'body' => 'body',
        'pkField' => 'pkField',
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
                $n1 = 0;
                foreach ($this->body as $item1) {
                    $res['body'][$n1++] = $item1;
                }
            }
        }

        if (null !== $this->pkField) {
            $res['pkField'] = $this->pkField;
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
                $n1 = 0;
                foreach ($map['body'] as $item1) {
                    $model->body[$n1++] = $item1;
                }
            }
        }

        if (isset($map['pkField'])) {
            $model->pkField = $map['pkField'];
        }

        return $model;
    }
}
