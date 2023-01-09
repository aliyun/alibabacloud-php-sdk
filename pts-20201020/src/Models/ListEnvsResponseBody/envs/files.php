<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\ListEnvsResponseBody\envs;

use AlibabaCloud\Tea\Model;

class files extends Model
{
    /**
     * @example 61660
     *
     * @var int
     */
    public $fileId;

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
     * @example 788
     *
     * @var int
     */
    public $fileSize;

    /**
     * @example 43B584026CE5E570F3DE638FA7EEF9E0
     *
     * @var string
     */
    public $md5;
    protected $_name = [
        'fileId'         => 'FileId',
        'fileName'       => 'FileName',
        'fileOssAddress' => 'FileOssAddress',
        'fileSize'       => 'FileSize',
        'md5'            => 'Md5',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileId) {
            $res['FileId'] = $this->fileId;
        }
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }
        if (null !== $this->fileOssAddress) {
            $res['FileOssAddress'] = $this->fileOssAddress;
        }
        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }
        if (null !== $this->md5) {
            $res['Md5'] = $this->md5;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return files
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileId'])) {
            $model->fileId = $map['FileId'];
        }
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }
        if (isset($map['FileOssAddress'])) {
            $model->fileOssAddress = $map['FileOssAddress'];
        }
        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }
        if (isset($map['Md5'])) {
            $model->md5 = $map['Md5'];
        }

        return $model;
    }
}
