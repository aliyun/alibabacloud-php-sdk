<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class DeleteContactGroupRequest extends Model
{
    /**
     * @description The ID of the alert contact group.
     *
     * @example 123
     *
     * @var int
     */
    public $contactGroupId;
    protected $_name = [
        'contactGroupId' => 'ContactGroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactGroupId) {
            $res['ContactGroupId'] = $this->contactGroupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteContactGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactGroupId'])) {
            $model->contactGroupId = $map['ContactGroupId'];
        }

        return $model;
    }
}
