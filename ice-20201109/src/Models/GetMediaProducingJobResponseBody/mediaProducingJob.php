<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetMediaProducingJobResponseBody;

use AlibabaCloud\Tea\Model;

class mediaProducingJob extends Model
{
    /**
     * @description The template parameters of the media editing and production job.
     *
     * @example {"VideoArray":["****05512043f49f697f7425****","****05512043f49f697f7425****","****05512043f49f697f7425****"]}
     *
     * @var string
     */
    public $clipsParam;

    /**
     * @description The response code
     *
     * Note: Pay attention to this parameter if the job failed.
     * @example ExceededMaximumValue
     *
     * @var string
     */
    public $code;

    /**
     * @description The time when the media editing and production job was complete.
     *
     * The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     * @example 2020-12-23T13:33:52Z
     *
     * @var string
     */
    public $completeTime;

    /**
     * @description The time when the media editing and production job was created.
     *
     * The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     * @example 2020-12-23T13:33:40Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The duration of the output file.
     *
     * Note: This parameter has a value if the job is successful and the output file is an audio or video file.
     * @example 30.500000
     *
     * @var float
     */
    public $duration;

    /**
     * @description The ID of the media editing and production job.
     *
     * @example ****cdb3e74639973036bc84****
     *
     * @var string
     */
    public $jobId;

    /**
     * @description The media asset ID of the output file.
     *
     * @example ****0cc6ba49eab379332c5b****
     *
     * @var string
     */
    public $mediaId;

    /**
     * @description The URL of the output file.
     *
     * @example http://example-bucket.oss-cn-shanghai.aliyuncs.com/example2.mp4
     *
     * @var string
     */
    public $mediaURL;

    /**
     * @description The returned message.
     *
     * Note: Pay attention to this parameter if the job failed.
     * @example The specified "Width_Height" has exceeded maximum value.
     *
     * @var string
     */
    public $message;

    /**
     * @description The time when the media editing and production job was last modified.
     *
     * The time follows the ISO 8601 standard in the yyyy-MM-ddTHH:mm:ssZ format. The time is displayed in UTC.
     * @example 2020-12-23T13:33:49Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The ID of the online editing project.
     *
     * @example ****fddd7748b58bf1d47e95****
     *
     * @var string
     */
    public $projectId;

    /**
     * @description The state of the media editing and production job. Valid values:
     *
     * Failed
     * @example Failed
     *
     * @var string
     */
    public $status;

    /**
     * @description The materials of the media editing and production job if the job is a subjob of a quick video production job, including the broadcast text and title.
     *
     * @example {"Title": "Title", "SpeechText": "Broadcast text of a quick video production job"}
     *
     * @var string
     */
    public $subJobMaterials;

    /**
     * @description The ID of the template used by the media editing and production job.
     *
     * @example ****6e76134d739cc3e85d3e****
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The timeline of the media editing and production job.
     *
     * @example {"VideoTracks":[{"VideoTrackClips":[{"MediaId":"****4d7cf14dc7b83b0e801c****"},{"MediaId":"****4d7cf14dc7b83b0e801c****"}]}]}
     *
     * @var string
     */
    public $timeline;

    /**
     * @description The user-defined data in the JSON format.
     *
     * @example {"NotifyAddress":"http://xx.xx.xxx","Key":"Valuexxx"}
     *
     * @var string
     */
    public $userData;

    /**
     * @description The media asset ID of the output file in ApsaraVideo VOD if the output file is stored in ApsaraVideo VOD.
     *
     * @example ****332c5b0cc6ba49eab379****
     *
     * @var string
     */
    public $vodMediaId;
    protected $_name = [
        'clipsParam'      => 'ClipsParam',
        'code'            => 'Code',
        'completeTime'    => 'CompleteTime',
        'createTime'      => 'CreateTime',
        'duration'        => 'Duration',
        'jobId'           => 'JobId',
        'mediaId'         => 'MediaId',
        'mediaURL'        => 'MediaURL',
        'message'         => 'Message',
        'modifiedTime'    => 'ModifiedTime',
        'projectId'       => 'ProjectId',
        'status'          => 'Status',
        'subJobMaterials' => 'SubJobMaterials',
        'templateId'      => 'TemplateId',
        'timeline'        => 'Timeline',
        'userData'        => 'UserData',
        'vodMediaId'      => 'VodMediaId',
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
        if (null !== $this->subJobMaterials) {
            $res['SubJobMaterials'] = $this->subJobMaterials;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->timeline) {
            $res['Timeline'] = $this->timeline;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
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
        if (isset($map['SubJobMaterials'])) {
            $model->subJobMaterials = $map['SubJobMaterials'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['Timeline'])) {
            $model->timeline = $map['Timeline'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['VodMediaId'])) {
            $model->vodMediaId = $map['VodMediaId'];
        }

        return $model;
    }
}
