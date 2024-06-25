<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models\AddSmsSignRequest;

use AlibabaCloud\Tea\Model;

class signFileList extends Model
{
    /**
     * @description The Base64-encoded string of the qualification document. An image cannot exceed 2 MB in size. In some scenarios, you must upload supporting documents to apply for signatures. For more information, see [SMS signature specifications](https://help.aliyun.com/document_detail/108076.html).
     *
     * This parameter is required.
     * @example R0lGODlhHAAmAKIHAKqqqsvLy0hISObm5vf394uL****
     *
     * @var string
     */
    public $fileContents;

    /**
     * @description The format of the qualification document. You can upload multiple images. Images in JPG, PNG, GIF, or JPEG format are supported.
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
