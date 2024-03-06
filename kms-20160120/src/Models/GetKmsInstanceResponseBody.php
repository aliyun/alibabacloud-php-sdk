<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\SDK\Kms\V20160120\Models\GetKmsInstanceResponseBody\kmsInstance;
use AlibabaCloud\Tea\Model;

class GetKmsInstanceResponseBody extends Model
{
    /**
     * @description The details of the KMS instance.
     *
     * @var kmsInstance
     */
    public $kmsInstance;

    /**
     * @description The request ID.
     *
     * @example 46b4a94a-57d2-44b4-9810-1e87d31abb33
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'kmsInstance' => 'KmsInstance',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->kmsInstance) {
            $res['KmsInstance'] = null !== $this->kmsInstance ? $this->kmsInstance->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetKmsInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KmsInstance'])) {
            $model->kmsInstance = kmsInstance::fromMap($map['KmsInstance']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
