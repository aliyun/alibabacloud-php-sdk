<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class DeleteContactGroupsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $contactGroupIdsShrink;
    protected $_name = [
        'contactGroupIdsShrink' => 'contactGroupIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactGroupIdsShrink) {
            $res['contactGroupIds'] = $this->contactGroupIdsShrink;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['contactGroupIds'])) {
            $model->contactGroupIdsShrink = $map['contactGroupIds'];
        }

        return $model;
    }
}
