<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class CreateUploadVideoRequest extends Model
{
    /**
     * @var string
     */
    public $coverURL;

    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var int
     */
    public $fileSize;

    /**
     * @var string
     */
    public $IP;

    /**
     * @var string
     */
    public $title;

    /**
     * @var int
     */
    public $cateId;

    /**
     * @var string
     */
    public $tags;

    /**
     * @var string
     */
    public $transcodeMode;

    /**
     * @var string
     */
    public $userData;

    /**
     * @var string
     */
    public $templateGroupId;

    /**
     * @var string
     */
    public $workflowId;

    /**
     * @var string
     */
    public $storageLocation;

    /**
     * @var string
     */
    public $customMediaInfo;

    /**
     * @var string
     */
    public $appId;
    protected $_name = [
        'coverURL'        => 'CoverURL',
        'description'     => 'Description',
        'fileName'        => 'FileName',
        'fileSize'        => 'FileSize',
        'IP'              => 'IP',
        'title'           => 'Title',
        'cateId'          => 'CateId',
        'tags'            => 'Tags',
        'transcodeMode'   => 'TranscodeMode',
        'userData'        => 'UserData',
        'templateGroupId' => 'TemplateGroupId',
        'workflowId'      => 'WorkflowId',
        'storageLocation' => 'StorageLocation',
        'customMediaInfo' => 'CustomMediaInfo',
        'appId'           => 'AppId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->coverURL) {
            $res['CoverURL'] = $this->coverURL;
        }
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }
        if (null !== $this->IP) {
            $res['IP'] = $this->IP;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->cateId) {
            $res['CateId'] = $this->cateId;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->transcodeMode) {
            $res['TranscodeMode'] = $this->transcodeMode;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->templateGroupId) {
            $res['TemplateGroupId'] = $this->templateGroupId;
        }
        if (null !== $this->workflowId) {
            $res['WorkflowId'] = $this->workflowId;
        }
        if (null !== $this->storageLocation) {
            $res['StorageLocation'] = $this->storageLocation;
        }
        if (null !== $this->customMediaInfo) {
            $res['CustomMediaInfo'] = $this->customMediaInfo;
        }
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUploadVideoRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CoverURL'])) {
            $model->coverURL = $map['CoverURL'];
        }
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }
        if (isset($map['IP'])) {
            $model->IP = $map['IP'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['CateId'])) {
            $model->cateId = $map['CateId'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['TranscodeMode'])) {
            $model->transcodeMode = $map['TranscodeMode'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['TemplateGroupId'])) {
            $model->templateGroupId = $map['TemplateGroupId'];
        }
        if (isset($map['WorkflowId'])) {
            $model->workflowId = $map['WorkflowId'];
        }
        if (isset($map['StorageLocation'])) {
            $model->storageLocation = $map['StorageLocation'];
        }
        if (isset($map['CustomMediaInfo'])) {
            $model->customMediaInfo = $map['CustomMediaInfo'];
        }
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }

        return $model;
    }
}
