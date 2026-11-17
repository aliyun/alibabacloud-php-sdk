<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\QwenEduAiSuite\V20261102\Models\GetEduHomeworkCorrectionResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\QwenEduAiSuite\V20261102\Models\GetEduHomeworkCorrectionResultResponseBody\data\questionResults;

class data extends Model
{
    /**
     * @var int
     */
    public $angle;

    /**
     * @var string
     */
    public $dewarpUrl;

    /**
     * @var questionResults[]
     */
    public $questionResults;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $taskId;
    protected $_name = [
        'angle' => 'angle',
        'dewarpUrl' => 'dewarpUrl',
        'questionResults' => 'questionResults',
        'status' => 'status',
        'taskId' => 'taskId',
    ];

    public function validate()
    {
        if (\is_array($this->questionResults)) {
            Model::validateArray($this->questionResults);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->angle) {
            $res['angle'] = $this->angle;
        }

        if (null !== $this->dewarpUrl) {
            $res['dewarpUrl'] = $this->dewarpUrl;
        }

        if (null !== $this->questionResults) {
            if (\is_array($this->questionResults)) {
                $res['questionResults'] = [];
                $n1 = 0;
                foreach ($this->questionResults as $item1) {
                    $res['questionResults'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->status) {
            $res['status'] = $this->status;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
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
        if (isset($map['angle'])) {
            $model->angle = $map['angle'];
        }

        if (isset($map['dewarpUrl'])) {
            $model->dewarpUrl = $map['dewarpUrl'];
        }

        if (isset($map['questionResults'])) {
            if (!empty($map['questionResults'])) {
                $model->questionResults = [];
                $n1 = 0;
                foreach ($map['questionResults'] as $item1) {
                    $model->questionResults[$n1] = questionResults::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['status'])) {
            $model->status = $map['status'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        return $model;
    }
}
