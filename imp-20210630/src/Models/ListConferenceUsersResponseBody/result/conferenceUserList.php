<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\ListConferenceUsersResponseBody\result;

use AlibabaCloud\Tea\Model;

class conferenceUserList extends Model
{
    /**
     * @description 用户ID。
     *
     * @var string
     */
    public $userId;

    /**
     * @description 用户状态。
     *
     * @var string
     */
    public $status;
    protected $_name = [
        'userId' => 'UserId',
        'status' => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return conferenceUserList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
