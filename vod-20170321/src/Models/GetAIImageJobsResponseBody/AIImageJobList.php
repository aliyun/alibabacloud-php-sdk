<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAIImageJobsResponseBody;

use AlibabaCloud\Tea\Model;

class AIImageJobList extends Model
{
    /**
     * @description The Object Storage Service (OSS) URL of the image file.
     *
     * > This parameter does not include the complete authentication information. To obtain the authentication information, you must generate a signed URL. Alternatively, you can call the [ListAIImage](~~ListAIImage~~) operation to obtain the image information.
     * @example [{"Score":5.035636554444242,"Url":"http://outin-*****.oss-cn-shanghai.aliyuncs.com/357a8748c577*****789d2726e6436aa/image/ai/b0a7612554d*****5cbe3-00001.gif"}]
     *
     * @var string
     */
    public $AIImageResult;

    /**
     * @description The user data.
     *
     *   The value must be a JSON string.
     *   The MessageCallback or Extend parameter is returned.
     *   The value contains a maximum of 512 bytes.
     *
     * For more information, see the "UserData: specifies the custom configurations for media upload" section of the [Request parameters](~~86952~~) topic.
     * @example Success
     *
     * @var string
     */
    public $code;

    /**
     * @description The ID of the image AI processing job. You can obtain the value of JobId from the response to the [SubmitAIImageJob](~~186922~~) operation.
     *
     *   You can specify a maximum of 10 IDs.
     *   Separate multiple IDs with commas (,).
     *
     * @example 2020-10-15T03:30:03Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The ID of the image AI processing job.
     *
     * @example cf08a2c6e11e*****de1711b738b9067
     *
     * @var string
     */
    public $jobId;

    /**
     * @description Queries jobs of image AI processing.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The error code.
     *
     * @example success
     *
     * @var string
     */
    public $status;

    /**
     * @example {"Format":"gif","SetDefaultCover":"true"}
     *
     * @var string
     */
    public $templateConfig;

    /**
     * @example 5a86a00f15194*****d7fe7de1b4a173
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The ID of the request.
     *
     * @example {"Extend":{"localId":"****","test":"www"}}
     *
     * @var string
     */
    public $userData;

    /**
     * @description The configurations of the AI template that was used to submit the job.
     *
     * @example 357a8748c577*****789d2726e6436aa
     *
     * @var string
     */
    public $videoId;
    protected $_name = [
        'AIImageResult'  => 'AIImageResult',
        'code'           => 'Code',
        'creationTime'   => 'CreationTime',
        'jobId'          => 'JobId',
        'message'        => 'Message',
        'status'         => 'Status',
        'templateConfig' => 'TemplateConfig',
        'templateId'     => 'TemplateId',
        'userData'       => 'UserData',
        'videoId'        => 'VideoId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->AIImageResult) {
            $res['AIImageResult'] = $this->AIImageResult;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->templateConfig) {
            $res['TemplateConfig'] = $this->templateConfig;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
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
        if (isset($map['AIImageResult'])) {
            $model->AIImageResult = $map['AIImageResult'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TemplateConfig'])) {
            $model->templateConfig = $map['TemplateConfig'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
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
