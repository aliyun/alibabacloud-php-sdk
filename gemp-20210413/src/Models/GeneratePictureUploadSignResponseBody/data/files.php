<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GeneratePictureUploadSignResponseBody\data;

use AlibabaCloud\Tea\Model;

class files extends Model
{
    /**
     * @example 文件A
     *
     * @var string
     */
    public $fileName;

    /**
     * @example 100
     *
     * @var int
     */
    public $fileSize;

    /**
     * @example JPG
     *
     * @var string
     */
    public $fileType;

    /**
     * @description oss key
     *
     * @example problem/25a2316c-b08d-41a5-9f41-b3185d529277
     *
     * @var string
     */
    public $key;
    protected $_name = [
        'fileName' => 'fileName',
        'fileSize' => 'fileSize',
        'fileType' => 'fileType',
        'key'      => 'key',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileName) {
            $res['fileName'] = $this->fileName;
        }
        if (null !== $this->fileSize) {
            $res['fileSize'] = $this->fileSize;
        }
        if (null !== $this->fileType) {
            $res['fileType'] = $this->fileType;
        }
        if (null !== $this->key) {
            $res['key'] = $this->key;
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
        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }
        if (isset($map['fileSize'])) {
            $model->fileSize = $map['fileSize'];
        }
        if (isset($map['fileType'])) {
            $model->fileType = $map['fileType'];
        }
        if (isset($map['key'])) {
            $model->key = $map['key'];
        }

        return $model;
    }
}
