<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryConsumerGroupListResponseBody\data;

use AlibabaCloud\Tea\Model;

class consumerGroupDTO extends Model
{
    /**
     * @example 2020-05-20T00:05:20.000Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example nJRaJPn5U1JITGf******
     *
     * @var string
     */
    public $groupId;

    /**
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
     * @return consumerGroupDTO
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
