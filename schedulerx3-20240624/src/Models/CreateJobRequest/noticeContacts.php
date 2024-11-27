<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SchedulerX3\V20240624\Models\CreateJobRequest;

use AlibabaCloud\Tea\Model;

class noticeContacts extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $contactType;

    /**
     * @example xiaoming
     *
     * @var string
     */
    public $name;
    protected $_name = [
        'contactType' => 'ContactType',
        'name'        => 'Name',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return noticeContacts
     */
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
