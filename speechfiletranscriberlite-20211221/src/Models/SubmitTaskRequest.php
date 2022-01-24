<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SpeechFileTranscriberLite\V20211221\Models;

use AlibabaCloud\Tea\Model;

class SubmitTaskRequest extends Model
{
    /**
     * @var bool
     */
    public $debug;

    /**
     * @var string
     */
    public $task;
    protected $_name = [
        'debug' => 'Debug',
        'task'  => 'Task',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->debug) {
            $res['Debug'] = $this->debug;
        }
        if (null !== $this->task) {
            $res['Task'] = $this->task;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Debug'])) {
            $model->debug = $map['Debug'];
        }
        if (isset($map['Task'])) {
            $model->task = $map['Task'];
        }

        return $model;
    }
}
