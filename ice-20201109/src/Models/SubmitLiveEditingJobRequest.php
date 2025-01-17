<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class SubmitLiveEditingJobRequest extends Model
{
    /**
     * @var string
     */
    public $clips;
    /**
     * @var string
     */
    public $liveStreamConfig;
    /**
     * @var string
     */
    public $mediaProduceConfig;
    /**
     * @var string
     */
    public $outputMediaConfig;
    /**
     * @var string
     */
    public $outputMediaTarget;
    /**
     * @var string
     */
    public $projectId;
    /**
     * @var string
     */
    public $userData;
    protected $_name = [
        'clips'              => 'Clips',
        'liveStreamConfig'   => 'LiveStreamConfig',
        'mediaProduceConfig' => 'MediaProduceConfig',
        'outputMediaConfig'  => 'OutputMediaConfig',
        'outputMediaTarget'  => 'OutputMediaTarget',
        'projectId'          => 'ProjectId',
        'userData'           => 'UserData',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->clips) {
            $res['Clips'] = $this->clips;
        }

        if (null !== $this->liveStreamConfig) {
            $res['LiveStreamConfig'] = $this->liveStreamConfig;
        }

        if (null !== $this->mediaProduceConfig) {
            $res['MediaProduceConfig'] = $this->mediaProduceConfig;
        }

        if (null !== $this->outputMediaConfig) {
            $res['OutputMediaConfig'] = $this->outputMediaConfig;
        }

        if (null !== $this->outputMediaTarget) {
            $res['OutputMediaTarget'] = $this->outputMediaTarget;
        }

        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }

        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
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
        if (isset($map['Clips'])) {
            $model->clips = $map['Clips'];
        }

        if (isset($map['LiveStreamConfig'])) {
            $model->liveStreamConfig = $map['LiveStreamConfig'];
        }

        if (isset($map['MediaProduceConfig'])) {
            $model->mediaProduceConfig = $map['MediaProduceConfig'];
        }

        if (isset($map['OutputMediaConfig'])) {
            $model->outputMediaConfig = $map['OutputMediaConfig'];
        }

        if (isset($map['OutputMediaTarget'])) {
            $model->outputMediaTarget = $map['OutputMediaTarget'];
        }

        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }

        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
