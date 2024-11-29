<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeKmsKeysResponseBody\kmsKeys;
use AlibabaCloud\Tea\Model;

class DescribeKmsKeysResponseBody extends Model
{
    /**
     * @var kmsKeys
     */
    public $kmsKeys;

    /**
     * @example 8F91F25F-8BCF-59E3-AF67-3806DB41FD09
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'kmsKeys'   => 'KmsKeys',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->kmsKeys) {
            $res['KmsKeys'] = null !== $this->kmsKeys ? $this->kmsKeys->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeKmsKeysResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KmsKeys'])) {
            $model->kmsKeys = kmsKeys::fromMap($map['KmsKeys']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
