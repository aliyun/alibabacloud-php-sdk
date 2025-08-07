<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Bailian\V20231229\Models\AddFilesFromAuthorizedOssRequest;

use AlibabaCloud\Dara\Model;

class fileDetails extends Model
{
    /**
     * @var string
     */
    public $fileName;

    /**
     * @var string
     */
    public $ossKey;
    protected $_name = [
        'fileName' => 'FileName',
        'ossKey' => 'OssKey',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileName) {
            $res['FileName'] = $this->fileName;
        }

        if (null !== $this->ossKey) {
            $res['OssKey'] = $this->ossKey;
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
        if (isset($map['FileName'])) {
            $model->fileName = $map['FileName'];
        }

        if (isset($map['OssKey'])) {
            $model->ossKey = $map['OssKey'];
        }

        return $model;
    }
}
