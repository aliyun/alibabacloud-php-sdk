<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\Dara\Model;

class CancelMessageContactUpdateRequest extends Model
{
    /**
     * @var string
     */
    public $contactId;
    /**
     * @var string
     */
    public $emailAddress;
    /**
     * @var string
     */
    public $phoneNumber;
    protected $_name = [
        'contactId'    => 'ContactId',
        'emailAddress' => 'EmailAddress',
        'phoneNumber'  => 'PhoneNumber',
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

        if (null !== $this->emailAddress) {
            $res['EmailAddress'] = $this->emailAddress;
        }

        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
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

        if (isset($map['EmailAddress'])) {
            $model->emailAddress = $map['EmailAddress'];
        }

        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }

        return $model;
    }
}
