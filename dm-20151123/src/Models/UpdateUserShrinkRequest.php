<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Tea\Model;

class UpdateUserShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $userShrink;
    protected $_name = [
        'userShrink' => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userShrink) {
            $res['User'] = $this->userShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateUserShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['User'])) {
            $model->userShrink = $map['User'];
        }

        return $model;
    }
}
