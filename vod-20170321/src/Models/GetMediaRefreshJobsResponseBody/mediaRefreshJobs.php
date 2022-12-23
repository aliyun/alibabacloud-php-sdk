<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetMediaRefreshJobsResponseBody;

use AlibabaCloud\Tea\Model;

class mediaRefreshJobs extends Model
{
    /**
     * @description The error code. This parameter is returned if the refresh or prefetch task fails.
     *
     * @example PreloadQueueFull
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message. This parameter is returned if the refresh or prefetch task fails.
     *
     * @example Preload queue is full, please try again later!
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The filtering conditions for stream playback. The value is a JSON string. This parameter is used as a request parameter of the [RefreshMediaPlayUrls](~~RefreshMediaPlayUrls~~) operation.
     *
     * @example {"Formats":"mp4,m3u8", "Definitions":"HD,SD",  " StreamType":"video",  "ResultType":"Single",  " SliceFlag":false, "SliceCount": 3}
     *
     * @var string
     */
    public $filterPolicy;

    /**
     * @description The time when the task was created.
     *
     * @example 2022-05-20T08:23:22Z
     *
     * @var string
     */
    public $gmtCreate;

    /**
     * @description The time when the task was modified.
     *
     * @example 2022-05-21T08:23:22Z
     *
     * @var string
     */
    public $gmtModified;

    /**
     * @description The ID of the media file.
     *
     * @example ca3a8f6e4957b658067095869****
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description The ID of the job.
     *
     * @example 41d465e31957****
     *
     * @var string
     */
    public $mediaRefreshJobId;

    /**
     * @description The status of the job. Valid values:
     *
     *   **success**
     *   **fail**
     *
     * @example success
     *
     * @var string
     */
    public $status;

    /**
     * @description The playback URLs that were refreshed or prefetched.
     *
     * @example https://shenzhen.****.aliyuncdn.com/74401a4f546007bf845cd8840****.m3u8,https://shenzhen.****.aliyuncdn.com/24041e7d13582d86604d8****.m3u8
     *
     * @var string
     */
    public $successPlayUrls;

    /**
     * @description The IDs of the refresh or prefetch tasks for the playback URLs of media files. Only one URL can be refreshed or prefetched in a task. This value is used in the [DescribeVodRefreshTasks](~~DescribeVodRefreshTasks~~) operation, which queries the status of refresh or prefetch tasks for playback URLs of media files.
     *
     * @example 70422****,9524****
     *
     * @var string
     */
    public $taskIds;

    /**
     * @description The type of the job. Valid values:
     *
     *   **Refresh**
     *   **Preload**
     *
     * @example Preload
     *
     * @var string
     */
    public $taskType;

    /**
     * @description The user data that you passed when you submit a refresh or prefetch task.
     *
     * @example {"MessageCallback":{"CallbackURL":"http://example.aliyundoc.com"}, "Extend":{"localId":"xxx","test":"www"}}
     *
     * @var string
     */
    public $userData;
    protected $_name = [
        'errorCode'         => 'ErrorCode',
        'errorMessage'      => 'ErrorMessage',
        'filterPolicy'      => 'FilterPolicy',
        'gmtCreate'         => 'GmtCreate',
        'gmtModified'       => 'GmtModified',
        'mediaId'           => 'MediaId',
        'mediaRefreshJobId' => 'MediaRefreshJobId',
        'status'            => 'Status',
        'successPlayUrls'   => 'SuccessPlayUrls',
        'taskIds'           => 'TaskIds',
        'taskType'          => 'TaskType',
        'userData'          => 'UserData',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
        }
        if (null !== $this->filterPolicy) {
            $res['FilterPolicy'] = $this->filterPolicy;
        }
        if (null !== $this->gmtCreate) {
            $res['GmtCreate'] = $this->gmtCreate;
        }
        if (null !== $this->gmtModified) {
            $res['GmtModified'] = $this->gmtModified;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->mediaRefreshJobId) {
            $res['MediaRefreshJobId'] = $this->mediaRefreshJobId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->successPlayUrls) {
            $res['SuccessPlayUrls'] = $this->successPlayUrls;
        }
        if (null !== $this->taskIds) {
            $res['TaskIds'] = $this->taskIds;
        }
        if (null !== $this->taskType) {
            $res['TaskType'] = $this->taskType;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaRefreshJobs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
        }
        if (isset($map['FilterPolicy'])) {
            $model->filterPolicy = $map['FilterPolicy'];
        }
        if (isset($map['GmtCreate'])) {
            $model->gmtCreate = $map['GmtCreate'];
        }
        if (isset($map['GmtModified'])) {
            $model->gmtModified = $map['GmtModified'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['MediaRefreshJobId'])) {
            $model->mediaRefreshJobId = $map['MediaRefreshJobId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['SuccessPlayUrls'])) {
            $model->successPlayUrls = $map['SuccessPlayUrls'];
        }
        if (isset($map['TaskIds'])) {
            $model->taskIds = $map['TaskIds'];
        }
        if (isset($map['TaskType'])) {
            $model->taskType = $map['TaskType'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }

        return $model;
    }
}
