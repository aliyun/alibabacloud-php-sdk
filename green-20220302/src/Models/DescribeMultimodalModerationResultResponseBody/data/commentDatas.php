<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\DescribeMultimodalModerationResultResponseBody\data;

use AlibabaCloud\SDK\Green\V20220302\Models\DescribeMultimodalModerationResultResponseBody\data\commentDatas\results;
use AlibabaCloud\Tea\Model;

class commentDatas extends Model
{
    /**
     * @var commentDatas\commentDatas[]
     */
    public $commentDatas;

    /**
     * @var results[]
     */
    public $results;
    protected $_name = [
        'commentDatas' => 'CommentDatas',
        'results' => 'Results',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->commentDatas) {
            $res['CommentDatas'] = [];
            if (null !== $this->commentDatas && \is_array($this->commentDatas)) {
                $n = 0;
                foreach ($this->commentDatas as $item) {
                    $res['CommentDatas'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->results) {
            $res['Results'] = [];
            if (null !== $this->results && \is_array($this->results)) {
                $n = 0;
                foreach ($this->results as $item) {
                    $res['Results'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commentDatas
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommentDatas'])) {
            if (!empty($map['CommentDatas'])) {
                $model->commentDatas = [];
                $n = 0;
                foreach ($map['CommentDatas'] as $item) {
                    $model->commentDatas[$n++] = null !== $item ? commentDatas\commentDatas::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['Results'])) {
            if (!empty($map['Results'])) {
                $model->results = [];
                $n = 0;
                foreach ($map['Results'] as $item) {
                    $model->results[$n++] = null !== $item ? results::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
