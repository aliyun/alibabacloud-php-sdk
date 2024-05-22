<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SubmitLiveTranscodeJobShrinkRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example task1
     *
     * @var string
     */
    public $name;

    /**
     * @description This parameter is required.
     *
     * @example 0
     *
     * @var int
     */
    public $startMode;

    /**
     * @description This parameter is required.
     *
     * @var string
     */
    public $streamInputShrink;

    /**
     * @description This parameter is required.
     *
     * @example ****96e8864746a0b6f3****
     *
     * @var string
     */
    public $templateId;

    /**
     * @var string
     */
    public $timedConfigShrink;

    /**
     * @description This parameter is required.
     *
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

    /**
     * @param array $map
     *
     * @return SubmitLiveTranscodeJobShrinkRequest
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
