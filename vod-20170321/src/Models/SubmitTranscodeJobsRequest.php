<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Dara\Model;

class SubmitTranscodeJobsRequest extends Model
{
    /**
     * @var string
     */
    public $encryptConfig;

    /**
     * @var string
     */
    public $overrideParams;

    /**
     * @var string
     */
    public $pipelineId;

    /**
     * @var string
     */
    public $priority;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $templateGroupId;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $videoId;
    protected $_name = [
        'encryptConfig' => 'EncryptConfig',
        'overrideParams' => 'OverrideParams',
        'pipelineId' => 'PipelineId',
        'priority' => 'Priority',
        'sessionId' => 'SessionId',
        'templateGroupId' => 'TemplateGroupId',
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
        if (null !== $this->encryptConfig) {
            $res['EncryptConfig'] = $this->encryptConfig;
        }

        if (null !== $this->overrideParams) {
            $res['OverrideParams'] = $this->overrideParams;
        }

        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }

        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }

        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        if (null !== $this->templateGroupId) {
            $res['TemplateGroupId'] = $this->templateGroupId;
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
        if (isset($map['EncryptConfig'])) {
            $model->encryptConfig = $map['EncryptConfig'];
        }

        if (isset($map['OverrideParams'])) {
            $model->overrideParams = $map['OverrideParams'];
        }

        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }

        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }

        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        if (isset($map['TemplateGroupId'])) {
            $model->templateGroupId = $map['TemplateGroupId'];
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
