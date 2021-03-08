<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAICaptionExtractionJobsResponseBody;

use AlibabaCloud\Tea\Model;

class AICaptionExtractionJobList extends Model
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
    public $AICaptionExtractionResult;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $templateConfig;
    protected $_name = [
        'status'                    => 'Status',
        'creationTime'              => 'CreationTime',
        'videoId'                   => 'VideoId',
        'jobId'                     => 'JobId',
        'userData'                  => 'UserData',
        'code'                      => 'Code',
        'AICaptionExtractionResult' => 'AICaptionExtractionResult',
        'message'                   => 'Message',
        'templateConfig'            => 'TemplateConfig',
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
        if (null !== $this->AICaptionExtractionResult) {
            $res['AICaptionExtractionResult'] = $this->AICaptionExtractionResult;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->templateConfig) {
            $res['TemplateConfig'] = $this->templateConfig;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AICaptionExtractionJobList
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
        if (isset($map['AICaptionExtractionResult'])) {
            $model->AICaptionExtractionResult = $map['AICaptionExtractionResult'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['TemplateConfig'])) {
            $model->templateConfig = $map['TemplateConfig'];
        }

        return $model;
    }
}
