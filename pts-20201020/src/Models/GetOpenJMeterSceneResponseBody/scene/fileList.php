<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\GetOpenJMeterSceneResponseBody\scene;

use AlibabaCloud\Tea\Model;

class fileList extends Model
{
    /**
     * @example json.jar
     *
     * @var string
     */
    public $fileName;

    /**
     * @example https://test.oss-cn-shanghai.aliyuncs.com/json.jar
     *
     * @var string
     */
    public $fileOssAddress;

    /**
     * @example 700
     *
     * @var int
     */
    public $fileSize;

    /**
     * @example jar
     *
     * @var string
     */
    public $fileType;

    /**
     * @example 61660
     *
     * @var int
     */
    public $id;

    /**
     * @example 43B584026CE5E570F3DE638FA7EEF9E0
     *
     * @var string
     */
    public $md5;

    /**
     * @example false
     *
     * @var bool
     */
    public $splitCsv;
    protected $_name = [
        'fileName'       => 'FileName',
        'fileOssAddress' => 'FileOssAddress',
        'fileSize'       => 'FileSize',
        'fileType'       => 'FileType',
        'id'             => 'Id',
        'md5'            => 'Md5',
        'splitCsv'       => 'SplitCsv',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->fileOssAddress) {
            $res['FileOssAddress'] = $this->fileOssAddress;
        }
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }
        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
        }
        if (null !== $this->id) {
            $res['Id'] = $this->id;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }
        if (null !== $this->splitCsv) {
            $res['SplitCsv'] = $this->splitCsv;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return fileList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileOssAddress'])) {
            $model->fileOssAddress = $map['FileOssAddress'];
        }
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }
        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }
        if (isset($map['Id'])) {
            $model->id = $map['Id'];
        }
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }
        if (isset($map['SplitCsv'])) {
            $model->splitCsv = $map['SplitCsv'];
        }

        return $model;
    }
}
