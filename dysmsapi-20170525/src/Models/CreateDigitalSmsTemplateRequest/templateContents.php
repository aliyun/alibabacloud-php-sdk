<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dysmsapi\V20170525\Models\CreateDigitalSmsTemplateRequest;

use AlibabaCloud\Dara\Model;

class templateContents extends Model
{
    /**
     * @var string
     */
    public $fileContents;

    /**
     * @var string
     */
    public $fileName;

    /**
     * @var int
     */
    public $fileSize;

    /**
     * @var string
     */
    public $fileSuffix;
    protected $_name = [
        'fileContents' => 'FileContents',
        'fileName' => 'FileName',
        'fileSize' => 'FileSize',
        'fileSuffix' => 'FileSuffix',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileContents) {
            $res['FileContents'] = $this->fileContents;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->fileSize) {
            $res['FileSize'] = $this->fileSize;
        }

        if (null !== $this->fileSuffix) {
            $res['FileSuffix'] = $this->fileSuffix;
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
        if (isset($map['FileContents'])) {
            $model->fileContents = $map['FileContents'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['FileSize'])) {
            $model->fileSize = $map['FileSize'];
        }

        if (isset($map['FileSuffix'])) {
            $model->fileSuffix = $map['FileSuffix'];
        }

        return $model;
    }
}
