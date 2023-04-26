<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vod\V20170321\Models;

use AlibabaCloud\Tea\Model;

class CreateUploadVideoRequest extends Model
{
    /**
     * @example app-1000000
     *
     * @var string
     */
    public $appId;

    /**
     * @example 100036****
     *
     * @var int
     */
    public $cateId;

    /**
     * @example https://example.aliyundoc.com/image/D22F553TEST****.jpeg
     *
     * @var string
     */
    public $coverURL;

    /**
     * @example UploadTest
     *
     * @var string
     */
    public $description;

    /**
     * @example D:\video_01.mp4
     *
     * @var string
     */
    public $fileName;

    /**
     * @example 123
     *
     * @var int
     */
    public $fileSize;

    /**
     * @example out-****.oss-cn-shanghai.aliyuncs.com
     *
     * @var string
     */
    public $storageLocation;

    /**
     * @example tag1,tag2
     *
     * @var string
     */
    public $tags;

    /**
     * @example 405477f9e214d19ea2c7c854****
     *
     * @var string
     */
    public $templateGroupId;

    /**
     * @example UploadTest
     *
     * @var string
     */
    public $title;

    /**
     * @example {"MessageCallback":{"CallbackURL":"http://example.aliyundoc.com"},"Extend":{"localId":"*****","test":"www"}}
     *
     * @var string
     */
    public $userData;

    /**
     * @example 613efff3887ec34af685714cc461****
     *
     * @var string
     */
    public $workflowId;
    protected $_name = [
        'appId'           => 'AppId',
        'cateId'          => 'CateId',
        'coverURL'        => 'CoverURL',
        'description'     => 'Description',
        'fileName'        => 'FileName',
        'fileSize'        => 'FileSize',
        'storageLocation' => 'StorageLocation',
        'tags'            => 'Tags',
        'templateGroupId' => 'TemplateGroupId',
        'title'           => 'Title',
        'userData'        => 'UserData',
        'workflowId'      => 'WorkflowId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->cateId) {
            $res['CateId'] = $this->cateId;
        }
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
        if (null !== $this->storageLocation) {
            $res['StorageLocation'] = $this->storageLocation;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
        }
        if (null !== $this->templateGroupId) {
            $res['TemplateGroupId'] = $this->templateGroupId;
        }
        if (null !== $this->title) {
            $res['Title'] = $this->title;
        }
        if (null !== $this->userData) {
            $res['UserData'] = $this->userData;
        }
        if (null !== $this->workflowId) {
            $res['WorkflowId'] = $this->workflowId;
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
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['CateId'])) {
            $model->cateId = $map['CateId'];
        }
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
        if (isset($map['StorageLocation'])) {
            $model->storageLocation = $map['StorageLocation'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }
        if (isset($map['TemplateGroupId'])) {
            $model->templateGroupId = $map['TemplateGroupId'];
        }
        if (isset($map['Title'])) {
            $model->title = $map['Title'];
        }
        if (isset($map['UserData'])) {
            $model->userData = $map['UserData'];
        }
        if (isset($map['WorkflowId'])) {
            $model->workflowId = $map['WorkflowId'];
        }

        return $model;
    }
}
