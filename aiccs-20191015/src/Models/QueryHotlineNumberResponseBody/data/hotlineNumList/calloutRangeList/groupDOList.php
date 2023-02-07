<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aiccs\V20191015\Models\QueryHotlineNumberResponseBody\data\hotlineNumList\calloutRangeList;

use AlibabaCloud\Tea\Model;

class groupDOList extends Model
{
    /**
     * @example 6083****
     *
     * @var int
     */
    public $groupId;

    /**
     * @var string
     */
    public $groupName;
    protected $_name = [
        'groupId'   => 'GroupId',
        'groupName' => 'GroupName',
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
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return groupDOList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }

        return $model;
    }
}
