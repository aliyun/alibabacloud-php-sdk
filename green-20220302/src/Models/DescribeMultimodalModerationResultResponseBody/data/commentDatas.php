<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Green\V20220302\Models\DescribeMultimodalModerationResultResponseBody\data;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Green\V20220302\Models\DescribeMultimodalModerationResultResponseBody\data\commentDatas\commentDatas;
use AlibabaCloud\SDK\Green\V20220302\Models\DescribeMultimodalModerationResultResponseBody\data\commentDatas\results;

class commentDatas extends Model
{
    /**
     * @var commentDatas[]
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

    public function validate()
    {
        if (\is_array($this->commentDatas)) {
            Model::validateArray($this->commentDatas);
        }
        if (\is_array($this->results)) {
            Model::validateArray($this->results);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->commentDatas) {
            if (\is_array($this->commentDatas)) {
                $res['CommentDatas'] = [];
                $n1 = 0;
                foreach ($this->commentDatas as $item1) {
                    $res['CommentDatas'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->results) {
            if (\is_array($this->results)) {
                $res['Results'] = [];
                $n1 = 0;
                foreach ($this->results as $item1) {
                    $res['Results'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
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
        if (isset($map['CommentDatas'])) {
            if (!empty($map['CommentDatas'])) {
                $model->commentDatas = [];
                $n1 = 0;
                foreach ($map['CommentDatas'] as $item1) {
                    $model->commentDatas[$n1] = self::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['Results'])) {
            if (!empty($map['Results'])) {
                $model->results = [];
                $n1 = 0;
                foreach ($map['Results'] as $item1) {
                    $model->results[$n1] = results::fromMap($item1);
                    ++$n1;
                }
            }
        }

        return $model;
    }
}
