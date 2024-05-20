<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class TextTaskResult extends Model
{
    /**
     * @var TextTask
     */
    public $textTask;
    protected $_name = [
        'textTask' => 'textTask',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->textTask) {
            $res['textTask'] = null !== $this->textTask ? $this->textTask->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return TextTaskResult
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['textTask'])) {
            $model->textTask = TextTask::fromMap($map['textTask']);
        }

        return $model;
    }
}
