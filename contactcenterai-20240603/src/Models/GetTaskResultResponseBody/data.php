<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\GetTaskResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\GetTaskResultResponseBody\data\asrResult;

class data extends Model
{
    /**
     * @var asrResult[]
     */
    public $asrResult;
    /**
     * @var string
     */
    public $extra;
    /**
     * @var string
     */
    public $taskErrorMessage;
    /**
     * @var string
     */
    public $taskId;
    /**
     * @var string
     */
    public $taskStatus;
    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'asrResult'        => 'asrResult',
        'extra'            => 'extra',
        'taskErrorMessage' => 'taskErrorMessage',
        'taskId'           => 'taskId',
        'taskStatus'       => 'taskStatus',
        'text'             => 'text',
    ];

    public function validate()
    {
        if (\is_array($this->asrResult)) {
            Model::validateArray($this->asrResult);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asrResult) {
            if (\is_array($this->asrResult)) {
                $res['asrResult'] = [];
                $n1               = 0;
                foreach ($this->asrResult as $item1) {
                    $res['asrResult'][$n1++] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                }
            }
        }

        if (null !== $this->extra) {
            $res['extra'] = $this->extra;
        }

        if (null !== $this->taskErrorMessage) {
            $res['taskErrorMessage'] = $this->taskErrorMessage;
        }

        if (null !== $this->taskId) {
            $res['taskId'] = $this->taskId;
        }

        if (null !== $this->taskStatus) {
            $res['taskStatus'] = $this->taskStatus;
        }

        if (null !== $this->text) {
            $res['text'] = $this->text;
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
        if (isset($map['asrResult'])) {
            if (!empty($map['asrResult'])) {
                $model->asrResult = [];
                $n1               = 0;
                foreach ($map['asrResult'] as $item1) {
                    $model->asrResult[$n1++] = asrResult::fromMap($item1);
                }
            }
        }

        if (isset($map['extra'])) {
            $model->extra = $map['extra'];
        }

        if (isset($map['taskErrorMessage'])) {
            $model->taskErrorMessage = $map['taskErrorMessage'];
        }

        if (isset($map['taskId'])) {
            $model->taskId = $map['taskId'];
        }

        if (isset($map['taskStatus'])) {
            $model->taskStatus = $map['taskStatus'];
        }

        if (isset($map['text'])) {
            $model->text = $map['text'];
        }

        return $model;
    }
}
