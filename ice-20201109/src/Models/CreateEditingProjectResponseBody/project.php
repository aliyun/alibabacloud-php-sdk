<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\CreateEditingProjectResponseBody;

use AlibabaCloud\Tea\Model;

class project extends Model
{
    /**
     * @description The business configuration of the project. This parameter can be ignored for general editing projects.
     *
     * @example { "OutputMediaConfig" :    { "StorageLocation": "test-bucket.oss-cn-shanghai.aliyuncs.com", "Path": "test-path"   }, "OutputMediaTarget": "oss-object", "ReservationTime": "2021-06-21T08:05:00Z" }
     *
     * @var string
     */
    public $businessConfig;

    /**
     * @description The business status of the project. This parameter can be ignored for general editing projects. Valid values:
     *
     *   Reserving
     *   ReservationCanceled
     *   BroadCasting
     *   LoadingFailed
     *   LiveFinished
     *
     * @example Reserving
     *
     * @var string
     */
    public $businessStatus;

    /**
     * @description The template material parameters.
     *
     * @var string
     */
    public $clipsParam;

    /**
     * @description The thumbnail URL of the online editing project.
     *
     * @example http://example-bucket.oss-cn-shanghai.aliyuncs.com/example.png?Expires=<ExpireTime>&OSSAccessKeyId=<OSSAccessKeyId>&Signature=<Signature>&security-token=<SecurityToken>
     *
     * @var string
     */
    public $coverURL;

    /**
     * @description The method for creating the online editing project. Valid values:
     *
     * \\- LiveEditingConsole
     * @example WebSDK
     *
     * @var string
     */
    public $createSource;

    /**
     * @description The time when the online editing project was created.
     *
     * @example 2021-01-08T16:52:07Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @description The description of the online editing project.
     *
     * @example example_description
     *
     * @var string
     */
    public $description;

    /**
     * @description The duration of the online editing project.
     *
     * @example 3.4200000
     *
     * @var float
     */
    public $duration;

    /**
     * @description The method for editing the online editing project. Valid values:
     *
     * \\- LiveEditingConsole
     * @example WebSDK
     *
     * @var string
     */
    public $modifiedSource;

    /**
     * @description The time when the online editing project was last edited.
     *
     * @example 2021-01-08T16:52:07Z
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description The ID of the online editing project.
     *
     * @example ****01bf24bf41c78b2754cb3187****
     *
     * @var string
     */
    public $projectId;

    /**
     * @description The type of the editing project. Default value: EditingProject. Valid values:
     *
     * \\- LiveEditingProject: a live stream editing project.
     * @example LiveEditingProject
     *
     * @var string
     */
    public $projectType;

    /**
     * @description The status of the online editing project.
     *
     * \\- 7: Deleted
     * @example 2
     *
     * @var int
     */
    public $status;

    /**
     * @description The status of the online editing project. For more information, see the status list.
     *
     * @example Editing
     *
     * @var string
     */
    public $statusName;

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
     * @description The timeline of the online editing project, in the JSON format.<props="china">For more information about objects in a timeline, see [Timeline configurations](https://help.aliyun.com/document_detail/198823.htm?spm=a2c4g.11186623.2.9.90dc653dF67srN#topic-2024662).  If you leave this parameter empty, an empty timeline is created and the duration of the online editing project is zero.
     *
     * @example {"VideoTracks":[{"VideoTrackClips":[{"MediaId":"****4d7cf14dc7b83b0e801c****"},{"MediaId":"****4d7cf14dc7b83b0e801c****"}]}]}
     *
     * @var string
     */
    public $timeline;

    /**
     * @description The title of the online editing project.
     *
     * @example example_title
     *
     * @var string
     */
    public $title;
    protected $_name = [
        'businessConfig' => 'BusinessConfig',
        'businessStatus' => 'BusinessStatus',
        'clipsParam'     => 'ClipsParam',
        'coverURL'       => 'CoverURL',
        'createSource'   => 'CreateSource',
        'createTime'     => 'CreateTime',
        'description'    => 'Description',
        'duration'       => 'Duration',
        'modifiedSource' => 'ModifiedSource',
        'modifiedTime'   => 'ModifiedTime',
        'projectId'      => 'ProjectId',
        'projectType'    => 'ProjectType',
        'status'         => 'Status',
        'statusName'     => 'StatusName',
        'templateId'     => 'TemplateId',
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
        if (null !== $this->statusName) {
            $res['StatusName'] = $this->statusName;
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
        if (isset($map['StatusName'])) {
            $model->statusName = $map['StatusName'];
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
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
