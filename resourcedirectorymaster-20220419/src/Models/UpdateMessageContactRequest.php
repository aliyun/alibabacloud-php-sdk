<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ResourceDirectoryMaster\V20220419\Models;

use AlibabaCloud\Dara\Model;

class UpdateMessageContactRequest extends Model
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
     * @var string[]
     */
    public $messageTypes;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $phoneNumber;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'contactId' => 'ContactId',
        'emailAddress' => 'EmailAddress',
        'messageTypes' => 'MessageTypes',
        'name' => 'Name',
        'phoneNumber' => 'PhoneNumber',
        'title' => 'Title',
    ];

    public function validate()
    {
        if (\is_array($this->messageTypes)) {
            Model::validateArray($this->messageTypes);
        }
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

        if (null !== $this->messageTypes) {
            if (\is_array($this->messageTypes)) {
                $res['MessageTypes'] = [];
                $n1 = 0;
                foreach ($this->messageTypes as $item1) {
                    $res['MessageTypes'][$n1] = $item1;
                    ++$n1;
                }
            }
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

        if (isset($map['MessageTypes'])) {
            if (!empty($map['MessageTypes'])) {
                $model->messageTypes = [];
                $n1 = 0;
                foreach ($map['MessageTypes'] as $item1) {
                    $model->messageTypes[$n1] = $item1;
                    ++$n1;
                }
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
