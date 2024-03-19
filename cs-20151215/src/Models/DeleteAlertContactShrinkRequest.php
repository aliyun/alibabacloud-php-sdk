<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CS\V20151215\Models;

use AlibabaCloud\Tea\Model;

class DeleteAlertContactShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $contactIdsShrink;
    protected $_name = [
        'contactIdsShrink' => 'contact_ids',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactIdsShrink) {
            $res['contact_ids'] = $this->contactIdsShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteAlertContactShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['contact_ids'])) {
            $model->contactIdsShrink = $map['contact_ids'];
        }

        return $model;
    }
}
