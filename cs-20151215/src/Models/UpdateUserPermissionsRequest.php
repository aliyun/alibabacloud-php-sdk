<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CS\V20151215\Models\UpdateUserPermissionsRequest\body;

class UpdateUserPermissionsRequest extends Model
{
    /**
     * @var body[]
     */
    public $body;

    /**
     * @var string
     */
    public $mode;
    protected $_name = [
        'body' => 'body',
        'mode' => 'mode',
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
                    $res['body'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->mode) {
            $res['mode'] = $this->mode;
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
                    $model->body[$n1++] = body::fromMap($item1);
                }
            }
        }

        if (isset($map['mode'])) {
            $model->mode = $map['mode'];
        }

        return $model;
    }
}
