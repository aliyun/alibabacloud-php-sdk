<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class SubmitLiveTranscodeJobShrinkRequest extends Model
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
     * @var string
     */
    public $streamInputShrink;
    /**
     * @var string
     */
    public $templateId;
    /**
     * @var string
     */
    public $timedConfigShrink;
    /**
     * @var string
     */
    public $transcodeOutputShrink;
    protected $_name = [
        'name'                  => 'Name',
        'startMode'             => 'StartMode',
        'streamInputShrink'     => 'StreamInput',
        'templateId'            => 'TemplateId',
        'timedConfigShrink'     => 'TimedConfig',
        'transcodeOutputShrink' => 'TranscodeOutput',
    ];

    public function validate()
    {
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

        if (null !== $this->streamInputShrink) {
            $res['StreamInput'] = $this->streamInputShrink;
        }

        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        if (null !== $this->timedConfigShrink) {
            $res['TimedConfig'] = $this->timedConfigShrink;
        }

        if (null !== $this->transcodeOutputShrink) {
            $res['TranscodeOutput'] = $this->transcodeOutputShrink;
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
            $model->streamInputShrink = $map['StreamInput'];
        }

        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        if (isset($map['TimedConfig'])) {
            $model->timedConfigShrink = $map['TimedConfig'];
        }

        if (isset($map['TranscodeOutput'])) {
            $model->transcodeOutputShrink = $map['TranscodeOutput'];
        }

        return $model;
    }
}
