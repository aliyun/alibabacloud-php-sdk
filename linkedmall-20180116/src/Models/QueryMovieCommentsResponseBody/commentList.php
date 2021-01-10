<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryMovieCommentsResponseBody;

use AlibabaCloud\SDK\Linkedmall\V20180116\Models\QueryMovieCommentsResponseBody\commentList\comment;
use AlibabaCloud\Tea\Model;

class commentList extends Model
{
    /**
     * @var comment[]
     */
    public $comment;
    protected $_name = [
        'comment' => 'Comment',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = [];
            if (null !== $this->comment && \is_array($this->comment)) {
                $n = 0;
                foreach ($this->comment as $item) {
                    $res['Comment'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return commentList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            if (!empty($map['Comment'])) {
                $model->comment = [];
                $n              = 0;
                foreach ($map['Comment'] as $item) {
                    $model->comment[$n++] = null !== $item ? comment::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
