<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class UpdateLiveTranscodeJobShrinkRequest extends Model
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
     * @var string
     */
    public $streamInputShrink;
    /**
     * @var string
     */
    public $timedConfigShrink;
    /**
     * @var string
     */
    public $transcodeOutputShrink;
    protected $_name = [
        'jobId'                 => 'JobId',
        'name'                  => 'Name',
        'streamInputShrink'     => 'StreamInput',
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
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }

        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }

        if (null !== $this->streamInputShrink) {
            $res['StreamInput'] = $this->streamInputShrink;
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
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }

        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }

        if (isset($map['StreamInput'])) {
            $model->streamInputShrink = $map['StreamInput'];
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
