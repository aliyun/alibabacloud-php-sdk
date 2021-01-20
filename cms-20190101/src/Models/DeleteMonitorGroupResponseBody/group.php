<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMonitorGroupResponseBody;

use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMonitorGroupResponseBody\group\contactGroups;
use AlibabaCloud\Tea\Model;

class group extends Model
{
    /**
     * @var string
     */
    public $groupName;

    /**
     * @var contactGroups
     */
    public $contactGroups;
    protected $_name = [
        'groupName'     => 'GroupName',
        'contactGroups' => 'ContactGroups',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->contactGroups) {
            $res['ContactGroups'] = null !== $this->contactGroups ? $this->contactGroups->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return group
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['ContactGroups'])) {
            $model->contactGroups = contactGroups::fromMap($map['ContactGroups']);
        }

        return $model;
    }
}
