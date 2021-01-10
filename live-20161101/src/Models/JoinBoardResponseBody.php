<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class JoinBoardResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $token;

    /**
     * @var string
     */
    public $boardId;

    /**
     * @var string
     */
    public $topicId;

    /**
     * @var string
     */
    public $keepaliveTopic;

    /**
     * @var int
     */
    public $keepaliveInterval;
    protected $_name = [
        'requestId'         => 'RequestId',
        'token'             => 'Token',
        'boardId'           => 'BoardId',
        'topicId'           => 'TopicId',
        'keepaliveTopic'    => 'KeepaliveTopic',
        'keepaliveInterval' => 'KeepaliveInterval',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }
        if (null !== $this->boardId) {
            $res['BoardId'] = $this->boardId;
        }
        if (null !== $this->topicId) {
            $res['TopicId'] = $this->topicId;
        }
        if (null !== $this->keepaliveTopic) {
            $res['KeepaliveTopic'] = $this->keepaliveTopic;
        }
        if (null !== $this->keepaliveInterval) {
            $res['KeepaliveInterval'] = $this->keepaliveInterval;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return JoinBoardResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }
        if (isset($map['BoardId'])) {
            $model->boardId = $map['BoardId'];
        }
        if (isset($map['TopicId'])) {
            $model->topicId = $map['TopicId'];
        }
        if (isset($map['KeepaliveTopic'])) {
            $model->keepaliveTopic = $map['KeepaliveTopic'];
        }
        if (isset($map['KeepaliveInterval'])) {
            $model->keepaliveInterval = $map['KeepaliveInterval'];
        }

        return $model;
    }
}
