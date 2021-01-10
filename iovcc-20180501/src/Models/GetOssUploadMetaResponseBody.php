<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\GetOssUploadMetaResponseBody\ossUploadMeta;
use AlibabaCloud\Tea\Model;

class GetOssUploadMetaResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var ossUploadMeta
     */
    public $ossUploadMeta;
    protected $_name = [
        'requestId'     => 'RequestId',
        'ossUploadMeta' => 'OssUploadMeta',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->ossUploadMeta) {
            $res['OssUploadMeta'] = null !== $this->ossUploadMeta ? $this->ossUploadMeta->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetOssUploadMetaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['OssUploadMeta'])) {
            $model->ossUploadMeta = ossUploadMeta::fromMap($map['OssUploadMeta']);
        }

        return $model;
    }
}
