<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PTS\V20201020\Models\SaveOpenJMeterSceneRequest\openJMeterScene;

use AlibabaCloud\Tea\Model;

class fileList extends Model
{
    /**
     * @example 61232
     *
     * @var int
     */
    public $fileId;

    /**
     * @example baidu.jmx
     *
     * @var string
     */
    public $fileName;

    /**
     * @example https://test.cn-shanghai.aliyuncs.com/baidu.jmx
     *
     * @var string
     */
    public $fileOssAddress;

    /**
     * @example 28880
     *
     * @var int
     */
    public $fileSize;

    /**
     * @example DA70F97A74D76B6A3BEF9CC8AE0D89EB
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

    /**
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
