<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\Tea\Model;

class UpdateMessageContactRequest extends Model
{
    /**
     * @example c-qL4HqKONzOM7****
     *
     * @var string
     */
    public $contactId;

    /**
     * @example someone***@example.com
     *
     * @var string
     */
    public $emailAddress;

    /**
     * @var string[]
     */
    public $messageTypes;

    /**
     * @example tom
     *
     * @var string
     */
    public $name;

    /**
     * @example 86-139****1234
     *
     * @var string
     */
    public $phoneNumber;

    /**
     * @example TechnicalDirector
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'contactId'    => 'ContactId',
        'emailAddress' => 'EmailAddress',
        'messageTypes' => 'MessageTypes',
        'name'         => 'Name',
        'phoneNumber'  => 'PhoneNumber',
        'title'        => 'Title',
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
        if (null !== $this->messageTypes) {
            $res['MessageTypes'] = $this->messageTypes;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->phoneNumber) {
            $res['PhoneNumber'] = $this->phoneNumber;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateMessageContactRequest
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
        if (isset($map['MessageTypes'])) {
            if (!empty($map['MessageTypes'])) {
                $model->messageTypes = $map['MessageTypes'];
            }
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['PhoneNumber'])) {
            $model->phoneNumber = $map['PhoneNumber'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
