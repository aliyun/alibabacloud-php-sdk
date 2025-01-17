<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListMediaProducingJobsResponseBody;

use AlibabaCloud\Dara\Model;

class mediaProducingJobList extends Model
{
    /**
     * @var string
     */
    public $clipsParam;
    /**
     * @var string
     */
    public $code;
    /**
     * @var string
     */
    public $completeTime;
    /**
     * @var string
     */
    public $createTime;
    /**
     * @var float
     */
    public $duration;
    /**
     * @var string
     */
    public $jobId;
    /**
     * @var string
     */
    public $mediaId;
    /**
     * @var string
     */
    public $mediaURL;
    /**
     * @var string
     */
    public $message;
    /**
     * @var string
     */
    public $modifiedTime;
    /**
     * @var string
     */
    public $projectId;
    /**
     * @var string
     */
    public $status;
    /**
     * @var string
     */
    public $templateId;
    /**
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
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
