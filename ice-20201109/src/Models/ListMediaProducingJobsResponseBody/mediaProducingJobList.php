<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaProducingJobsResponseBody;

use AlibabaCloud\Tea\Model;

class mediaProducingJobList extends Model
{
    /**
     * @description The template material parameters.
     *
     * @example {"Text1":"text","Text0":"text","Media1":"mediaId","Media0":"mediaId"}
     *
     * @var string
     */
    public $clipsParam;

    /**
     * @description The response code.
     *
     * @example Success
     *
     * @var string
     */
    public $code;

    /**
     * @description The time when the job was complete. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2022-03-21T16:40:30Z
     *
     * @var string
     */
    public $completeTime;

    /**
     * @description The time when the job was created. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2022-03-21T16:40:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The duration of the output file. Unit: seconds.
     *
     * @example 15.5
     *
     * @var float
     */
    public $duration;

    /**
     * @description The ID of the online editing job.
     *
     * @example ******8750b54e3c976a47da6f******
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The media asset ID of the output file.
     *
     * @example 0ce4ea70f52471edab61f7e7d6786302
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description The URL of the output file.
     *
     * @example http://your-bucket.oss-cn-shanghai.aliyuncs.com/your-video.mp4
     *
     * @var string
     */
    public $mediaURL;

    /**
     * @description The returned message. Note: Pay attention to this parameter if the job failed.
     *
     * @example The resource operated InputFile is bad
     *
     * @var string
     */
    public $message;

    /**
     * @description The time when the job was last modified.
     *
     * @example 2022-03-21T16:41:00Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The ID of the online editing project.
     *
     * @example ******faa3b542f5a6135217e3******
     *
     * @var string
     */
    public $projectId;

    /**
     * @description The job state.
     *
     * @example Sucess
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the online editing template.
     *
     * @example cb786a39c5d44cecb23d8c864facffc1
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The user-defined data in the JSON format.
     *
     * @example {"key":"value"}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'clipsParam'   => 'ClipsParam',
        'code'         => 'Code',
        'completeTime' => 'CompleteTime',
        'createTime'   => 'CreateTime',
        'duration'     => 'Duration',
        'jobId'        => 'JobId',
        'mediaId'      => 'MediaId',
        'mediaURL'     => 'MediaURL',
        'message'      => 'Message',
        'modifiedTime' => 'ModifiedTime',
        'projectId'    => 'ProjectId',
        'status'       => 'Status',
        'templateId'   => 'TemplateId',
        'userData'     => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->clipsParam) {
            $res['ClipsParam'] = $this->clipsParam;
        }
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->completeTime) {
            $res['CompleteTime'] = $this->completeTime;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->mediaURL) {
            $res['MediaURL'] = $this->mediaURL;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaProducingJobList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ClipsParam'])) {
            $model->clipsParam = $map['ClipsParam'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CompleteTime'])) {
            $model->completeTime = $map['CompleteTime'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['MediaURL'])) {
            $model->mediaURL = $map['MediaURL'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
