<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\SDK\Kms\V20160120\Models\CreateKeyVersionResponseBody\keyVersion;
use AlibabaCloud\Tea\Model;

class CreateKeyVersionResponseBody extends Model
{
    /**
     * @description The metadata of the version.
     *
     * @var keyVersion
     */
    public $keyVersion;

    /**
     * @description The ID of the request.
     *
     * @example b96f250a-4b75-498c-91be-22c6928f85be
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'keyVersion' => 'KeyVersion',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->keyVersion) {
            $res['KeyVersion'] = null !== $this->keyVersion ? $this->keyVersion->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateKeyVersionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KeyVersion'])) {
            $model->keyVersion = keyVersion::fromMap($map['KeyVersion']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
