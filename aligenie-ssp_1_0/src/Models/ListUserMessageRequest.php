<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListUserMessageRequest\userInfo;

class ListUserMessageRequest extends Model
{
    /**
     * @var string
     */
    public $beforeTime;

    /**
     * @var userInfo
     */
    public $userInfo;

    /**
     * @var int
     */
    public $limit;
    protected $_name = [
        'beforeTime' => 'BeforeTime',
        'userInfo' => 'UserInfo',
        'limit' => 'limit',
    ];

    public function validate()
    {
        if (null !== $this->userInfo) {
            $this->userInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->beforeTime) {
            $res['BeforeTime'] = $this->beforeTime;
        }

        if (null !== $this->userInfo) {
            $res['UserInfo'] = null !== $this->userInfo ? $this->userInfo->toArray($noStream) : $this->userInfo;
        }

        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BeforeTime'])) {
            $model->beforeTime = $map['BeforeTime'];
        }

        if (isset($map['UserInfo'])) {
            $model->userInfo = userInfo::fromMap($map['UserInfo']);
        }

        if (isset($map['limit'])) {
            $model->limit = $map['limit'];
        }

        return $model;
    }
}
