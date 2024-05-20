<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class GetOssUploadTokenRequest extends Model
{
    /**
     * @description This parameter is required.
     *
     * @example 8021678.png
     *
     * @var string
     */
    public $fileName;

    /**
     * @description This parameter is required.
     *
     * @example ProductImage
     *
     * @var string
     */
    public $fileType;
    protected $_name = [
        'fileName' => 'fileName',
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
        if (null !== $this->fileType) {
            $res['fileType'] = $this->fileType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOssUploadTokenRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['fileName'])) {
            $model->fileName = $map['fileName'];
        }
        if (isset($map['fileType'])) {
            $model->fileType = $map['fileType'];
        }

        return $model;
    }
}
