<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class BatchGetOnlineUsersRequest extends Model
{
    /**
     * @description The ID of the interactive messaging application.
     *
     * This parameter is required.
     *
     * @example a494caec-***-695ef345db77
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the message group.
     *
     * This parameter is required.
     *
     * @example 23wcaec-***695ef
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The list of user IDs. Separate multiple user IDs with commas (,). You can specify a maximum of 20 user IDs.
     *
     * This parameter is required.
     *
     * @example de1**a0,hu**9
     *
     * @var string
     */
    public $userIds;
    protected $_name = [
        'appId' => 'AppId',
        'groupId' => 'GroupId',
        'userIds' => 'UserIds',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->groupId) {
            $res['GroupId'] = $this->groupId;
        }
        if (null !== $this->userIds) {
            $res['UserIds'] = $this->userIds;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchGetOnlineUsersRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['GroupId'])) {
            $model->groupId = $map['GroupId'];
        }
        if (isset($map['UserIds'])) {
            $model->userIds = $map['UserIds'];
        }

        return $model;
    }
}
