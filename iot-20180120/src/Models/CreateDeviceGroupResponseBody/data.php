<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\CreateDeviceGroupResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The description of each group.
     *
     * @example Group test
     *
     * @var string
     */
    public $groupDesc;

    /**
     * @description The ID of the group. The ID is the globally unique identifier (GUID) that the system generates for the group.
     *
     * @example HtMLECKbdJQL****
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the group.
     *
     * @example grouptest
     *
     * @var string
     */
    public $groupName;

    /**
     * @description The time when the group was created.
     *
     * @example 2018-10-17T11:19:31.000Z
     *
     * @var string
     */
    public $utcCreate;
    protected $_name = [
        'groupDesc' => 'GroupDesc',
        'groupId'   => 'GroupId',
        'groupName' => 'GroupName',
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
        if (null !== $this->utcCreate) {
            $res['UtcCreate'] = $this->utcCreate;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
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
        if (isset($map['UtcCreate'])) {
            $model->utcCreate = $map['UtcCreate'];
        }

        return $model;
    }
}
