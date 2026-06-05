<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vs\V20181212\Models;

use AlibabaCloud\Dara\Model;

class DescribeComfyUserDataUploadUrlRequest extends Model
{
    /**
     * @var string
     */
    public $contentType;

    /**
     * @var string
     */
    public $fileMd5;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var int
     */
    public $fileSizeBytes;
    protected $_name = [
        'contentType' => 'ContentType',
        'fileMd5' => 'FileMd5',
        'fileName' => 'FileName',
        'fileSizeBytes' => 'FileSizeBytes',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->contentType) {
            $res['ContentType'] = $this->contentType;
        }

        if (null !== $this->fileMd5) {
            $res['FileMd5'] = $this->fileMd5;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->fileSizeBytes) {
            $res['FileSizeBytes'] = $this->fileSizeBytes;
        }

        return $res;
    }

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ContentType'])) {
            $model->contentType = $map['ContentType'];
        }

        if (isset($map['FileMd5'])) {
            $model->fileMd5 = $map['FileMd5'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['FileSizeBytes'])) {
            $model->fileSizeBytes = $map['FileSizeBytes'];
        }

        return $model;
    }
}
