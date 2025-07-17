<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataworkspublic\V20240518\Models;

use AlibabaCloud\Tea\Model;

class CreateLineageRelationshipShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $dstEntityShrink;

    /**
     * @var string
     */
    public $srcEntityShrink;

    /**
     * @description The task information.
     *
     * @var string
     */
    public $taskShrink;
    protected $_name = [
        'dstEntityShrink' => 'DstEntity',
        'srcEntityShrink' => 'SrcEntity',
        'taskShrink' => 'Task',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->dstEntityShrink) {
            $res['DstEntity'] = $this->dstEntityShrink;
        }
        if (null !== $this->srcEntityShrink) {
            $res['SrcEntity'] = $this->srcEntityShrink;
        }
        if (null !== $this->taskShrink) {
            $res['Task'] = $this->taskShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateLineageRelationshipShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DstEntity'])) {
            $model->dstEntityShrink = $map['DstEntity'];
        }
        if (isset($map['SrcEntity'])) {
            $model->srcEntityShrink = $map['SrcEntity'];
        }
        if (isset($map['Task'])) {
            $model->taskShrink = $map['Task'];
        }

        return $model;
    }
}
