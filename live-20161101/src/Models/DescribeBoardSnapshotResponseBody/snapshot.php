<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models\DescribeBoardSnapshotResponseBody;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeBoardSnapshotResponseBody\snapshot\board;
use AlibabaCloud\Tea\Model;

class snapshot extends Model
{
    /**
     * @var board
     */
    public $board;
    protected $_name = [
        'board' => 'Board',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->board) {
            $res['Board'] = null !== $this->board ? $this->board->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return snapshot
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Board'])) {
            $model->board = board::fromMap($map['Board']);
        }

        return $model;
    }
}
