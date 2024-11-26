<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Qianzhou\V20211111\Models;

use AlibabaCloud\Tea\Model;

class HelloRequest extends Model
{
    /**
     * @example binzhi
     *
     * @var string
     */
    public $user;
    protected $_name = [
        'user' => 'user',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->user) {
            $res['user'] = $this->user;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return HelloRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['user'])) {
            $model->user = $map['user'];
        }

        return $model;
    }
}
