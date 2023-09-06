<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Aliding\V20230426\Models;

use AlibabaCloud\SDK\Aliding\V20230426\Models\CommentListReportResponseBody\comments;
use AlibabaCloud\Tea\Model;

class CommentListReportResponseBody extends Model
{
    /**
     * @var comments[]
     */
    public $comments;

    /**
     * @example true
     *
     * @var bool
     */
    public $hasMore;

    /**
     * @example 1568442466000
     *
     * @var int
     */
    public $nextCursor;

    /**
     * @description requestId
     *
     * @example 0FAAEC9C-C6C8-5C87-AF8E-1195889BBXXX
     *
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
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comments) {
            $res['comments'] = [];
            if (null !== $this->comments && \is_array($this->comments)) {
                $n = 0;
                foreach ($this->comments as $item) {
                    $res['comments'][$n++] = null !== $item ? $item->toMap() : $item;
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

    /**
     * @param array $map
     *
     * @return CommentListReportResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['comments'])) {
            if (!empty($map['comments'])) {
                $model->comments = [];
                $n               = 0;
                foreach ($map['comments'] as $item) {
                    $model->comments[$n++] = null !== $item ? comments::fromMap($item) : $item;
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
