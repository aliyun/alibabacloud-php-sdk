<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveEditingJobResponseBody;

use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveEditingJobResponseBody\liveEditingJob\liveStreamConfig;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveEditingJobResponseBody\liveEditingJob\mediaProduceConfig;
use AlibabaCloud\SDK\ICE\V20201109\Models\GetLiveEditingJobResponseBody\liveEditingJob\outputMediaConfig;
use AlibabaCloud\Tea\Model;

class liveEditingJob extends Model
{
    /**
     * @description The clips.
     *
     * @example [{\\"StartTime\\": \\" 2021-06-21T08:01:00Z\\",  \\"EndTime\\": \\" 2021-06-21T08:03:00Z\\" }]
     *
     * @var string
     */
    public $clips;

    /**
     * @description The response code. Note: Pay attention to this parameter if the job failed.
     *
     * @example InvalidParameter
     *
     * @var string
     */
    public $code;

    /**
     * @description The time when the live editing job was completed. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2020-12-23T13:33:52Z
     *
     * @var string
     */
    public $completeTime;

    /**
     * @description The time when the live editing job was created. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2020-12-23T13:33:40Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The ID of the live editing job.
     *
     * @example ****cdb3e74639973036bc84****
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The live editing configurations.
     *
     * @var liveStreamConfig
     */
    public $liveStreamConfig;

    /**
     * @description The media asset ID of the output file.
     *
     * @example ****0cc6ba49eab379332c5b****
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description The production configurations.
     *
     * @var mediaProduceConfig
     */
    public $mediaProduceConfig;

    /**
     * @description The URL of the output file.
     *
     * @example http://example-bucket.oss-cn-shanghai.aliyuncs.com/example2.mp4
     *
     * @var string
     */
    public $mediaURL;

    /**
     * @description The returned message. Note: Pay attention to this parameter if the job failed.
     *
     * @example The specific parameter LiveStreamConfig is not valid.
     *
     * @var string
     */
    public $message;

    /**
     * @description The time when the live editing job was last modified. The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2020-12-23T13:33:49Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The storage configurations of the output file.
     *
     * @var outputMediaConfig
     */
    public $outputMediaConfig;

    /**
     * @description The ID of the live editing project.
     *
     * @example ****fddd7748b58bf1d47e95****
     *
     * @var string
     */
    public $projectId;

    /**
     * @description The state of the live editing job. Valid values: Init, Queuing, Processing, Success, and Failed.
     *
     * @example Success
     *
     * @var string
     */
    public $status;

    /**
     * @description The user-defined data.
     *
     * @example {"key": "value\\"}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'clips'              => 'Clips',
        'code'               => 'Code',
        'completeTime'       => 'CompleteTime',
        'creationTime'       => 'CreationTime',
        'jobId'              => 'JobId',
        'liveStreamConfig'   => 'LiveStreamConfig',
        'mediaId'            => 'MediaId',
        'mediaProduceConfig' => 'MediaProduceConfig',
        'mediaURL'           => 'MediaURL',
        'message'            => 'Message',
        'modifiedTime'       => 'ModifiedTime',
        'outputMediaConfig'  => 'OutputMediaConfig',
        'projectId'          => 'ProjectId',
        'status'             => 'Status',
        'userData'           => 'UserData',
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
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->completeTime) {
            $res['CompleteTime'] = $this->completeTime;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->liveStreamConfig) {
            $res['LiveStreamConfig'] = null !== $this->liveStreamConfig ? $this->liveStreamConfig->toMap() : null;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->mediaProduceConfig) {
            $res['MediaProduceConfig'] = null !== $this->mediaProduceConfig ? $this->mediaProduceConfig->toMap() : null;
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
        if (null !== $this->outputMediaConfig) {
            $res['OutputMediaConfig'] = null !== $this->outputMediaConfig ? $this->outputMediaConfig->toMap() : null;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return liveEditingJob
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Clips'])) {
            $model->clips = $map['Clips'];
        }
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CompleteTime'])) {
            $model->completeTime = $map['CompleteTime'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['LiveStreamConfig'])) {
            $model->liveStreamConfig = liveStreamConfig::fromMap($map['LiveStreamConfig']);
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['MediaProduceConfig'])) {
            $model->mediaProduceConfig = mediaProduceConfig::fromMap($map['MediaProduceConfig']);
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
        if (isset($map['OutputMediaConfig'])) {
            $model->outputMediaConfig = outputMediaConfig::fromMap($map['OutputMediaConfig']);
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
