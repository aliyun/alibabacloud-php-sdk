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
     * @description 剪辑片段列表
     *
     * @var string
     */
    public $clips;

    /**
     * @description 剪辑合成作业错误码  注：作业失败时关注该字段
     *
     * @var string
     */
    public $code;

    /**
     * @description 直播剪辑作业完成时间，格式为utc时间。  格式为："2021-06-21T08:01:00Z"。
     *
     * @var string
     */
    public $completeTime;

    /**
     * @description 直播剪辑作业创建时间，格式为utc时间。  格式为："2021-06-21T08:01:00Z"。
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description 直播剪辑任务ID
     *
     * @var string
     */
    public $jobId;

    /**
     * @description 直播剪辑配置
     *
     * @var liveStreamConfig
     */
    public $liveStreamConfig;

    /**
     * @description 输出成品的资源Id
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description 直播剪辑合成配置
     *
     * @var mediaProduceConfig
     */
    public $mediaProduceConfig;

    /**
     * @description 输出成品的资源文件URL
     *
     * @var string
     */
    public $mediaURL;

    /**
     * @description 剪辑合成作业错误信息  注：作业失败时关注该字段
     *
     * @var string
     */
    public $message;

    /**
     * @description 直播剪辑作业修改时间，格式为utc时间。  格式为："2021-06-21T08:01:00Z"。
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description 输出成片的存储配置
     *
     * @var outputMediaConfig
     */
    public $outputMediaConfig;

    /**
     * @description 直播剪辑工程ID
     *
     * @var string
     */
    public $projectId;

    /**
     * @description 直播剪辑作业状态，取值可能为如下值：  -Init （初始状态）  -Queuing（排队中）  -Processing（处理中）  -Success（成功）  -Failed（失败）
     *
     * @var string
     */
    public $status;

    /**
     * @description 用户数据
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
