<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class ListMessageGroupUserByIdShrinkRequest extends Model
{
    /**
     * @description The ID of the interactive messaging application.
     *
     * This parameter is required.
     *
     * @example VKL3***
     *
     * @var string
     */
    public $appId;

    /**
     * @description The ID of the message group.
     *
     * This parameter is required.
     *
     * @example AE35-****-T95F
     *
     * @var string
     */
    public $groupId;

    /**
     * @description The list of users.
     *
     * This parameter is required.
     *
     * @var string
     */
    public $userIdListShrink;
    protected $_name = [
        'appId' => 'AppId',
        'groupId' => 'GroupId',
        'userIdListShrink' => 'UserIdList',
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
        if (null !== $this->userIdListShrink) {
            $res['UserIdList'] = $this->userIdListShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListMessageGroupUserByIdShrinkRequest
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
        if (isset($map['UserIdList'])) {
            $model->userIdListShrink = $map['UserIdList'];
        }

        return $model;
    }
}
