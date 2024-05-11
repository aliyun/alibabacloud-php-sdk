<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class DeleteContactRequest extends Model
{
    /**
     * @description The operation that you want to perform. Set the value to **DeleteContact**.
     *
     * This parameter is required.
     * @example 123
     *
     * @var int
     */
    public $contactId;
    protected $_name = [
        'contactId' => 'ContactId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactId) {
            $res['ContactId'] = $this->contactId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteContactRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }

        return $model;
    }
}
