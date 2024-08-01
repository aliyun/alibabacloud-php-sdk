<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models\ListEditingProjectsResponseBody;

use AlibabaCloud\Tea\Model;

class projectList extends Model
{
    /**
     * @example {}
     *
     * @var string
     */
    public $businessConfig;

    /**
     * @example {}
     *
     * @var string
     */
    public $businessStatus;

    /**
     * @example https://xxx.com/cover/xxx.jpg
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
     * @example 2017-01-11T12:00:00Z
     *
     * @var string
     */
    public $createTime;

    /**
     * @var string
     */
    public $description;

    /**
     * @example InvalidParameter
     *
     * @var string
     */
    public $errorCode;

    /**
     * @example The specified parameter \\"LiveStreamConfig\\" is not valid. specified parameter example is not valid.
     *
     * @var string
     */
    public $errorMessage;

    /**
     * @example OpenAPI
     *
     * @var string
     */
    public $modifiedSource;

    /**
     * @example 2017-01-11T12:00:00Z
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
     * @example EditingProject
     *
     * @var string
     */
    public $projectType;

    /**
     * @example Produced
     *
     * @var string
     */
    public $status;

    /**
     * @example Timeline
     *
     * @var string
     */
    public $templateType;

    /**
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
        'errorCode'      => 'ErrorCode',
        'errorMessage'   => 'ErrorMessage',
        'modifiedSource' => 'ModifiedSource',
        'modifiedTime'   => 'ModifiedTime',
        'projectId'      => 'ProjectId',
        'projectType'    => 'ProjectType',
        'status'         => 'Status',
        'templateType'   => 'TemplateType',
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
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }

        return $model;
    }
}
