<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\SearchEditingProjectResponseBody;

use AlibabaCloud\Tea\Model;

class projectList extends Model
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
     * Valid values:
     *
     *   BroadCasting:
     *   ReservationCanceled
     *   LiveFinished
     *   LoadingFailed
     *   Reserving
     *
     * @example Reserving
     *
     * @var string
     */
    public $businessStatus;

    /**
     * @description The thumbnail URL of the online editing project.
     *
     * @example http://example-bucket.oss-cn-shanghai.aliyuncs.com/example-cover.jpg
     *
     * @var string
     */
    public $coverURL;

    /**
     * @description The method for editing the online editing project.
     *
     * Valid values:
     *
     *   AliyunConsole: The project is created in the Alibaba Cloud console.
     *   WebSDK: The project is created by using the SDK for Web.
     *   OpenAPI: The project is created by calling API operations.
     *
     * @example OpenAPI
     *
     * @var string
     */
    public $createSource;

    /**
     * @description The time when the online editing project was created.
     *
     * @example 2017-01-11T12:00:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the online editing project.
     *
     * @example sample description
     *
     * @var string
     */
    public $description;

    /**
     * @description The total length of the online editing project. Unit: seconds.
     *
     * @example 30.100000
     *
     * @var int
     */
    public $duration;

    /**
     * @description The error code returned if the production of the online editing project failed.
     *
     * @example InvalidParameter
     *
     * @var string
     */
    public $errorCode;

    /**
     * @description The error message returned if the production of the online editing project failed.
     *
     * @example "EventTime":"2021-08-12T10:04:15Z","ErrorCode":"InvalidParameter","ErrorMessage":"The specified parameter \\"LiveStreamConfig\\" is not valid. specified parameter example is not valid.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @description The method used when the online editing project was last modified.
     *
     * @example 2017-01-11T12:00:00Z
     *
     * @var string
     */
    public $modifiedSource;

    /**
     * @description The time when the online editing project was last modified.
     *
     * @example 2017-01-11T12:00:00Z
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
     * @description The type of the editing project.
     *
     * Valid values:
     *
     *   LiveEditingProject: a live stream editing project.
     *   EditingProject: a regular editing project.
     *
     * @example EditingProject
     *
     * @var string
     */
    public $projectType;

    /**
     * @description The status of the online editing project. Valid values:
     *
     * Valid values:
     *
     *   Draft
     *   Produced
     *   Editing
     *   Producing
     *   ProduceFailed
     *
     * @example PRODUCE_FAILED
     *
     * @var string
     */
    public $status;

    /**
     * @description The type of the template.
     *
     * @example Timeline
     *
     * @var string
     */
    public $templateType;

    /**
     * @description The timeline of the online editing project.
     *
     * @example {"VideoTracks":[{"VideoTrackClips":[{"MediaId":"****4d7cf14dc7b83b0e801c****"},{"MediaId":"****4d7cf14dc7b83b0e801c****"}]}]}
     *
     * @var string
     */
    public $timeline;

    /**
     * @description The title of the online editing project.
     *
     * @example title
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'businessConfig' => 'BusinessConfig',
        'businessStatus' => 'BusinessStatus',
        'coverURL'       => 'CoverURL',
        'createSource'   => 'CreateSource',
        'createTime'     => 'CreateTime',
        'description'    => 'Description',
        'duration'       => 'Duration',
        'errorCode'      => 'ErrorCode',
        'errorMessage'   => 'ErrorMessage',
        'modifiedSource' => 'ModifiedSource',
        'modifiedTime'   => 'ModifiedTime',
        'projectId'      => 'ProjectId',
        'projectType'    => 'ProjectType',
        'status'         => 'Status',
        'templateType'   => 'TemplateType',
        'timeline'       => 'Timeline',
        'title'          => 'Title',
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
        if (null !== $this->errorCode) {
            $res['ErrorCode'] = $this->errorCode;
        }
        if (null !== $this->errorMessage) {
            $res['ErrorMessage'] = $this->errorMessage;
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
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }
        if (null !== $this->timeline) {
            $res['Timeline'] = $this->timeline;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return projectList
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
        if (isset($map['ErrorCode'])) {
            $model->errorCode = $map['ErrorCode'];
        }
        if (isset($map['ErrorMessage'])) {
            $model->errorMessage = $map['ErrorMessage'];
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
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }
        if (isset($map['Timeline'])) {
            $model->timeline = $map['Timeline'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
