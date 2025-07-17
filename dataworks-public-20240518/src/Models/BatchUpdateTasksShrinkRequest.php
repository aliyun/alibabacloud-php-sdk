<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class BatchUpdateTasksShrinkRequest extends Model
{
    /**
     * @description The remarks.
     *
     * @example this is a comment
     *
     * @var string
     */
    public $comment;

    /**
     * @description The tasks.
     *
     * @var string
     */
    public $tasksShrink;
    protected $_name = [
        'comment' => 'Comment',
        'tasksShrink' => 'Tasks',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->tasksShrink) {
            $res['Tasks'] = $this->tasksShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchUpdateTasksShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['Tasks'])) {
            $model->tasksShrink = $map['Tasks'];
        }

        return $model;
    }
}
