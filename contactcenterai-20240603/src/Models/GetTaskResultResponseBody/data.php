<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\GetTaskResultResponseBody;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\GetTaskResultResponseBody\data\asrResult;
use AlibabaCloud\SDK\ContactCenterAI\V20240603\Models\GetTaskResultResponseBody\data\usage;

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
    public $ragErrorMessage;

    /**
     * @var string
     */
    public $ragResult;

    /**
     * @var string
     */
    public $ragStatus;

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

    /**
     * @var usage
     */
    public $usage;
    protected $_name = [
        'asrResult' => 'asrResult',
        'extra' => 'extra',
        'ragErrorMessage' => 'ragErrorMessage',
        'ragResult' => 'ragResult',
        'ragStatus' => 'ragStatus',
        'taskErrorMessage' => 'taskErrorMessage',
        'taskId' => 'taskId',
        'taskStatus' => 'taskStatus',
        'text' => 'text',
        'usage' => 'usage',
    ];

    public function validate()
    {
        if (\is_array($this->asrResult)) {
            Model::validateArray($this->asrResult);
        }
        if (null !== $this->usage) {
            $this->usage->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->asrResult) {
            if (\is_array($this->asrResult)) {
                $res['asrResult'] = [];
                $n1 = 0;
                foreach ($this->asrResult as $item1) {
                    $res['asrResult'][$n1] = null !== $item1 ? $item1->toArray($noStream) : $item1;
                    ++$n1;
                }
            }
        }

        if (null !== $this->extra) {
            $res['extra'] = $this->extra;
        }

        if (null !== $this->ragErrorMessage) {
            $res['ragErrorMessage'] = $this->ragErrorMessage;
        }

        if (null !== $this->ragResult) {
            $res['ragResult'] = $this->ragResult;
        }

        if (null !== $this->ragStatus) {
            $res['ragStatus'] = $this->ragStatus;
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

        if (null !== $this->usage) {
            $res['usage'] = null !== $this->usage ? $this->usage->toArray($noStream) : $this->usage;
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
                $n1 = 0;
                foreach ($map['asrResult'] as $item1) {
                    $model->asrResult[$n1] = asrResult::fromMap($item1);
                    ++$n1;
                }
            }
        }

        if (isset($map['extra'])) {
            $model->extra = $map['extra'];
        }

        if (isset($map['ragErrorMessage'])) {
            $model->ragErrorMessage = $map['ragErrorMessage'];
        }

        if (isset($map['ragResult'])) {
            $model->ragResult = $map['ragResult'];
        }

        if (isset($map['ragStatus'])) {
            $model->ragStatus = $map['ragStatus'];
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

        if (isset($map['usage'])) {
            $model->usage = usage::fromMap($map['usage']);
        }

        return $model;
    }
}
