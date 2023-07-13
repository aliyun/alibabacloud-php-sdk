<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iot\V20180120\Models\QueryConsumerGroupByGroupIdResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The time when the consumer group was created. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ss.SSSZ format. The time is displayed in UTC and accurate to milliseconds.
     *
     * @example 2020-05-20T00:05:20.000Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The ID of the consumer group.
     *
     * @example nJRaJPn5U1JITGf******
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The name of the consumer group.
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
     * @return data
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
