<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class ListPolicesForPrivateAccessApplicationShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $applicationIdsShrink;
    protected $_name = [
        'applicationIdsShrink' => 'ApplicationIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->applicationIdsShrink) {
            $res['ApplicationIds'] = $this->applicationIdsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListPolicesForPrivateAccessApplicationShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ApplicationIds'])) {
            $model->applicationIdsShrink = $map['ApplicationIds'];
        }

        return $model;
    }
}
