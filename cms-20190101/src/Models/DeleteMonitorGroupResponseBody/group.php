<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMonitorGroupResponseBody;

use AlibabaCloud\SDK\Cms\V20190101\Models\DeleteMonitorGroupResponseBody\group\contactGroups;
use AlibabaCloud\Tea\Model;

class group extends Model
{
    /**
     * @description The alert groups that receive alert notifications for the application group.
     *
     * @var contactGroups
     */
    public $contactGroups;

    /**
     * @description The name of the application group.
     *
     * @example ECS_test
     *
     * @var string
     */
    public $groupName;
    protected $_name = [
        'contactGroups' => 'ContactGroups',
        'groupName'     => 'GroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactGroups) {
            $res['ContactGroups'] = null !== $this->contactGroups ? $this->contactGroups->toMap() : null;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
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
        if (isset($map['ContactGroups'])) {
            $model->contactGroups = contactGroups::fromMap($map['ContactGroups']);
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        return $model;
    }
}
