<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QuerySuperDeviceGroupResponseBody\data;

use AlibabaCloud\Tea\Model;

class groupInfo extends Model
{
    /**
     * @description The description of the parent group.
     *
     * @example A test
     *
     * @var string
     */
    public $groupDesc;

    /**
     * @description The ID of the parent group.
     *
     * @example tDQvBJqbUyHskDse
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the parent group.
     *
     * @example IOTTEST
     *
     * @var string
     */
    public $groupName;
    protected $_name = [
        'groupDesc' => 'GroupDesc',
        'groupId'   => 'GroupId',
        'groupName' => 'GroupName',
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

        return $model;
    }
}
