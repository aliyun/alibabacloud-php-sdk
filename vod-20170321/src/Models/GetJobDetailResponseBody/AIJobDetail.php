<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetJobDetailResponseBody;

use AlibabaCloud\Tea\Model;

class AIJobDetail extends Model
{
    /**
     * @example 2024-10-14T07:39:46Z
     *
     * @var string
     */
    public $completeTime;

    /**
     * @example 2024-10-14T07:39:25Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 5c9dff751ba**********59d50a967f5
     *
     * @var string
     */
    public $jobId;

    /**
     * @example AIVideoCensor
     *
     * @var string
     */
    public $jobType;

    /**
     * @example 30e5d7**********bd900764de7c0102
     *
     * @var string
     */
    public $mediaId;

    /**
     * @example success
     *
     * @var string
     */
    public $status;

    /**
     * @example {"AuditRange":["video","image-cover","text-title"],"AuditContent":["screen"],"AuditItem":["terrorism","porn"],"AuditAutoBlock":"no"}
     *
     * @var string
     */
    public $templateConfig;

    /**
     * @example Auto
     *
     * @var string
     */
    public $trigger;

    /**
     * @example 139109*****84930
     *
     * @var int
     */
    public $userId;
    protected $_name = [
        'completeTime'   => 'CompleteTime',
        'createTime'     => 'CreateTime',
        'jobId'          => 'JobId',
        'jobType'        => 'JobType',
        'mediaId'        => 'MediaId',
        'status'         => 'Status',
        'templateConfig' => 'TemplateConfig',
        'trigger'        => 'Trigger',
        'userId'         => 'UserId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->completeTime) {
            $res['CompleteTime'] = $this->completeTime;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->jobId) {
            $res['JobId'] = $this->jobId;
        }
        if (null !== $this->jobType) {
            $res['JobType'] = $this->jobType;
        }
        if (null !== $this->mediaId) {
            $res['MediaId'] = $this->mediaId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->templateConfig) {
            $res['TemplateConfig'] = $this->templateConfig;
        }
        if (null !== $this->trigger) {
            $res['Trigger'] = $this->trigger;
        }
        if (null !== $this->userId) {
            $res['UserId'] = $this->userId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AIJobDetail
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
        if (isset($map['JobId'])) {
            $model->jobId = $map['JobId'];
        }
        if (isset($map['JobType'])) {
            $model->jobType = $map['JobType'];
        }
        if (isset($map['MediaId'])) {
            $model->mediaId = $map['MediaId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TemplateConfig'])) {
            $model->templateConfig = $map['TemplateConfig'];
        }
        if (isset($map['Trigger'])) {
            $model->trigger = $map['Trigger'];
        }
        if (isset($map['UserId'])) {
            $model->userId = $map['UserId'];
        }

        return $model;
    }
}
