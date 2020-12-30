<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\DescribeAllGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class groups extends Model
{
    /**
     * @var string
     */
    public $groupName;

    /**
     * @var int
     */
    public $groupId;

    /**
     * @var int
     */
    public $groupFlag;
    protected $_name = [
        'groupName' => 'GroupName',
        'groupId'   => 'GroupId',
        'groupFlag' => 'GroupFlag',
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
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->groupFlag) {
            $res['GroupFlag'] = $this->groupFlag;
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
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupFlag'])) {
            $model->groupFlag = $map['GroupFlag'];
        }

        return $model;
    }
}
