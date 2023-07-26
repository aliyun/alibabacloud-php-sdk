<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\Tea\Model;

class DeleteMessageContactRequest extends Model
{
    /**
     * @description The ID of the contact.
     *
     * @example c-qL4HqKONzOM7****
     *
     * @var string
     */
    public $contactId;

    /**
     * @description Specifies whether to retain the contact for members. Valid values:
     *
     *   true (default): retains the contact for members. In this case, the contact can still receive messages for the members.
     *   false: does not retain the contact for members. In this case, the contact can no longer receive messages for the members. If you set this parameter to false, the response is asynchronously returned. You can call [GetMessageContactDeletionStatus](~~GetMessageContactDeletionStatus~~) to obtain the deletion result.
     *
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
