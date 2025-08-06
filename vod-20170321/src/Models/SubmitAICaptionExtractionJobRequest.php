<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class SubmitAICaptionExtractionJobRequest extends Model
{
    /**
     * @var string
     */
    public $AIPipelineId;

    /**
     * @var string
     */
    public $jobConfig;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $videoId;
    protected $_name = [
        'AIPipelineId' => 'AIPipelineId',
        'jobConfig' => 'JobConfig',
        'userData' => 'UserData',
        'videoId' => 'VideoId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->AIPipelineId) {
            $res['AIPipelineId'] = $this->AIPipelineId;
        }

        if (null !== $this->jobConfig) {
            $res['JobConfig'] = $this->jobConfig;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
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
        if (isset($map['AIPipelineId'])) {
            $model->AIPipelineId = $map['AIPipelineId'];
        }

        if (isset($map['JobConfig'])) {
            $model->jobConfig = $map['JobConfig'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }

        return $model;
    }
}
