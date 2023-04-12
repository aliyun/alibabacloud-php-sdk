<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\DisassociateMembersResponseBody;

use AlibabaCloud\Tea\Model;

class members extends Model
{
    /**
     * @example c-qL4HqKONzOM7****
     *
     * @var string
     */
    public $contactId;

    /**
     * @example fd-ZDNPiT****
     *
     * @var string
     */
    public $memberId;

    /**
     * @example 2023-03-27 17:19:21
     *
     * @var string
     */
    public $modifyDate;
    protected $_name = [
        'contactId'  => 'ContactId',
        'memberId'   => 'MemberId',
        'modifyDate' => 'ModifyDate',
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
        if (null !== $this->memberId) {
            $res['MemberId'] = $this->memberId;
        }
        if (null !== $this->modifyDate) {
            $res['ModifyDate'] = $this->modifyDate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return members
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['MemberId'])) {
            $model->memberId = $map['MemberId'];
        }
        if (isset($map['ModifyDate'])) {
            $model->modifyDate = $map['ModifyDate'];
        }

        return $model;
    }
}
