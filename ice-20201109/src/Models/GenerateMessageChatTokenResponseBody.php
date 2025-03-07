<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class GenerateMessageChatTokenResponseBody extends Model
{
    /**
     * @example ***********
     *
     * @var string
     */
    public $appId;

    /**
     * @example H4sIAAAAAAAE******************
     *
     * @var string
     */
    public $appSign;

    /**
     * @example AK-***********
     *
     * @var string
     */
    public $nonce;

    /**
     * @example req_1234567890abcdef
     *
     * @var string
     */
    public $requestId;

    /**
     * @example admin
     *
     * @var string
     */
    public $role;

    /**
     * @example 1700000000
     *
     * @var int
     */
    public $timeStamp;

    /**
     * @example acet**********
     *
     * @var string
     */
    public $token;

    /**
     * @example YOURUSERID
     *
     * @var string
     */
    public $userId;
    protected $_name = [
        'appId'     => 'AppId',
        'appSign'   => 'AppSign',
        'nonce'     => 'Nonce',
        'requestId' => 'RequestId',
        'role'      => 'Role',
        'timeStamp' => 'TimeStamp',
        'token'     => 'Token',
        'userId'    => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appSign) {
            $res['AppSign'] = $this->appSign;
        }
        if (null !== $this->nonce) {
            $res['Nonce'] = $this->nonce;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->role) {
            $res['Role'] = $this->role;
        }
        if (null !== $this->timeStamp) {
            $res['TimeStamp'] = $this->timeStamp;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateMessageChatTokenResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppSign'])) {
            $model->appSign = $map['AppSign'];
        }
        if (isset($map['Nonce'])) {
            $model->nonce = $map['Nonce'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Role'])) {
            $model->role = $map['Role'];
        }
        if (isset($map['TimeStamp'])) {
            $model->timeStamp = $map['TimeStamp'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
