<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vcs\V20200515\Models;

use AlibabaCloud\Tea\Model;

class UploadFileRequest extends Model
{
    /**
     * @var string
     */
    public $fileType;

    /**
     * @var string
     */
    public $MD5;

    /**
     * @var string
     */
    public $corpId;

    /**
     * @var string
     */
    public $fileContent;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $fileAliasName;

    /**
     * @var string
     */
    public $dataSourceId;

    /**
     * @var string
     */
    public $filePath;
    protected $_name = [
        'fileType'      => 'FileType',
        'MD5'           => 'MD5',
        'corpId'        => 'CorpId',
        'fileContent'   => 'FileContent',
        'fileName'      => 'FileName',
        'fileAliasName' => 'FileAliasName',
        'dataSourceId'  => 'DataSourceId',
        'filePath'      => 'FilePath',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }
        if (null !== $this->MD5) {
            $res['MD5'] = $this->MD5;
        }
        if (null !== $this->corpId) {
            $res['CorpId'] = $this->corpId;
        }
        if (null !== $this->fileContent) {
            $res['FileContent'] = $this->fileContent;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->fileAliasName) {
            $res['FileAliasName'] = $this->fileAliasName;
        }
        if (null !== $this->dataSourceId) {
            $res['DataSourceId'] = $this->dataSourceId;
        }
        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UploadFileRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }
        if (isset($map['MD5'])) {
            $model->MD5 = $map['MD5'];
        }
        if (isset($map['CorpId'])) {
            $model->corpId = $map['CorpId'];
        }
        if (isset($map['FileContent'])) {
            $model->fileContent = $map['FileContent'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileAliasName'])) {
            $model->fileAliasName = $map['FileAliasName'];
        }
        if (isset($map['DataSourceId'])) {
            $model->dataSourceId = $map['DataSourceId'];
        }
        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }

        return $model;
    }
}
