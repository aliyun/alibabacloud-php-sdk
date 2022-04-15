<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\Tea\Model;

class CreateUploadTaskRequest extends Model
{
    /**
     * @description 应用ID
     *
     * @var string
     */
    public $appId;

    /**
     * @description 应用类型
     *
     * @var string
     */
    public $appType;

    /**
     * @description 上传的bucket名称
     *
     * @var string
     */
    public $bucketName;

    /**
     * @description 环境
     *
     * @var string
     */
    public $env;

    /**
     * @description 游戏链接
     *
     * @var string
     */
    public $fileAddress;

    /**
     * @description 文件大小
     *
     * @var int
     */
    public $fileSize;

    /**
     * @description 上传文件类型
     *
     * @var string
     */
    public $fileType;

    /**
     * @description 上传进度
     *
     * @var float
     */
    public $progress;

    /**
     * @description 上传的bucket所在region
     *
     * @var string
     */
    public $region;

    /**
     * @description 上传状态
     *
     * @var string
     */
    public $status;

    /**
     * @description 上传工具版本
     *
     * @var string
     */
    public $uploadToolVersion;

    /**
     * @description 上传任务类型
     *
     * @var string
     */
    public $uploadType;

    /**
     * @description 版本ID
     *
     * @var string
     */
    public $versionId;
    protected $_name = [
        'appId'             => 'AppId',
        'appType'           => 'AppType',
        'bucketName'        => 'BucketName',
        'env'               => 'Env',
        'fileAddress'       => 'FileAddress',
        'fileSize'          => 'FileSize',
        'fileType'          => 'FileType',
        'progress'          => 'Progress',
        'region'            => 'Region',
        'status'            => 'Status',
        'uploadToolVersion' => 'UploadToolVersion',
        'uploadType'        => 'UploadType',
        'versionId'         => 'VersionId',
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
        if (null !== $this->appType) {
            $res['AppType'] = $this->appType;
        }
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }
        if (null !== $this->fileAddress) {
            $res['FileAddress'] = $this->fileAddress;
        }
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }
        if (null !== $this->progress) {
            $res['Progress'] = $this->progress;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }
        if (null !== $this->uploadToolVersion) {
            $res['UploadToolVersion'] = $this->uploadToolVersion;
        }
        if (null !== $this->uploadType) {
            $res['UploadType'] = $this->uploadType;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateUploadTaskRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppType'])) {
            $model->appType = $map['AppType'];
        }
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }
        if (isset($map['FileAddress'])) {
            $model->fileAddress = $map['FileAddress'];
        }
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }
        if (isset($map['Progress'])) {
            $model->progress = $map['Progress'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }
        if (isset($map['UploadToolVersion'])) {
            $model->uploadToolVersion = $map['UploadToolVersion'];
        }
        if (isset($map['UploadType'])) {
            $model->uploadType = $map['UploadType'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
