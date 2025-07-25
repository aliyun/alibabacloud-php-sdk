<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20240330\Models\IncidentMemberStruct;

use AlibabaCloud\Tea\Model;

class scheduleGroup extends Model
{
    /**
     * @var string
     */
    public $contactId;

    /**
     * @var string
     */
    public $name;
    protected $_name = [
        'contactId' => 'contactId',
        'name' => 'name',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactId) {
            $res['contactId'] = $this->contactId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return scheduleGroup
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['contactId'])) {
            $model->contactId = $map['contactId'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }

        return $model;
    }
}
