<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\GEMP\V20210413\Models\GeneratePictureUploadSignRequest;

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
    protected $_name = [
        'fileName' => 'fileName',
        'fileSize' => 'fileSize',
        'fileType' => 'fileType',
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

        return $model;
    }
}
