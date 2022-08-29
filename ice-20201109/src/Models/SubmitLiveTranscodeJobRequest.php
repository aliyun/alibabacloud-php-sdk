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
     * @var string
     */
    public $name;

    /**
     * @var int
     */
    public $startMode;

    /**
     * @var streamInput
     */
    public $streamInput;

    /**
     * @var string
     */
    public $templateId;

    /**
     * @var timedConfig
     */
    public $timedConfig;

    /**
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
