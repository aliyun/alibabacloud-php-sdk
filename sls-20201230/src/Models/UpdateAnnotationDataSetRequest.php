<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sls\V20201230\Models;

use AlibabaCloud\Dara\Model;

class UpdateAnnotationDataSetRequest extends Model
{
    /**
     * @var MLDataSetParam
     */
    public $body;
    protected $_name = [
        'body' => 'body',
    ];

    public function validate()
    {
        if (null !== $this->body) {
            $this->body->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = null !== $this->body ? $this->body->toArray($noStream) : $this->body;
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
            $model->body = MLDataSetParam::fromMap($map['body']);
        }

        return $model;
    }
}
