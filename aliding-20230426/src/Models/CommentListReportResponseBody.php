<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Aliding\V20230426\Models\CommentListReportResponseBody\comments;

class CommentListReportResponseBody extends Model
{
    /**
     * @var comments[]
     */
    public $comments;
    /**
     * @var bool
     */
    public $hasMore;
    /**
     * @var int
     */
    public $nextCursor;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'comments'   => 'comments',
        'hasMore'    => 'hasMore',
        'nextCursor' => 'nextCursor',
        'requestId'  => 'requestId',
    ];

    public function validate()
    {
        if (\is_array($this->comments)) {
            Model::validateArray($this->comments);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->comments) {
            if (\is_array($this->comments)) {
                $res['comments'] = [];
                $n1              = 0;
                foreach ($this->comments as $item1) {
                    $res['comments'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->hasMore) {
            $res['hasMore'] = $this->hasMore;
        }

        if (null !== $this->nextCursor) {
            $res['nextCursor'] = $this->nextCursor;
        }

        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
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
        if (isset($map['comments'])) {
            if (!empty($map['comments'])) {
                $model->comments = [];
                $n1              = 0;
                foreach ($map['comments'] as $item1) {
                    $model->comments[$n1++] = comments::fromMap($item1);
                }
            }
        }

        if (isset($map['hasMore'])) {
            $model->hasMore = $map['hasMore'];
        }

        if (isset($map['nextCursor'])) {
            $model->nextCursor = $map['nextCursor'];
        }

        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        return $model;
    }
}
