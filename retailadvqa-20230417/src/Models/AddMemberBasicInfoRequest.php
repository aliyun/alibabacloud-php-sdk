<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailadvqa\V20230417\Models;

use AlibabaCloud\SDK\Retailadvqa\V20230417\Models\AddMemberBasicInfoRequest\body;
use AlibabaCloud\Tea\Model;

class AddMemberBasicInfoRequest extends Model
{
    /**
     * @var body
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
     * @return AddMemberBasicInfoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = body::fromMap($map['body']);
        }

        return $model;
    }
}
