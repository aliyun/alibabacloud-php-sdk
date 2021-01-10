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
     * @var string
     */
    public $topic;

    /**
     * @var int
     */
    public $state;

    /**
     * @var string
     */
    public $userId;
    protected $_name = [
        'boardId' => 'BoardId',
        'topic'   => 'Topic',
        'state'   => 'State',
        'userId'  => 'UserId',
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
        if (null !== $this->topic) {
            $res['Topic'] = $this->topic;
        }
        if (null !== $this->state) {
            $res['State'] = $this->state;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
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
        if (isset($map['Topic'])) {
            $model->topic = $map['Topic'];
        }
        if (isset($map['State'])) {
            $model->state = $map['State'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
