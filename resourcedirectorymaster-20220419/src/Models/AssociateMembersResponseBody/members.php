<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models\AssociateMembersResponseBody;

use AlibabaCloud\Dara\Model;

class members extends Model
{
    /**
     * @var string
     */
    public $contactId;
    /**
     * @var string
     */
    public $memberId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
