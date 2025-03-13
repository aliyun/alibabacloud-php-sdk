<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class BatchGetVideoClipTaskShrinkRequest extends Model
{
    /**
     * @var string
     */
    public $taskIdListShrink;
    protected $_name = [
        'taskIdListShrink' => 'taskIdList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->taskIdListShrink) {
            $res['taskIdList'] = $this->taskIdListShrink;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return BatchGetVideoClipTaskShrinkRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['taskIdList'])) {
            $model->taskIdListShrink = $map['taskIdList'];
        }

        return $model;
    }
}
