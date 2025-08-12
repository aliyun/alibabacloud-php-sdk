<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\IncidentNoteStruct;

use AlibabaCloud\Dara\Model;

class operator extends Model
{
    /**
     * @var string
     */
    public $contact;

    /**
     * @var string
     */
    public $contactId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $userId;
    protected $_name = [
        'contact' => 'contact',
        'contactId' => 'contactId',
        'name' => 'name',
        'userId' => 'userId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contact) {
            $res['contact'] = $this->contact;
        }

        if (null !== $this->contactId) {
            $res['contactId'] = $this->contactId;
        }

        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        if (null !== $this->userId) {
            $res['userId'] = $this->userId;
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
        if (isset($map['contact'])) {
            $model->contact = $map['contact'];
        }

        if (isset($map['contactId'])) {
            $model->contactId = $map['contactId'];
        }

        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        if (isset($map['userId'])) {
            $model->userId = $map['userId'];
        }

        return $model;
    }
}
