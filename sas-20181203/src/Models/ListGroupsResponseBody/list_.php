<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sas\V20181203\Models\ListGroupsResponseBody;

use AlibabaCloud\Tea\Model;

class list_ extends Model
{
    /**
     * @example 1
     *
     * @var int
     */
    public $groupFlag;

    /**
     * @example 11028542
     *
     * @var int
     */
    public $groupId;

    /**
     * @example cn-shenzhen+dir-1440978***
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
     * @return list_
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
