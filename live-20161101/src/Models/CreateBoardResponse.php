<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class CreateBoardResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $boardId;
    protected $_name = [
        'requestId' => 'RequestId',
        'boardId'   => 'BoardId',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('boardId', $this->boardId, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->boardId) {
            $res['BoardId'] = $this->boardId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBoardResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['BoardId'])) {
            $model->boardId = $map['BoardId'];
        }

        return $model;
    }
}
