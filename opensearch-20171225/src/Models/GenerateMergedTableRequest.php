<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OpenSearch\V20171225\Models;

use AlibabaCloud\Dara\Model;

class GenerateMergedTableRequest extends Model
{
    /**
     * @var Schema
     */
    public $body;

    /**
     * @var string
     */
    public $spec;
    protected $_name = [
        'body' => 'body',
        'spec' => 'spec',
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

        if (null !== $this->spec) {
            $res['spec'] = $this->spec;
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
            $model->body = Schema::fromMap($map['body']);
        }

        if (isset($map['spec'])) {
            $model->spec = $map['spec'];
        }

        return $model;
    }
}
