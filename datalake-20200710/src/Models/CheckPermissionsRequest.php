<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\DataLake\V20200710\Models;

use AlibabaCloud\Tea\Model;

class CheckPermissionsRequest extends Model
{
    /**
     * @var AccessRequest
     */
    public $body;
    protected $_name = [
        'body' => 'Body',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['Body'] = null !== $this->body ? $this->body->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CheckPermissionsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Body'])) {
            $model->body = AccessRequest::fromMap($map['Body']);
        }

        return $model;
    }
}
