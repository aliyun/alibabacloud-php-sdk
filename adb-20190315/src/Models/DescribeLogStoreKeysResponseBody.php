<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Adb\V20190315\Models;

use AlibabaCloud\SDK\Adb\V20190315\Models\DescribeLogStoreKeysResponseBody\logStoreKeys;
use AlibabaCloud\Tea\Model;

class DescribeLogStoreKeysResponseBody extends Model
{
    /**
     * @var logStoreKeys
     */
    public $logStoreKeys;

    /**
     * @example 3BB185E9-BB54-1727-B876-13243E4C0EB5
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'logStoreKeys' => 'LogStoreKeys',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logStoreKeys) {
            $res['LogStoreKeys'] = null !== $this->logStoreKeys ? $this->logStoreKeys->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLogStoreKeysResponseBody
     */
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
