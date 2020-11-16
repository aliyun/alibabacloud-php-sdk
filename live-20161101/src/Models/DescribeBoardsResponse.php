<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Live\V20161101\Models;

use AlibabaCloud\SDK\Live\V20161101\Models\DescribeBoardsResponse\boards;
use AlibabaCloud\Tea\Model;

class DescribeBoardsResponse extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var boards[]
     */
    public $boards;
    protected $_name = [
        'requestId' => 'RequestId',
        'boards'    => 'Boards',
    ];

    public function validate()
    {
        Model::validateRequired('requestId', $this->requestId, true);
        Model::validateRequired('boards', $this->boards, true);
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->boards) {
            $res['Boards'] = [];
            if (null !== $this->boards && \is_array($this->boards)) {
                $n = 0;
                foreach ($this->boards as $item) {
                    $res['Boards'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeBoardsResponse
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Boards'])) {
            if (!empty($map['Boards'])) {
                $model->boards = [];
                $n             = 0;
                foreach ($map['Boards'] as $item) {
                    $model->boards[$n++] = null !== $item ? boards::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
