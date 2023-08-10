<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eiam\V20211201\Models\ListGroupsForApplicationResponseBody;

use AlibabaCloud\Tea\Model;

class groups extends Model
{
    /**
     * @description The group ID.
     *
     * @example group_miu8e4t4d7i4u7uwezgr54xxxx
     *
     * @var string
     */
    public $groupId;
    protected $_name = [
        'groupId' => 'GroupId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }

        return $model;
    }
}
