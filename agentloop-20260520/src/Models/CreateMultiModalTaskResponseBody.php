<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\AgentLoop\V20260520\Models;

use AlibabaCloud\Dara\Model;

class CreateMultiModalTaskResponseBody extends Model
{
    /**
     * @var string
     */
    public $msg;

    /**
     * @var float
     */
    public $score;

    /**
     * @var string
     */
    public $taskId;

    /**
     * @var string
     */
    public $taskName;
    protected $_name = [
        'msg' => 'msg',
        'score' => 'score',
        'taskId' => 'taskId',
        'taskName' => 'taskName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->msg) {
            $res['msg'] = $this->msg;
        }

        if (null !== $this->score) {
            $res['score'] = $this->score;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->taskName) {
            $res['taskName'] = $this->taskName;
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
        if (isset($map['msg'])) {
            $model->msg = $map['msg'];
        }

        if (isset($map['score'])) {
            $model->score = $map['score'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['taskName'])) {
            $model->taskName = $map['taskName'];
        }

        return $model;
    }
}
