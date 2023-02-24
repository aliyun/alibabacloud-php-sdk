<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Kms\V20160120\Models;

use AlibabaCloud\SDK\Kms\V20160120\Models\DescribeKeyVersionResponseBody\keyVersion;
use AlibabaCloud\Tea\Model;

class DescribeKeyVersionResponseBody extends Model
{
    /**
     * @description The metadata of the CMK version.
     *
     * @var keyVersion
     */
    public $keyVersion;

    /**
     * @description The ID of the request.
     *
     * @example 7021b6ec-4be7-4d3c-8a68-1e85d4d515a0
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
     * @return DescribeKeyVersionResponseBody
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
