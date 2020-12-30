<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class SubmitTranscodeJobsRequest extends Model
{
    /**
     * @var string
     */
    public $videoId;

    /**
     * @var string
     */
    public $templateGroupId;

    /**
     * @var string
     */
    public $pipelineId;

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
    public $priority;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $fileUrl;
    protected $_name = [
        'videoId'         => 'VideoId',
        'templateGroupId' => 'TemplateGroupId',
        'pipelineId'      => 'PipelineId',
        'encryptConfig'   => 'EncryptConfig',
        'overrideParams'  => 'OverrideParams',
        'priority'        => 'Priority',
        'userData'        => 'UserData',
        'fileUrl'         => 'FileUrl',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }
        if (null !== $this->templateGroupId) {
            $res['TemplateGroupId'] = $this->templateGroupId;
        }
        if (null !== $this->pipelineId) {
            $res['PipelineId'] = $this->pipelineId;
        }
        if (null !== $this->encryptConfig) {
            $res['EncryptConfig'] = $this->encryptConfig;
        }
        if (null !== $this->overrideParams) {
            $res['OverrideParams'] = $this->overrideParams;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->fileUrl) {
            $res['FileUrl'] = $this->fileUrl;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return SubmitTranscodeJobsRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }
        if (isset($map['TemplateGroupId'])) {
            $model->templateGroupId = $map['TemplateGroupId'];
        }
        if (isset($map['PipelineId'])) {
            $model->pipelineId = $map['PipelineId'];
        }
        if (isset($map['EncryptConfig'])) {
            $model->encryptConfig = $map['EncryptConfig'];
        }
        if (isset($map['OverrideParams'])) {
            $model->overrideParams = $map['OverrideParams'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['FileUrl'])) {
            $model->fileUrl = $map['FileUrl'];
        }

        return $model;
    }
}
