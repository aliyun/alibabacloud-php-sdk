<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAllGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class groups extends Model
{
    /**
     * @description The type of the server group. Valid values:
     *
     *   **0**: default group
     *   **1**: other groups
     *
     * @example 1
     *
     * @var int
     */
    public $groupFlag;

    /**
     * @description The ID of the server group.
     *
     * @example 8834224
     *
     * @var int
     */
    public $groupId;

    /**
     * @description The name of the server group.
     *
     * @example abc
     *
     * @var string
     */
    public $groupName;
    protected $_name = [
        'groupFlag' => 'GroupFlag',
        'groupId'   => 'GroupId',
        'groupName' => 'GroupName',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupFlag) {
            $res['GroupFlag'] = $this->groupFlag;
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
     * @return groups
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupFlag'])) {
            $model->groupFlag = $map['GroupFlag'];
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
