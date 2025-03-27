<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Dara\Model;

class GetOssUploadTokenResult extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var UploadInfo
     */
    public $uploadInfo;
    protected $_name = [
        'requestId' => 'requestId',
        'uploadInfo' => 'uploadInfo',
    ];

    public function validate()
    {
        if (null !== $this->uploadInfo) {
            $this->uploadInfo->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }

        if (null !== $this->uploadInfo) {
            $res['uploadInfo'] = null !== $this->uploadInfo ? $this->uploadInfo->toArray($noStream) : $this->uploadInfo;
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
        if (isset($map['requestId'])) {
            $model->requestId = $map['requestId'];
        }

        if (isset($map['uploadInfo'])) {
            $model->uploadInfo = UploadInfo::fromMap($map['uploadInfo']);
        }

        return $model;
    }
}
