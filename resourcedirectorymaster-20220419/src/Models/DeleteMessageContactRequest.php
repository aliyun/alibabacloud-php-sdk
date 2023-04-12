<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\Tea\Model;

class DeleteMessageContactRequest extends Model
{
    /**
     * @example c-qL4HqKONzOM7****
     *
     * @var string
     */
    public $contactId;

    /**
     * @example true
     *
     * @var bool
     */
    public $retainContactInMembers;
    protected $_name = [
        'contactId'              => 'ContactId',
        'retainContactInMembers' => 'RetainContactInMembers',
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
        if (null !== $this->retainContactInMembers) {
            $res['RetainContactInMembers'] = $this->retainContactInMembers;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DeleteMessageContactRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['RetainContactInMembers'])) {
            $model->retainContactInMembers = $map['RetainContactInMembers'];
        }

        return $model;
    }
}
