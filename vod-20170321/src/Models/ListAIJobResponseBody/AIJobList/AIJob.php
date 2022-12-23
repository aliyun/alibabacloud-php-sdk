<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\ListAIJobResponseBody\AIJobList;

use AlibabaCloud\Tea\Model;

class AIJob extends Model
{
    /**
     * @description The error code. This parameter is returned if the value of Status is fail.
     *
     * @example 0
     *
     * @var string
     */
    public $code;

    /**
     * @description The time when the job is complete. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2020-06-28T02:04:47Z
     *
     * @var string
     */
    public $completeTime;

    /**
     * @description The time when the job was created. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2020-06-28T02:04:32Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The returned data. The value is a JSON string.
     *
     * @example {"OrigASRData":{"AsrTextList":\[{"EndTime":700,"StartTime":0,"Text":"Yes.","ChannelId":0,"SpeechRate":85},{"EndTime":3750,"StartTime":1630,"Text":"No.","ChannelId":0,"SpeechRate":28},{"EndTime":5910,"StartTime":4020,"Text":"Of course.","ChannelId":0,"SpeechRate":95},{"EndTime":12750,"StartTime":10090,"Text":"Message.","ChannelId":0,"SpeechRate":45},{"EndTime":25230,"StartTime":13590,"Text":"Hello, good afternoon.","ChannelId":0,"SpeechRate":20},{"EndTime":30000,"StartTime":28220,"Text":"Yes.","ChannelId":0,"SpeechRate":33}],"Duration":"30016"}}
     *
     * @var string
     */
    public $data;

    /**
     * @description The ID of the job.
     *
     * @example a718a3a1e8bb42ee3bc88921e94****
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The ID of the video.
     *
     * @example 3D3D12340d9401fab46a0b847****
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description The error message. This parameter is returned if the value of Status is fail.
     *
     * @example OK
     *
     * @var string
     */
    public $message;

    /**
     * @description The status of the job. Valid values:
     *
     *   **success**: The job is complete.
     *   **fail**: The job failed.
     *   **init**: The job is being initialized.
     *   **Processing**: The job is in progress.
     *
     * @example success
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the job. Valid values:
     *
     *   **AIMediaDNA**: The media fingerprinting job.
     *   **AIVideoTag**: The smart tagging job.
     *
     * @example AIVideoTag
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'code'         => 'Code',
        'completeTime' => 'CompleteTime',
        'creationTime' => 'CreationTime',
        'data'         => 'Data',
        'jobId'        => 'JobId',
        'mediaId'      => 'MediaId',
        'message'      => 'Message',
        'status'       => 'Status',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->completeTime) {
            $res['CompleteTime'] = $this->completeTime;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AIJob
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['CompleteTime'])) {
            $model->completeTime = $map['CompleteTime'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
