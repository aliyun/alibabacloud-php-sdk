<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAIImageJobsResponseBody;

use AlibabaCloud\Tea\Model;

class AIImageJobList extends Model
{
    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $creationTime;

    /**
     * @var string
     */
    public $AIImageResult;

    /**
     * @var string
     */
    public $videoId;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $templateConfig;

    /**
     * @var string
     */
    public $templateId;
    protected $_name = [
        'status'         => 'Status',
        'creationTime'   => 'CreationTime',
        'AIImageResult'  => 'AIImageResult',
        'videoId'        => 'VideoId',
        'jobId'          => 'JobId',
        'userData'       => 'UserData',
        'code'           => 'Code',
        'message'        => 'Message',
        'templateConfig' => 'TemplateConfig',
        'templateId'     => 'TemplateId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->AIImageResult) {
            $res['AIImageResult'] = $this->AIImageResult;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->templateConfig) {
            $res['TemplateConfig'] = $this->templateConfig;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AIImageJobList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['AIImageResult'])) {
            $model->AIImageResult = $map['AIImageResult'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['TemplateConfig'])) {
            $model->templateConfig = $map['TemplateConfig'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }

        return $model;
    }
}
