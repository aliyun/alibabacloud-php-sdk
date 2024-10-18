<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\EHPC\V20240730\Models;

use AlibabaCloud\Tea\Model;

class CreateUsersShrinkRequest extends Model
{
    /**
     * @description The cluster ID.
     *
     * This parameter is required.
     * @example ehpc-hz-FYUr32****
     *
     * @var string
     */
    public $clusterId;

    /**
     * @description The users that you want to add.
     *
     * @var string
     */
    public $userShrink;
    protected $_name = [
        'clusterId'  => 'ClusterId',
        'userShrink' => 'User',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clusterId) {
            $res['ClusterId'] = $this->clusterId;
        }
        if (null !== $this->userShrink) {
            $res['User'] = $this->userShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUsersShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClusterId'])) {
            $model->clusterId = $map['ClusterId'];
        }
        if (isset($map['User'])) {
            $model->userShrink = $map['User'];
        }

        return $model;
    }
}
