<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMonitorGroupResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMonitorGroupResponseBody\group\contactGroups;

class group extends Model
{
    /**
     * @var contactGroups
     */
    public $contactGroups;

    /**
     * @var string
     */
    public $groupName;
    protected $_name = [
        'contactGroups' => 'ContactGroups',
        'groupName' => 'GroupName',
    ];

    public function validate()
    {
        if (null !== $this->contactGroups) {
            $this->contactGroups->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contactGroups) {
            $res['ContactGroups'] = null !== $this->contactGroups ? $this->contactGroups->toArray($noStream) : $this->contactGroups;
        }

        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
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
        if (isset($map['ContactGroups'])) {
            $model->contactGroups = contactGroups::fromMap($map['ContactGroups']);
        }

        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        return $model;
    }
}
