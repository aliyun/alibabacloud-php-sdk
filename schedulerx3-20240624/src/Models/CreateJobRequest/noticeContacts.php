<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models\CreateJobRequest;

use AlibabaCloud\Dara\Model;

class noticeContacts extends Model
{
    /**
     * @var int
     */
    public $contactType;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'contactType' => 'ContactType',
        'name' => 'Name',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactType) {
            $res['ContactType'] = $this->contactType;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
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
        if (isset($map['ContactType'])) {
            $model->contactType = $map['ContactType'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        return $model;
    }
}
