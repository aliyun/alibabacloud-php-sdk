<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponseBody;

use AlibabaCloud\SDK\Vod\V20170321\Models\GetAIMediaAuditJobResponseBody\mediaAuditJob\data;
use AlibabaCloud\Tea\Model;

class mediaAuditJob extends Model
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
     * @example 2017-01-11T13:00:00Z
     *
     * @var string
     */
    public $completeTime;

    /**
     * @description The time when the job started to run. The time follows the ISO 8601 standard in the *yyyy-MM-dd*T*HH:mm:ss*Z format. The time is displayed in UTC.
     *
     * @example 2017-01-11T12:00:00Z
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The job result data.
     *
     * @var data
     */
    public $data;

    /**
     * @description The ID of the job.
     *
     * @example bdbc266af6894*****943a70176d92e9
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The ID of the video.
     *
     * @example fe028d09441d*****d1afffb138cd7e
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
     *   **success**: The job is successful.
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
     * @description Only the job type is supported.
     *
     * @example AIMediaAudit
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
            $res['Data'] = null !== $this->data ? $this->data->toMap() : null;
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
     * @return mediaAuditJob
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
            $model->data = data::fromMap($map['Data']);
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
