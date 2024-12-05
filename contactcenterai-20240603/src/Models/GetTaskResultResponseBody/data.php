<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\GetTaskResultResponseBody;

use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\GetTaskResultResponseBody\data\asrResult;
use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @var asrResult[]
     */
    public $asrResult;

    /**
     * @var string
     */
    public $taskErrorMessage;

    /**
     * @example 20240905-********-93E9-5D45-B4EF-045743A34071
     *
     * @var string
     */
    public $taskId;

    /**
     * @example FINISH
     *
     * @var string
     */
    public $taskStatus;

    /**
     * @var string
     */
    public $text;
    protected $_name = [
        'asrResult'        => 'asrResult',
        'taskErrorMessage' => 'taskErrorMessage',
        'taskId'           => 'taskId',
        'taskStatus'       => 'taskStatus',
        'text'             => 'text',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->asrResult) {
            $res['asrResult'] = [];
            if (null !== $this->asrResult && \is_array($this->asrResult)) {
                $n = 0;
                foreach ($this->asrResult as $item) {
                    $res['asrResult'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['asrResult'])) {
            if (!empty($map['asrResult'])) {
                $model->asrResult = [];
                $n                = 0;
                foreach ($map['asrResult'] as $item) {
                    $model->asrResult[$n++] = null !== $item ? asrResult::fromMap($item) : $item;
                }
            }
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
