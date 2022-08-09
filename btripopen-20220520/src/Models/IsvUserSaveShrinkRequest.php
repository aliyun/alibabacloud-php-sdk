<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\BtripOpen\V20220520\Models;

use AlibabaCloud\Tea\Model;

class IsvUserSaveShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $userListShrink;
    protected $_name = [
        'userListShrink' => 'user_list',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userListShrink) {
            $res['user_list'] = $this->userListShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return IsvUserSaveShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['user_list'])) {
            $model->userListShrink = $map['user_list'];
        }

        return $model;
    }
}
