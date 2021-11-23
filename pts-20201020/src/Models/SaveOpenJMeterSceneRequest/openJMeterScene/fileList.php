<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\SaveOpenJMeterSceneRequest\openJMeterScene;

use AlibabaCloud\Tea\Model;

class fileList extends Model
{
    /**
     * @description 文件id
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
     * @description 文件公网可访问的oss地址
     *
     * @var string
     */
    public $fileOssAddress;

    /**
     * @description 文件大小，单位byte
     *
     * @var int
     */
    public $fileSize;

    /**
     * @description 文件的MD5
     *
     * @var string
     */
    public $md5;

    /**
     * @description 是否切分，仅针对csv有效
     *
     * @var bool
     */
    public $splitCsv;

    /**
     * @description 文件tag
     *
     * @var string
     */
    public $tags;
    protected $_name = [
        'fileId'         => 'FileId',
        'fileName'       => 'FileName',
        'fileOssAddress' => 'FileOssAddress',
        'fileSize'       => 'FileSize',
        'md5'            => 'Md5',
        'splitCsv'       => 'SplitCsv',
        'tags'           => 'Tags',
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
        if (null !== $this->splitCsv) {
            $res['SplitCsv'] = $this->splitCsv;
        }
        if (null !== $this->tags) {
            $res['Tags'] = $this->tags;
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
        if (isset($map['SplitCsv'])) {
            $model->splitCsv = $map['SplitCsv'];
        }
        if (isset($map['Tags'])) {
            $model->tags = $map['Tags'];
        }

        return $model;
    }
}
