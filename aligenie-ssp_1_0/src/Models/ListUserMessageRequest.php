<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models;

use AlibabaCloud\SDK\AliGenie\Vssp_1_0\Models\ListUserMessageRequest\userInfo;
use AlibabaCloud\Tea\Model;

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
        'userInfo'   => 'UserInfo',
        'limit'      => 'limit',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->beforeTime) {
            $res['BeforeTime'] = $this->beforeTime;
        }
        if (null !== $this->userInfo) {
            $res['UserInfo'] = null !== $this->userInfo ? $this->userInfo->toMap() : null;
        }
        if (null !== $this->limit) {
            $res['limit'] = $this->limit;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListUserMessageRequest
     */
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
