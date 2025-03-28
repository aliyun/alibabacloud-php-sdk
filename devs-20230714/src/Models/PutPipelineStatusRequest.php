<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models;

use AlibabaCloud\Dara\Model;

class PutPipelineStatusRequest extends Model
{
    /**
     * @var Pipeline
     */
    public $body;

    /**
     * @var bool
     */
    public $force;
    protected $_name = [
        'body' => 'body',
        'force' => 'force',
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

        if (null !== $this->force) {
            $res['force'] = $this->force;
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
            $model->body = Pipeline::fromMap($map['body']);
        }

        if (isset($map['force'])) {
            $model->force = $map['force'];
        }

        return $model;
    }
}
