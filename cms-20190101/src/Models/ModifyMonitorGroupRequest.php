<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Cms\V20190101\Models;

use AlibabaCloud\Tea\Model;

class ModifyMonitorGroupRequest extends Model
{
    /**
     * @description The alert groups that can receive alert notifications for the application group.
     *
     * @example alarm_ecs_group
     *
     * @var string
     */
    public $contactGroups;

    /**
     * @description The ID of the application group.
     *
     * This parameter is required.
     * @example 123456
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the application group.
     *
     * @example ecs_group
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
        'groupId'       => 'GroupId',
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
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
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
     * @return ModifyMonitorGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContactGroups'])) {
            $model->contactGroups = $map['ContactGroups'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
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
