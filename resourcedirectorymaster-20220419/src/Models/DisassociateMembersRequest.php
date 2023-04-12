<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\Tea\Model;

class DisassociateMembersRequest extends Model
{
    /**
     * @example c-qL4HqKONzOM7****
     *
     * @var string
     */
    public $contactId;

    /**
     * @var string[]
     */
    public $members;
    protected $_name = [
        'contactId' => 'ContactId',
        'members'   => 'Members',
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
        if (null !== $this->members) {
            $res['Members'] = $this->members;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DisassociateMembersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['Members'])) {
            if (!empty($map['Members'])) {
                $model->members = $map['Members'];
            }
        }

        return $model;
    }
}
