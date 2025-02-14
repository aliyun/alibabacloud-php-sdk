<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class GenerateMessageChatTokenResponseBody extends Model
{
    /**
     * @var string
     */
    public $appId;
    /**
     * @var string
     */
    public $appSign;
    /**
     * @var string
     */
    public $nonce;
    /**
     * @var string
     */
    public $requestId;
    /**
     * @var string
     */
    public $role;
    /**
     * @var int
     */
    public $timeStamp;
    /**
     * @var string
     */
    public $token;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
