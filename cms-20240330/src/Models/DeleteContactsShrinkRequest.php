<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models;

use AlibabaCloud\Dara\Model;

class DeleteContactsShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $contactIdsShrink;
    protected $_name = [
        'contactIdsShrink' => 'contactIds',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactIdsShrink) {
            $res['contactIds'] = $this->contactIdsShrink;
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
        if (isset($map['contactIds'])) {
            $model->contactIdsShrink = $map['contactIds'];
        }

        return $model;
    }
}
