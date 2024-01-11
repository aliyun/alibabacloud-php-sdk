<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\YicConsole\V20240118\Models;

use AlibabaCloud\Tea\Model;

class BillingProcessMessageRequest extends Model
{
    /**
     * @var LxPopCmd
     */
    public $body;
    protected $_name = [
        'body' => 'body',
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

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BillingProcessMessageRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = LxPopCmd::fromMap($map['body']);
        }

        return $model;
    }
}
