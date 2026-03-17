<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\Dara\Model;

class CreateYikeAssetUploadRequest extends Model
{
    /**
     * @var string
     */
    public $fileExt;

    /**
     * @var string
     */
    public $fileType;
    protected $_name = [
        'fileExt' => 'FileExt',
        'fileType' => 'FileType',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->fileExt) {
            $res['FileExt'] = $this->fileExt;
        }

        if (null !== $this->fileType) {
            $res['FileType'] = $this->fileType;
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
        if (isset($map['FileExt'])) {
            $model->fileExt = $map['FileExt'];
        }

        if (isset($map['FileType'])) {
            $model->fileType = $map['FileType'];
        }

        return $model;
    }
}
