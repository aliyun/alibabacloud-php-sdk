<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models\ModifySmsSignRequest;

use AlibabaCloud\Tea\Model;

class signFileList extends Model
{
    /**
     * @description The base64-encoded string of the signed files. The size of the image cannot exceed 2 MB.
     *
     * This parameter is required.
     * @example R0lGODlhHAAmAKIHAKqqqsvLy0hISObm5vf394uLiwAA
     *
     * @var string
     */
    public $fileContents;

    /**
     * @description The format of the documents. You can upload multiple images. JPG, PNG, GIF, and JPEG are supported.
     *
     * This parameter is required.
     * @example jpg
     *
     * @var string
     */
    public $fileSuffix;
    protected $_name = [
        'fileContents' => 'FileContents',
        'fileSuffix'   => 'FileSuffix',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fileContents) {
            $res['FileContents'] = $this->fileContents;
        }
        if (null !== $this->fileSuffix) {
            $res['FileSuffix'] = $this->fileSuffix;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return signFileList
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['FileContents'])) {
            $model->fileContents = $map['FileContents'];
        }
        if (isset($map['FileSuffix'])) {
            $model->fileSuffix = $map['FileSuffix'];
        }

        return $model;
    }
}
