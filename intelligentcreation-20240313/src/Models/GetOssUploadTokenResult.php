<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\IntelligentCreation\V20240313\Models;

use AlibabaCloud\Tea\Model;

class GetOssUploadTokenResult extends Model
{
    /**
     * @example 3239281273464326823
     *
     * @var string
     */
    public $requestId;

    /**
     * @description This parameter is required.
     *
     * @var UploadInfo
     */
    public $uploadInfo;
    protected $_name = [
        'requestId'  => 'requestId',
        'uploadInfo' => 'uploadInfo',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['requestId'] = $this->requestId;
        }
        if (null !== $this->uploadInfo) {
            $res['uploadInfo'] = null !== $this->uploadInfo ? $this->uploadInfo->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOssUploadTokenResult
     */
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
