<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListServiceGroupsResponseBody\serviceGroupsList;

use AlibabaCloud\Tea\Model;

class listServiceGroups extends Model
{
    /**
     * @description The time when the service group was created. This value is a UNIX timestamp representing the number of milliseconds that have elapsed since the epoch time January 1, 1970, 00:00:00 UTC.
     *
     * @example 1575357165770
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the service group.
     *
     * @example 789d9cda-74b1-****-****-05e21a0a7661
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the service group.
     *
     * @example edas-test-group
     *
     * @var string
     */
    public $groupName;
    protected $_name = [
        'createTime' => 'CreateTime',
        'groupId'    => 'GroupId',
        'groupName'  => 'GroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return listServiceGroups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        return $model;
    }
}
