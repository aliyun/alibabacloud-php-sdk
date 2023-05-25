<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Tea\Model;

class CreateBackendModelResponseBody extends Model
{
    /**
     * @example 4be6b110b7aa40b0bf0c83cc00b3bd86
     *
     * @var string
     */
    public $backendModelId;

    /**
     * @example 64411ECF-FAF7-5E3C-BA7B-E4A1F15A28CA
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'backendModelId' => 'BackendModelId',
        'requestId'      => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->backendModelId) {
            $res['BackendModelId'] = $this->backendModelId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateBackendModelResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BackendModelId'])) {
            $model->backendModelId = $map['BackendModelId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
