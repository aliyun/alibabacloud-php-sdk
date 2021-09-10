<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\GetEditingProjectResponseBody;

use AlibabaCloud\Tea\Model;

class project extends Model
{
    /**
     * @description 云剪辑工程ID
     *
     * @var string
     */
    public $projectId;

    /**
     * @description 云剪辑工程标题
     *
     * @var string
     */
    public $title;

    /**
     * @description 云剪辑工程时间线
     *
     * @var string
     */
    public $timeline;

    /**
     * @description 云剪辑工程描述
     *
     * @var string
     */
    public $description;

    /**
     * @description 云剪辑工程封面
     *
     * @var string
     */
    public $coverURL;

    /**
     * @description 云剪辑工程创建时间
     *
     * @var string
     */
    public $createTime;

    /**
     * @description 云剪辑工程最新修改时间
     *
     * @var string
     */
    public $modifiedTime;

    /**
     * @description 云剪辑工程总时长
     *
     * @var int
     */
    public $duration;

    /**
     * @description 云剪辑工程状态
     *
     * @var string
     */
    public $status;

    /**
     * @description 云剪辑工程创建来源
     *
     * @var string
     */
    public $createSource;

    /**
     * @description 云剪辑工程模板类型
     *
     * @var string
     */
    public $templateType;

    /**
     * @description 云剪辑工程修改来源
     *
     * @var string
     */
    public $modifiedSource;

    /**
     * @var string
     */
    public $projectType;

    /**
     * @var string
     */
    public $businessConfig;

    /**
     * @var string
     */
    public $businessStatus;
    protected $_name = [
        'projectId'      => 'ProjectId',
        'title'          => 'Title',
        'timeline'       => 'Timeline',
        'description'    => 'Description',
        'coverURL'       => 'CoverURL',
        'createTime'     => 'CreateTime',
        'modifiedTime'   => 'ModifiedTime',
        'duration'       => 'Duration',
        'status'         => 'Status',
        'createSource'   => 'CreateSource',
        'templateType'   => 'TemplateType',
        'modifiedSource' => 'ModifiedSource',
        'projectType'    => 'ProjectType',
        'businessConfig' => 'BusinessConfig',
        'businessStatus' => 'BusinessStatus',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->projectId) {
            $res['ProjectId'] = $this->projectId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->timeline) {
            $res['Timeline'] = $this->timeline;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->coverURL) {
            $res['CoverURL'] = $this->coverURL;
        }
        if (null !== $this->createTime) {
            $res['CreateTime'] = $this->createTime;
        }
        if (null !== $this->modifiedTime) {
            $res['ModifiedTime'] = $this->modifiedTime;
        }
        if (null !== $this->duration) {
            $res['Duration'] = $this->duration;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->createSource) {
            $res['CreateSource'] = $this->createSource;
        }
        if (null !== $this->templateType) {
            $res['TemplateType'] = $this->templateType;
        }
        if (null !== $this->modifiedSource) {
            $res['ModifiedSource'] = $this->modifiedSource;
        }
        if (null !== $this->projectType) {
            $res['ProjectType'] = $this->projectType;
        }
        if (null !== $this->businessConfig) {
            $res['BusinessConfig'] = $this->businessConfig;
        }
        if (null !== $this->businessStatus) {
            $res['BusinessStatus'] = $this->businessStatus;
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
        if (isset($map['ProjectId'])) {
            $model->projectId = $map['ProjectId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['Timeline'])) {
            $model->timeline = $map['Timeline'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['CoverURL'])) {
            $model->coverURL = $map['CoverURL'];
        }
        if (isset($map['CreateTime'])) {
            $model->createTime = $map['CreateTime'];
        }
        if (isset($map['ModifiedTime'])) {
            $model->modifiedTime = $map['ModifiedTime'];
        }
        if (isset($map['Duration'])) {
            $model->duration = $map['Duration'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['CreateSource'])) {
            $model->createSource = $map['CreateSource'];
        }
        if (isset($map['TemplateType'])) {
            $model->templateType = $map['TemplateType'];
        }
        if (isset($map['ModifiedSource'])) {
            $model->modifiedSource = $map['ModifiedSource'];
        }
        if (isset($map['ProjectType'])) {
            $model->projectType = $map['ProjectType'];
        }
        if (isset($map['BusinessConfig'])) {
            $model->businessConfig = $map['BusinessConfig'];
        }
        if (isset($map['BusinessStatus'])) {
            $model->businessStatus = $map['BusinessStatus'];
        }

        return $model;
    }
}
