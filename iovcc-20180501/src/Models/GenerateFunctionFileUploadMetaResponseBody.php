<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\SDK\Iovcc\V20180501\Models\GenerateFunctionFileUploadMetaResponseBody\uploadMeta;
use AlibabaCloud\Tea\Model;

class GenerateFunctionFileUploadMetaResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var uploadMeta
     */
    public $uploadMeta;
    protected $_name = [
        'requestId'  => 'RequestId',
        'uploadMeta' => 'UploadMeta',
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
        if (null !== $this->uploadMeta) {
            $res['UploadMeta'] = null !== $this->uploadMeta ? $this->uploadMeta->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GenerateFunctionFileUploadMetaResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['UploadMeta'])) {
            $model->uploadMeta = uploadMeta::fromMap($map['UploadMeta']);
        }

        return $model;
    }
}
