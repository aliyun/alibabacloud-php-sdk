<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitLiveTranscodeJobRequest\streamInput;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitLiveTranscodeJobRequest\timedConfig;
use AlibabaCloud\SDK\ICE\V20201109\Models\SubmitLiveTranscodeJobRequest\transcodeOutput;

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
        if (null !== $this->streamInput) {
            $this->streamInput->validate();
        }
        if (null !== $this->timedConfig) {
            $this->timedConfig->validate();
        }
        if (null !== $this->transcodeOutput) {
            $this->transcodeOutput->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->startMode) {
            $res['StartMode'] = $this->startMode;
        }

        if (null !== $this->streamInput) {
            $res['StreamInput'] = null !== $this->streamInput ? $this->streamInput->toArray($noStream) : $this->streamInput;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->timedConfig) {
            $res['TimedConfig'] = null !== $this->timedConfig ? $this->timedConfig->toArray($noStream) : $this->timedConfig;
        }

        if (null !== $this->transcodeOutput) {
            $res['TranscodeOutput'] = null !== $this->transcodeOutput ? $this->transcodeOutput->toArray($noStream) : $this->transcodeOutput;
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
