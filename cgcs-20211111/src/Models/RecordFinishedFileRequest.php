<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CGCS\V20211111\Models;

use AlibabaCloud\SDK\CGCS\V20211111\Models\RecordFinishedFileRequest\fileFingerprintDTOList;
use AlibabaCloud\Tea\Model;

class RecordFinishedFileRequest extends Model
{
    /**
     * @description 应用ID
     *
     * @var string
     */
    public $appId;

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
     * @description 用于pop传入的文件指纹信息
     *
     * @var fileFingerprintDTOList[]
     */
    public $fileFingerprintDTOList;

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
     * @description 上传的bucket所在region
     *
     * @var string
     */
    public $region;

    /**
     * @description 上传工具版本
     *
     * @var string
     */
    public $toolVersion;

    /**
     * @description 版本ID
     *
     * @var string
     */
    public $versionId;
    protected $_name = [
        'appId'                  => 'AppId',
        'bucketName'             => 'BucketName',
        'env'                    => 'Env',
        'fileFingerprintDTOList' => 'FileFingerprintDTOList',
        'fileSize'               => 'FileSize',
        'fileType'               => 'FileType',
        'region'                 => 'Region',
        'toolVersion'            => 'ToolVersion',
        'versionId'              => 'VersionId',
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
        if (null !== $this->bucketName) {
            $res['BucketName'] = $this->bucketName;
        }
        if (null !== $this->env) {
            $res['Env'] = $this->env;
        }
        if (null !== $this->fileFingerprintDTOList) {
            $res['FileFingerprintDTOList'] = [];
            if (null !== $this->fileFingerprintDTOList && \is_array($this->fileFingerprintDTOList)) {
                $n = 0;
                foreach ($this->fileFingerprintDTOList as $item) {
                    $res['FileFingerprintDTOList'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }
        if (null !== $this->region) {
            $res['Region'] = $this->region;
        }
        if (null !== $this->toolVersion) {
            $res['ToolVersion'] = $this->toolVersion;
        }
        if (null !== $this->versionId) {
            $res['VersionId'] = $this->versionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return RecordFinishedFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['BucketName'])) {
            $model->bucketName = $map['BucketName'];
        }
        if (isset($map['Env'])) {
            $model->env = $map['Env'];
        }
        if (isset($map['FileFingerprintDTOList'])) {
            if (!empty($map['FileFingerprintDTOList'])) {
                $model->fileFingerprintDTOList = [];
                $n                             = 0;
                foreach ($map['FileFingerprintDTOList'] as $item) {
                    $model->fileFingerprintDTOList[$n++] = null !== $item ? fileFingerprintDTOList::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }
        if (isset($map['Region'])) {
            $model->region = $map['Region'];
        }
        if (isset($map['ToolVersion'])) {
            $model->toolVersion = $map['ToolVersion'];
        }
        if (isset($map['VersionId'])) {
            $model->versionId = $map['VersionId'];
        }

        return $model;
    }
}
