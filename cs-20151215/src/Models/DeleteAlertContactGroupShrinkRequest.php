<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactGroupIdsShrink) {
            $res['contact_group_ids'] = $this->contactGroupIdsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAlertContactGroupShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['contact_group_ids'])) {
            $model->contactGroupIdsShrink = $map['contact_group_ids'];
        }

        return $model;
    }
}
