<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\UniMkt\V20181212\Models;

use AlibabaCloud\Tea\Model;

class GetUnionTaskStatusRequest extends Model
{
    /**
     * @var int
     */
    public $taskId;

    /**
     * @var string
     */
    public $sign;

    /**
     * @var int
     */
    public $alipayOpenId;

    /**
     * @var int
     */
    public $userId;

    /**
     * @var string
     */
    public $userNick;
    protected $_name = [
        'taskId'       => 'TaskId',
        'sign'         => 'Sign',
        'alipayOpenId' => 'AlipayOpenId',
        'userId'       => 'UserId',
        'userNick'     => 'UserNick',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }
        if (null !== $this->sign) {
            $res['Sign'] = $this->sign;
        }
        if (null !== $this->alipayOpenId) {
            $res['AlipayOpenId'] = $this->alipayOpenId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->userNick) {
            $res['UserNick'] = $this->userNick;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetUnionTaskStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }
        if (isset($map['Sign'])) {
            $model->sign = $map['Sign'];
        }
        if (isset($map['AlipayOpenId'])) {
            $model->alipayOpenId = $map['AlipayOpenId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['UserNick'])) {
            $model->userNick = $map['UserNick'];
        }

        return $model;
    }
}
