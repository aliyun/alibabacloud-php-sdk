<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetEditingProjectResponseBody;

use AlibabaCloud\Tea\Model;

class project extends Model
{
    /**
     * @description The business configuration of the project. This parameter can be ignored for general editing projects.
     *
     * @example { "OutputMediaConfig" : { "StorageLocation": "test-bucket.oss-cn-shanghai.aliyuncs.com", "Path": "test-path" }, "OutputMediaTarget": "oss-object", "ReservationTime": "2021-06-21T08:05:00Z" }
     *
     * @var string
     */
    public $businessConfig;

    /**
     * @description The business status of the project. This parameter can be ignored for general editing projects. Valid values:
     *
     * LiveFinished
     * @example Reserving
     *
     * @var string
     */
    public $businessStatus;

    /**
     * @description The material parameter corresponding to the template, in the JSON format. If TemplateId is specified, ClipsParam must also be specified. For more information<props="china">, see [Create and use a regular template](https://help.aliyun.com/document_detail/328557.html) and [Create and use an advanced template](https://help.aliyun.com/document_detail/291418.html).
     *
     * @var string
     */
    public $clipsParam;

    /**
     * @description The thumbnail URL of the online editing project.
     *
     * @example oss://example-bucket/example.jpg
     *
     * @var string
     */
    public $coverURL;

    /**
     * @description The method for creating the online editing project. Valid values:
     *
     * \\- LiveEditingConsole
     * @example OpenAPI
     *
     * @var string
     */
    public $createSource;

    /**
     * @description The time when the online editing project was created.
     *
     * @example 2020-12-20T12:00:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the online editing project.
     *
     * @var string
     */
    public $description;

    /**
     * @description The total duration of the online editing project.
     *
     * @example 24.120000
     *
     * @var int
     */
    public $duration;

    /**
     * @description The method for editing the online editing project. Valid values:
     *
     * \\- LiveEditingConsole
     * @example OpenAPI
     *
     * @var string
     */
    public $modifiedSource;

    /**
     * @description The time when the online editing project was last modified.
     *
     * @example 2020-12-20T13:00:00Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The ID of the online editing project.
     *
     * @example ****fb2101bf24b2754cb318787dc****
     *
     * @var string
     */
    public $projectId;

    /**
     * @description The type of the editing project. Default value: EditingProject. Valid values:
     *
     * \\- LiveEditingProject: a live stream editing project.
     * @example EditingProject
     *
     * @var string
     */
    public $projectType;

    /**
     * @description The status of the online editing project. Valid values:
     *
     * \\- Deleted
     * @example Editing
     *
     * @var string
     */
    public $status;

    /**
     * @description The template ID.
     *
     * @example ****96e8864746a0b6f3****
     *
     * @var string
     */
    public $templateId;

    /**
     * @description The template type of the online editing project. Valid values:
     *
     * \\- VETemplate
     * @example Timeline
     *
     * @var string
     */
    public $templateType;

    /**
     * @description The timeline of the online editing project.
     *
     * @example {"VideoTracks":[{"VideoTrackClips":[{"MediaId":"****9b4d7cf14dc7b83b0e801cbe****"},{"MediaId":"****9b4d7cf14dc7b83b0e801cbe****"},{"MediaId":"****1656bca4474999c961a6d2a2****"}]}]}
     *
     * @var string
     */
    public $timeline;

    /**
     * @description The error message returned if the project conversion failed. The error message displays the detailed information about the failure, and is returned only if the value of TimelineConvertStatus is ConvertFailed.
     *
     * @example The StorageLocation must be in the same division(apiRegion) as ICE service access point.
     *
     * @var string
     */
    public $timelineConvertErrorMessage;

    /**
     * @description The project conversion status. Conversion of an API-style timeline into a frontend-style timeline is an asynchronous process and takes effect only if RequestSource:WebSDK is specified.
     *
     * \\- ConvertFailed
     * @example Converted
     *
     * @var string
     */
    public $timelineConvertStatus;

    /**
     * @description The title of the online editing project.
     *
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
