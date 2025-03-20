<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetJobDetailResponseBody;

use AlibabaCloud\Tea\Model;

class transcodeJobDetail extends Model
{
    /**
     * @description The time when the task was complete.
     *
     * @example 2024-10-14T07:39:34Z
     *
     * @var string
     */
    public $completeTime;

    /**
     * @description The time when the task was created. The time follows the ISO 8601 standard in the YYYY-MM-DDTHH:mm:ssZ format. The time is displayed in UTC.
     *
     * @example 2024-10-14T07:39:25Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The definition.
     *
     * @example HD
     *
     * @var string
     */
    public $definition;

    /**
     * @description The ID of the task.
     *
     * @example 2dc1634e**********3f1d22d1a0174e
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The status of the task. Valid values:
     *
     *   Submitted
     *   Transcoding
     *   TranscodeSuccess
     *   TranscodeFail
     *   TranscodeCancelled
     *
     * @example TranscodeSuccess
     *
     * @var string
     */
    public $status;

    /**
     * @description The ID of the template.
     *
     * @example dbfaaec9e**********bf0b81219244c
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The ID of the user who submitted the task.
     *
     * @example 139109*****84930
     *
     * @var int
     */
    public $userId;

    /**
     * @description The ID of the media asset.
     *
     * @example 30e5d7**********bd900764de7c0102
     *
     * @var string
     */
    public $videoId;
    protected $_name = [
        'completeTime' => 'CompleteTime',
        'createTime' => 'CreateTime',
        'definition' => 'Definition',
        'jobId' => 'JobId',
        'status' => 'Status',
        'templateId' => 'TemplateId',
        'userId' => 'UserId',
        'videoId' => 'VideoId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->completeTime) {
            $res['CompleteTime'] = $this->completeTime;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->definition) {
            $res['Definition'] = $this->definition;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }
        if (null !== $this->videoId) {
            $res['VideoId'] = $this->videoId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return transcodeJobDetail
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CompleteTime'])) {
            $model->completeTime = $map['CompleteTime'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Definition'])) {
            $model->definition = $map['Definition'];
        }
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }
        if (isset($map['VideoId'])) {
            $model->videoId = $map['VideoId'];
        }

        return $model;
    }
}
