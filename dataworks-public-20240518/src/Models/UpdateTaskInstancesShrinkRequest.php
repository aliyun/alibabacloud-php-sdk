<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class UpdateTaskInstancesShrinkRequest extends Model
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
     * @description The instances.
     *
     * @var string
     */
    public $taskInstancesShrink;
    protected $_name = [
        'comment' => 'Comment',
        'taskInstancesShrink' => 'TaskInstances',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->comment) {
            $res['Comment'] = $this->comment;
        }
        if (null !== $this->taskInstancesShrink) {
            $res['TaskInstances'] = $this->taskInstancesShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateTaskInstancesShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Comment'])) {
            $model->comment = $map['Comment'];
        }
        if (isset($map['TaskInstances'])) {
            $model->taskInstancesShrink = $map['TaskInstances'];
        }

        return $model;
    }
}
