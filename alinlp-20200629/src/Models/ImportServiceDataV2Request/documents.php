<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alinlp\V20200629\Models\ImportServiceDataV2Request;

use AlibabaCloud\Tea\Model;

class documents extends Model
{
    /**
     * @var string[]
     */
    public $bizParams;

    /**
     * @example 1
     *
     * @var string
     */
    public $docId;

    /**
     * @example txt
     *
     * @var string
     */
    public $fileExtension;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @example http://xxxx.txt
     *
     * @var string
     */
    public $filePath;

    /**
     * @example 20240101
     *
     * @var string
     */
    public $version;
    protected $_name = [
        'bizParams'     => 'BizParams',
        'docId'         => 'DocId',
        'fileExtension' => 'FileExtension',
        'fileName'      => 'FileName',
        'filePath'      => 'FilePath',
        'version'       => 'Version',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bizParams) {
            $res['BizParams'] = $this->bizParams;
        }
        if (null !== $this->docId) {
            $res['DocId'] = $this->docId;
        }
        if (null !== $this->fileExtension) {
            $res['FileExtension'] = $this->fileExtension;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->filePath) {
            $res['FilePath'] = $this->filePath;
        }
        if (null !== $this->version) {
            $res['Version'] = $this->version;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return documents
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BizParams'])) {
            $model->bizParams = $map['BizParams'];
        }
        if (isset($map['DocId'])) {
            $model->docId = $map['DocId'];
        }
        if (isset($map['FileExtension'])) {
            $model->fileExtension = $map['FileExtension'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FilePath'])) {
            $model->filePath = $map['FilePath'];
        }
        if (isset($map['Version'])) {
            $model->version = $map['Version'];
        }

        return $model;
    }
}
