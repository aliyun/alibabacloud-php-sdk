<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20200518\Models;

use AlibabaCloud\Tea\Model;

class DsgWhiteListAddOrUpdateShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $whiteListsShrink;
    protected $_name = [
        'whiteListsShrink' => 'WhiteLists',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->whiteListsShrink) {
            $res['WhiteLists'] = $this->whiteListsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DsgWhiteListAddOrUpdateShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['WhiteLists'])) {
            $model->whiteListsShrink = $map['WhiteLists'];
        }

        return $model;
    }
}
