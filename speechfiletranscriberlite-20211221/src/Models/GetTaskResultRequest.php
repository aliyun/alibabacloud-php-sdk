<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\SpeechFileTranscriberLite\V20211221\Models;

use AlibabaCloud\Tea\Model;

class GetTaskResultRequest extends Model
{
    /**
     * @var bool
     */
    public $debug;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'debug'  => 'Debug',
        'taskId' => 'TaskId',
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
        if (null !== $this->taskId) {
            $res['TaskId'] = $this->taskId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetTaskResultRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Debug'])) {
            $model->debug = $map['Debug'];
        }
        if (isset($map['TaskId'])) {
            $model->taskId = $map['TaskId'];
        }

        return $model;
    }
}
