<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeBoardsResponseBody;

use AlibabaCloud\Tea\Model;

class boards extends Model
{
    /**
     * @var string
     */
    public $boardId;

    /**
     * @var int
     */
    public $state;

    /**
     * @var string
     */
    public $userId;

    /**
     * @var string
     */
    public $topic;
    protected $_name = [
        'boardId' => 'BoardId',
        'state'   => 'State',
        'userId'  => 'UserId',
        'topic'   => 'Topic',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->boardId) {
            $res['BoardId'] = $this->boardId;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return boards
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BoardId'])) {
            $model->boardId = $map['BoardId'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }

        return $model;
    }
}
