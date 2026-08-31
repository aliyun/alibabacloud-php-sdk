<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dataphinpublic\V20230630\Models\UploadDataSourceFileRequest;

use AlibabaCloud\Dara\Model;

class uploadCommand extends Model
{
    /**
     * @var string
     */
    public $fileContentBase64;

    /**
     * @var string
     */
    public $fileName;
    protected $_name = [
        'fileContentBase64' => 'FileContentBase64',
        'fileName' => 'FileName',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileContentBase64) {
            $res['FileContentBase64'] = $this->fileContentBase64;
        }

        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
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
        if (isset($map['FileContentBase64'])) {
            $model->fileContentBase64 = $map['FileContentBase64'];
        }

        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        return $model;
    }
}
