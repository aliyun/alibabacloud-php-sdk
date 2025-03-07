<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class UpdateLiveTranscodeJobShrinkRequest extends Model
{
    /**
     * @description The job ID.
     *
     * This parameter is required.
     * @example ****20b48fb04483915d4f2cd8ac****
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The name of the job.
     *
     * @example mytest3
     *
     * @var string
     */
    public $name;

    /**
     * @description The information about the input stream.
     *
     * @var string
     */
    public $streamInputShrink;

    /**
     * @description The configuration of a timed transcoding job.
     *
     * @var string
     */
    public $timedConfigShrink;

    /**
     * @description The information about the transcoding output.
     *
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

    /**
     * @param array $map
     *
     * @return UpdateLiveTranscodeJobShrinkRequest
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
