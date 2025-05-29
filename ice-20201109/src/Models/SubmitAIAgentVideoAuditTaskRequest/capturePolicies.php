<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SubmitAIAgentVideoAuditTaskRequest;

use AlibabaCloud\Dara\Model;

class capturePolicies extends Model
{
    /**
     * @var int
     */
    public $duration;

    /**
     * @var int
     */
    public $frameCount;

    /**
     * @var string
     */
    public $prompt;

    /**
     * @var int
     */
    public $startTime;
    protected $_name = [
        'duration' => 'Duration',
        'frameCount' => 'FrameCount',
        'prompt' => 'Prompt',
        'startTime' => 'StartTime',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }

        if (null !== $this->frameCount) {
            $res['FrameCount'] = $this->frameCount;
        }

        if (null !== $this->prompt) {
            $res['Prompt'] = $this->prompt;
        }

        if (null !== $this->startTime) {
            $res['StartTime'] = $this->startTime;
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
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }

        if (isset($map['FrameCount'])) {
            $model->frameCount = $map['FrameCount'];
        }

        if (isset($map['Prompt'])) {
            $model->prompt = $map['Prompt'];
        }

        if (isset($map['StartTime'])) {
            $model->startTime = $map['StartTime'];
        }

        return $model;
    }
}
