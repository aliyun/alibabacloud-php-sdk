<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\FC\V20230330\Models;

use AlibabaCloud\Tea\Model;

class PutConcurrencyConfigRequest extends Model
{
    /**
     * @description The concurrency configurations.
     *
     * This parameter is required.
     *
     * @var PutConcurrencyInput
     */
    public $body;
    protected $_name = [
        'body' => 'body',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = null !== $this->body ? $this->body->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return PutConcurrencyConfigRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = PutConcurrencyInput::fromMap($map['body']);
        }

        return $model;
    }
}
