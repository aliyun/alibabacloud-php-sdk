<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Umengpush\V20220225\Models;

use AlibabaCloud\SDK\Umengpush\V20220225\Models\AndroidShortPayload\body;
use AlibabaCloud\Tea\Model;

class AndroidShortPayload extends Model
{
    /**
     * @var body
     */
    public $body;

    /**
     * @var mixed[]
     */
    public $extra;
    protected $_name = [
        'body'  => 'body',
        'extra' => 'extra',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['body'] = null !== $this->body ? $this->body->toMap() : null;
        }
        if (null !== $this->extra) {
            $res['extra'] = $this->extra;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AndroidShortPayload
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = body::fromMap($map['body']);
        }
        if (isset($map['extra'])) {
            $model->extra = $map['extra'];
        }

        return $model;
    }
}
