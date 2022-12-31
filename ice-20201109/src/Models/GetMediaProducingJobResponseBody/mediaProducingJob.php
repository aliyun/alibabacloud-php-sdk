<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaProducingJobResponseBody;

use AlibabaCloud\Tea\Model;

class mediaProducingJob extends Model
{
    /**
     * @example {"VideoArray":["****05512043f49f697f7425****","****05512043f49f697f7425****","****05512043f49f697f7425****"]}
     *
     * @var string
     */
    public $clipsParam;

    /**
     * @example ExceededMaximumValue
     *
     * @var string
     */
    public $code;

    /**
     * @example 2020-12-23T13:33:52Z
     *
     * @var string
     */
    public $completeTime;

    /**
     * @example 2020-12-23T13:33:40Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @example 30.500000
     *
     * @var float
     */
    public $duration;

    /**
     * @example ****cdb3e74639973036bc84****
     *
     * @var string
     */
    public $jobId;

    /**
     * @example ****0cc6ba49eab379332c5b****
     *
     * @var string
     */
    public $mediaId;

    /**
     * @example http://example-bucket.oss-cn-shanghai.aliyuncs.com/example2.mp4
     *
     * @var string
     */
    public $mediaURL;

    /**
     * @example The specified "Width_Height" has exceeded maximum value.
     *
     * @var string
     */
    public $message;

    /**
     * @example 2020-12-23T13:33:49Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @example ****fddd7748b58bf1d47e95****
     *
     * @var string
     */
    public $projectId;

    /**
     * @example Failed
     *
     * @var string
     */
    public $status;

    /**
     * @example ****6e76134d739cc3e85d3e****
     *
     * @var string
     */
    public $templateId;

    /**
     * @example {"VideoTracks":[{"VideoTrackClips":[{"MediaId":"****4d7cf14dc7b83b0e801c****"},{"MediaId":"****4d7cf14dc7b83b0e801c****"}]}]}
     *
     * @var string
     */
    public $timeline;

    /**
     * @example ****332c5b0cc6ba49eab379****
     *
     * @var string
     */
    public $vodMediaId;
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
        'timeline'     => 'Timeline',
        'vodMediaId'   => 'VodMediaId',
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
        if (null !== $this->timeline) {
            $res['Timeline'] = $this->timeline;
        }
        if (null !== $this->vodMediaId) {
            $res['VodMediaId'] = $this->vodMediaId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return mediaProducingJob
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
        if (isset($map['Timeline'])) {
            $model->timeline = $map['Timeline'];
        }
        if (isset($map['VodMediaId'])) {
            $model->vodMediaId = $map['VodMediaId'];
        }

        return $model;
    }
}
