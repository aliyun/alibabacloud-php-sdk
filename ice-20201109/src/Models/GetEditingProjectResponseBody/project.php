<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetEditingProjectResponseBody;

use AlibabaCloud\Tea\Model;

class project extends Model
{
    /**
     * @example { "OutputMediaConfig" : { "StorageLocation": "test-bucket.oss-cn-shanghai.aliyuncs.com", "Path": "test-path" }, "OutputMediaTarget": "oss-object", "ReservationTime": "2021-06-21T08:05:00Z" }
     *
     * @var string
     */
    public $businessConfig;

    /**
     * @example Reserving
     *
     * @var string
     */
    public $businessStatus;

    /**
     * @var string
     */
    public $clipsParam;

    /**
     * @example oss://example-bucket/example.jpg
     *
     * @var string
     */
    public $coverURL;

    /**
     * @example OpenAPI
     *
     * @var string
     */
    public $createSource;

    /**
     * @example 2020-12-20T12:00:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @example 24.120000
     *
     * @var int
     */
    public $duration;

    /**
     * @example OpenAPI
     *
     * @var string
     */
    public $modifiedSource;

    /**
     * @example 2020-12-20T13:00:00Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @example ****fb2101bf24b2754cb318787dc****
     *
     * @var string
     */
    public $projectId;

    /**
     * @example EditingProject
     *
     * @var string
     */
    public $projectType;

    /**
     * @example Editing
     *
     * @var string
     */
    public $status;

    /**
     * @example ****96e8864746a0b6f3****
     *
     * @var string
     */
    public $templateId;

    /**
     * @example Timeline
     *
     * @var string
     */
    public $templateType;

    /**
     * @example {"VideoTracks":[{"VideoTrackClips":[{"MediaId":"****9b4d7cf14dc7b83b0e801cbe****"},{"MediaId":"****9b4d7cf14dc7b83b0e801cbe****"},{"MediaId":"****1656bca4474999c961a6d2a2****"}]}]}
     *
     * @var string
     */
    public $timeline;

    /**
     * @var string
     */
    public $timelineConvertErrorMessage;

    /**
     * @var string
     */
    public $timelineConvertStatus;

    /**
     * @var string
     */
    public $title;
    protected $_name = [
        'businessConfig'              => 'BusinessConfig',
        'businessStatus'              => 'BusinessStatus',
        'clipsParam'                  => 'ClipsParam',
        'coverURL'                    => 'CoverURL',
        'createSource'                => 'CreateSource',
        'createTime'                  => 'CreateTime',
        'description'                 => 'Description',
        'duration'                    => 'Duration',
        'modifiedSource'              => 'ModifiedSource',
        'modifiedTime'                => 'ModifiedTime',
        'projectId'                   => 'ProjectId',
        'projectType'                 => 'ProjectType',
        'status'                      => 'Status',
        'templateId'                  => 'TemplateId',
        'templateType'                => 'TemplateType',
        'timeline'                    => 'Timeline',
        'timelineConvertErrorMessage' => 'TimelineConvertErrorMessage',
        'timelineConvertStatus'       => 'TimelineConvertStatus',
        'title'                       => 'Title',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->businessConfig) {
            $res['BusinessConfig'] = $this->businessConfig;
        }
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
        }
        if (null !== $this->clipsParam) {
            $res['ClipsParam'] = $this->clipsParam;
        }
        if (null !== $this->coverURL) {
            $res['CoverURL'] = $this->coverURL;
        }
        if (null !== $this->createSource) {
            $res['CreateSource'] = $this->createSource;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->modifiedSource) {
            $res['ModifiedSource'] = $this->modifiedSource;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->projectType) {
            $res['ProjectType'] = $this->projectType;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->templateId) {
            $res['TemplateId'] = $this->templateId;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }
        if (null !== $this->timeline) {
            $res['Timeline'] = $this->timeline;
        }
        if (null !== $this->timelineConvertErrorMessage) {
            $res['TimelineConvertErrorMessage'] = $this->timelineConvertErrorMessage;
        }
        if (null !== $this->timelineConvertStatus) {
            $res['TimelineConvertStatus'] = $this->timelineConvertStatus;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return project
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BusinessConfig'])) {
            $model->businessConfig = $map['BusinessConfig'];
        }
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }
        if (isset($map['ClipsParam'])) {
            $model->clipsParam = $map['ClipsParam'];
        }
        if (isset($map['CoverURL'])) {
            $model->coverURL = $map['CoverURL'];
        }
        if (isset($map['CreateSource'])) {
            $model->createSource = $map['CreateSource'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['ModifiedSource'])) {
            $model->modifiedSource = $map['ModifiedSource'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['ProjectType'])) {
            $model->projectType = $map['ProjectType'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['TemplateId'])) {
            $model->templateId = $map['TemplateId'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }
        if (isset($map['Timeline'])) {
            $model->timeline = $map['Timeline'];
        }
        if (isset($map['TimelineConvertErrorMessage'])) {
            $model->timelineConvertErrorMessage = $map['TimelineConvertErrorMessage'];
        }
        if (isset($map['TimelineConvertStatus'])) {
            $model->timelineConvertStatus = $map['TimelineConvertStatus'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
