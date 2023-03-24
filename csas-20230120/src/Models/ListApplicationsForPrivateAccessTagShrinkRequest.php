<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Csas\V20230120\Models;

use AlibabaCloud\Tea\Model;

class ListApplicationsForPrivateAccessTagShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $tagIdsShrink;
    protected $_name = [
        'tagIdsShrink' => 'TagIds',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->tagIdsShrink) {
            $res['TagIds'] = $this->tagIdsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListApplicationsForPrivateAccessTagShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TagIds'])) {
            $model->tagIdsShrink = $map['TagIds'];
        }

        return $model;
    }
}
