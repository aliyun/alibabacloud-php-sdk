<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeKmsKeysResponseBody\kmsKeys;

class DescribeKmsKeysResponseBody extends Model
{
    /**
     * @var kmsKeys
     */
    public $kmsKeys;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'kmsKeys' => 'KmsKeys',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->kmsKeys) {
            $this->kmsKeys->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->kmsKeys) {
            $res['KmsKeys'] = null !== $this->kmsKeys ? $this->kmsKeys->toArray($noStream) : $this->kmsKeys;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['KmsKeys'])) {
            $model->kmsKeys = kmsKeys::fromMap($map['KmsKeys']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
