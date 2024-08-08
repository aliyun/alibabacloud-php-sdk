<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Retailadvqa\V20230417\Models;

use AlibabaCloud\SDK\Retailadvqa\V20230417\Models\CalculateMemberLevelRequest\body;
use AlibabaCloud\Tea\Model;

class CalculateMemberLevelRequest extends Model
{
    /**
     * @var body
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
     * @return CalculateMemberLevelRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Body'])) {
            $model->body = body::fromMap($map['Body']);
        }

        return $model;
    }
}
