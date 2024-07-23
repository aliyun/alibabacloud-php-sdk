<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ververica\V20220718\Models;

use AlibabaCloud\Tea\Model;

class CreateMemberRequest extends Model
{
    /**
     * @description The mappings between the ID and permissions of the member.
     *
     * @var Member
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
     * @return CreateMemberRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['body'])) {
            $model->body = Member::fromMap($map['body']);
        }

        return $model;
    }
}
