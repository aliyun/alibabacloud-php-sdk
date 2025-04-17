<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models\GetJobDetailResponseBody;

use AlibabaCloud\Dara\Model;

class AIJobDetail extends Model
{
    /**
     * @var string
     */
    public $completeTime;

    /**
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $jobId;

    /**
     * @var string
     */
    public $jobType;

    /**
     * @var string
     */
    public $mediaId;

    /**
     * @var string
     */
    public $status;

    /**
     * @var string
     */
    public $templateConfig;

    /**
     * @var string
     */
    public $trigger;

    /**
     * @var int
     */
    public $userId;
    protected $_name = [
        'completeTime' => 'CompleteTime',
        'createTime' => 'CreateTime',
        'jobId' => 'JobId',
        'jobType' => 'JobType',
        'mediaId' => 'MediaId',
        'status' => 'Status',
        'templateConfig' => 'TemplateConfig',
        'trigger' => 'Trigger',
        'userId' => 'UserId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
