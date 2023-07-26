<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\Tea\Model;

class SendEmailVerificationForMessageContactRequest extends Model
{
    /**
     * @description The ID of the contact.
     *
     * @example c-5gsZAGt***PGduDF
     *
     * @var string
     */
    public $contactId;

    /**
     * @description The email address of the contact.
     *
     * The specified email address must be the one you specify when you call [AddMessageContact](~~AddMessageContact~~).
     * @example someone***@example.com
     *
     * @var string
     */
    public $emailAddress;
    protected $_name = [
        'contactId'    => 'ContactId',
        'emailAddress' => 'EmailAddress',
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
        if (null !== $this->emailAddress) {
            $res['EmailAddress'] = $this->emailAddress;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SendEmailVerificationForMessageContactRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactId'])) {
            $model->contactId = $map['ContactId'];
        }
        if (isset($map['EmailAddress'])) {
            $model->emailAddress = $map['EmailAddress'];
        }

        return $model;
    }
}
