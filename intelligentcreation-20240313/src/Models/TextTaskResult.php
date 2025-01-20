<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

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
        if (null !== $this->textTask) {
            $this->textTask->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->textTask) {
            $res['textTask'] = null !== $this->textTask ? $this->textTask->toArray($noStream) : $this->textTask;
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
        if (isset($map['textTask'])) {
            $model->textTask = TextTask::fromMap($map['textTask']);
        }

        return $model;
    }
}
