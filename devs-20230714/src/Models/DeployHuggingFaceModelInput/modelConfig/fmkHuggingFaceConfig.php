<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Devs\V20230714\Models\DeployHuggingFaceModelInput\modelConfig;

use AlibabaCloud\Dara\Model;

class fmkHuggingFaceConfig extends Model
{
    /**
     * @var string
     */
    public $framework;

    /**
     * @var string
     */
    public $task;
    protected $_name = [
        'framework' => 'framework',
        'task' => 'task',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->framework) {
            $res['framework'] = $this->framework;
        }

        if (null !== $this->task) {
            $res['task'] = $this->task;
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
        if (isset($map['framework'])) {
            $model->framework = $map['framework'];
        }

        if (isset($map['task'])) {
            $model->task = $map['task'];
        }

        return $model;
    }
}
