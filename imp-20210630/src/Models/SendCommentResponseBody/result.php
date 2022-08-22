<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Imp\V20210630\Models\SendCommentResponseBody;

use AlibabaCloud\SDK\Imp\V20210630\Models\SendCommentResponseBody\result\commentVO;
use AlibabaCloud\Tea\Model;

class result extends Model
{
    /**
     * @var commentVO
     */
    public $commentVO;
    protected $_name = [
        'commentVO' => 'CommentVO',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->commentVO) {
            $res['CommentVO'] = null !== $this->commentVO ? $this->commentVO->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return result
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CommentVO'])) {
            $model->commentVO = commentVO::fromMap($map['CommentVO']);
        }

        return $model;
    }
}
