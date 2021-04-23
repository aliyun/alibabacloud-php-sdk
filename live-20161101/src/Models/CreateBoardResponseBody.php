<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\Tea\Model;

class CreateBoardResponseBody extends Model
{
    /**
     * @var string
     */
    public $boardId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'boardId'   => 'BoardId',
        'requestId' => 'RequestId',
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
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBoardResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BoardId'])) {
            $model->boardId = $map['BoardId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
