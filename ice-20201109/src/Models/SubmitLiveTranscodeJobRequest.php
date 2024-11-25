<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitLiveTranscodeJobRequest\streamInput;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitLiveTranscodeJobRequest\timedConfig;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitLiveTranscodeJobRequest\transcodeOutput;
use AlibabaCloud\Tea\Model;

class SubmitLiveTranscodeJobRequest extends Model
{
    /**
     * @description The name of the transcoding job.
     *
     * This parameter is required.
     * @example task1
     *
     * @var string
     */
    public $name;

    /**
     * @description The start mode of the transcoding job.
     *
     *   0: The transcoding job immediately starts.
     *   1: The transcoding job starts at the scheduled time.
     *
     * This parameter is required.
     * @example 0
     *
     * @var int
     */
    public $startMode;

    /**
     * @description The information about the input stream.
     *
     * This parameter is required.
     * @var streamInput
     */
    public $streamInput;

    /**
     * @description The template ID.
     *
     * This parameter is required.
     * @example ****96e8864746a0b6f3****
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The configuration of a timed transcoding job. This parameter is required if you set StartMode to 1.
     *
     * @var timedConfig
     */
    public $timedConfig;

    /**
     * @description The information about the transcoding output.
     *
     * This parameter is required.
     * @var transcodeOutput
     */
    public $transcodeOutput;
    protected $_name = [
        'name'            => 'Name',
        'startMode'       => 'StartMode',
        'streamInput'     => 'StreamInput',
        'templateId'      => 'TemplateId',
        'timedConfig'     => 'TimedConfig',
        'transcodeOutput' => 'TranscodeOutput',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->startMode) {
            $res['StartMode'] = $this->startMode;
        }
        if (null !== $this->streamInput) {
            $res['StreamInput'] = null !== $this->streamInput ? $this->streamInput->toMap() : null;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
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
     * @return SubmitLiveTranscodeJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['StartMode'])) {
            $model->startMode = $map['StartMode'];
        }
        if (isset($map['StreamInput'])) {
            $model->streamInput = streamInput::fromMap($map['StreamInput']);
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
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
