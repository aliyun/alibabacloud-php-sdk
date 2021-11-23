<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\ListEnvsResponseBody\envs;

use AlibabaCloud\Tea\Model;

class files extends Model
{
    /**
     * @description 文件ID
     *
     * @var int
     */
    public $fileId;

    /**
     * @description 文件名
     *
     * @var string
     */
    public $fileName;

    /**
     * @description 文件的oss地址
     *
     * @var string
     */
    public $fileOssAddress;

    /**
     * @description 文件大小，单位为Byte
     *
     * @var int
     */
    public $fileSize;

    /**
     * @description jar包的md5值
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
