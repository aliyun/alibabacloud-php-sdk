<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Tea\Model;

class SubmitLiveEditingJobRequest extends Model
{
    /**
     * @var string
     */
    public $clips;

    /**
     * @var string
     */
    public $projectId;

    /**
     * @var string
     */
    public $liveStreamConfig;

    /**
     * @var string
     */
    public $outputMediaConfig;

    /**
     * @var string
     */
    public $mediaProduceConfig;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $outputMediaTarget;
    protected $_name = [
        'clips'              => 'Clips',
        'projectId'          => 'ProjectId',
        'liveStreamConfig'   => 'LiveStreamConfig',
        'outputMediaConfig'  => 'OutputMediaConfig',
        'mediaProduceConfig' => 'MediaProduceConfig',
        'userData'           => 'UserData',
        'outputMediaTarget'  => 'OutputMediaTarget',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clips) {
            $res['Clips'] = $this->clips;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->liveStreamConfig) {
            $res['LiveStreamConfig'] = $this->liveStreamConfig;
        }
        if (null !== $this->outputMediaConfig) {
            $res['OutputMediaConfig'] = $this->outputMediaConfig;
        }
        if (null !== $this->mediaProduceConfig) {
            $res['MediaProduceConfig'] = $this->mediaProduceConfig;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->outputMediaTarget) {
            $res['OutputMediaTarget'] = $this->outputMediaTarget;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitLiveEditingJobRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Clips'])) {
            $model->clips = $map['Clips'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['LiveStreamConfig'])) {
            $model->liveStreamConfig = $map['LiveStreamConfig'];
        }
        if (isset($map['OutputMediaConfig'])) {
            $model->outputMediaConfig = $map['OutputMediaConfig'];
        }
        if (isset($map['MediaProduceConfig'])) {
            $model->mediaProduceConfig = $map['MediaProduceConfig'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['OutputMediaTarget'])) {
            $model->outputMediaTarget = $map['OutputMediaTarget'];
        }

        return $model;
    }
}
