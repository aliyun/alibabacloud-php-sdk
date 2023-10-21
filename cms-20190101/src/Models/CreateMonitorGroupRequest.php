<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class CreateMonitorGroupRequest extends Model
{
    /**
     * @description The alert groups that receive alert notifications for the application group. The alarm notifications for the application group are sent to the alert contacts in the alarm groups.
     *
     * >  An alert group is a group of one or more alert contacts. For more information about how to create alert contacts and alert groups, see [PutContact](~~114923~~) and [PutContactGroup](~~114929~~).
     * @example ECS_Alert_Group
     *
     * @var string
     */
    public $contactGroups;

    /**
     * @description The name of the application group.
     *
     * @example ECS_Group
     *
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $regionId;
    protected $_name = [
        'contactGroups' => 'ContactGroups',
        'groupName'     => 'GroupName',
        'regionId'      => 'RegionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->contactGroups) {
            $res['ContactGroups'] = $this->contactGroups;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->regionId) {
            $res['RegionId'] = $this->regionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateMonitorGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactGroups'])) {
            $model->contactGroups = $map['ContactGroups'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['RegionId'])) {
            $model->regionId = $map['RegionId'];
        }

        return $model;
    }
}
