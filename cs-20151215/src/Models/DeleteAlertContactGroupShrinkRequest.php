<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Dara\Model;

class DeleteAlertContactGroupShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $contactGroupIdsShrink;
    protected $_name = [
        'contactGroupIdsShrink' => 'contact_group_ids',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactGroupIdsShrink) {
            $res['contact_group_ids'] = $this->contactGroupIdsShrink;
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
        if (isset($map['contact_group_ids'])) {
            $model->contactGroupIdsShrink = $map['contact_group_ids'];
        }

        return $model;
    }
}
