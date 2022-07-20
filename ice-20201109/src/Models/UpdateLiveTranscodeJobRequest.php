<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateLiveTranscodeJobRequest\streamInput;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateLiveTranscodeJobRequest\timedConfig;
use AlibabaCloud\SDK\ICE\V20201109\Models\UpdateLiveTranscodeJobRequest\transcodeOutput;
use AlibabaCloud\Tea\Model;

class UpdateLiveTranscodeJobRequest extends Model
{
    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $name;

    /**
     * @var streamInput
     */
    public $streamInput;

    /**
     * @var timedConfig
     */
    public $timedConfig;

    /**
     * @var transcodeOutput
     */
    public $transcodeOutput;
    protected $_name = [
        'jobId'           => 'JobId',
        'name'            => 'Name',
        'streamInput'     => 'StreamInput',
        'timedConfig'     => 'TimedConfig',
        'transcodeOutput' => 'TranscodeOutput',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->streamInput) {
            $res['StreamInput'] = null !== $this->streamInput ? $this->streamInput->toMap() : null;
        }
        if (null !== $this->timedConfig) {
            $res['TimedConfig'] = null !== $this->timedConfig ? $this->timedConfig->toMap() : null;
        }
        if (null !== $this->transcodeOutput) {
            $res['TranscodeOutput'] = null !== $this->transcodeOutput ? $this->transcodeOutput->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateLiveTranscodeJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['StreamInput'])) {
            $model->streamInput = streamInput::fromMap($map['StreamInput']);
        }
        if (isset($map['TimedConfig'])) {
            $model->timedConfig = timedConfig::fromMap($map['TimedConfig']);
        }
        if (isset($map['TranscodeOutput'])) {
            $model->transcodeOutput = transcodeOutput::fromMap($map['TranscodeOutput']);
        }

        return $model;
    }
}
