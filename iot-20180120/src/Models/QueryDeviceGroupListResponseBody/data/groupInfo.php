<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryDeviceGroupListResponseBody\data;

use AlibabaCloud\Tea\Model;

class groupInfo extends Model
{
    /**
     * @description The description of the group.
     *
     * @example usefulGroup
     *
     * @var string
     */
    public $groupDesc;

    /**
     * @description The ID of the group.
     *
     * @example Kzt9FD8wje8o****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the group.
     *
     * @example test1
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The type of the group.
     *
     * @example LINK_PLATFORM_DYNAMIC
     *
     * @var string
     */
    public $groupType;

    /**
     * @description The time when the group was created.
     *
     * @example 2018-10-09T02:58:34.000Z
     *
     * @var string
     */
    public $utcCreate;
    protected $_name = [
        'groupDesc' => 'GroupDesc',
        'groupId'   => 'GroupId',
        'groupName' => 'GroupName',
        'groupType' => 'GroupType',
        'utcCreate' => 'UtcCreate',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupDesc) {
            $res['GroupDesc'] = $this->groupDesc;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->groupType) {
            $res['GroupType'] = $this->groupType;
        }
        if (null !== $this->utcCreate) {
            $res['UtcCreate'] = $this->utcCreate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groupInfo
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupDesc'])) {
            $model->groupDesc = $map['GroupDesc'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['GroupType'])) {
            $model->groupType = $map['GroupType'];
        }
        if (isset($map['UtcCreate'])) {
            $model->utcCreate = $map['UtcCreate'];
        }

        return $model;
    }
}
