<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\Tea\Model;

class GetMessageContactRequest extends Model
{
    /**
     * @description The ID of the contact.
     *
     * This parameter is required.
     *
     * @example c-qL4HqKONzOM7****
     *
     * @var string
     */
    public $contactId;
    protected $_name = [
        'contactId' => 'ContactId',
    ];

    public function validate() {}

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
     * @return GetMessageContactRequest
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
