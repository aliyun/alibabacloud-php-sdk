<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeLogStoreKeysResponseBody\logStoreKeys;

class DescribeLogStoreKeysResponseBody extends Model
{
    /**
     * @var logStoreKeys
     */
    public $logStoreKeys;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'logStoreKeys' => 'LogStoreKeys',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->logStoreKeys) {
            $this->logStoreKeys->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->logStoreKeys) {
            $res['LogStoreKeys'] = null !== $this->logStoreKeys ? $this->logStoreKeys->toArray($noStream) : $this->logStoreKeys;
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
        if (isset($map['LogStoreKeys'])) {
            $model->logStoreKeys = logStoreKeys::fromMap($map['LogStoreKeys']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
