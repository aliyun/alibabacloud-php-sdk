<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models;

use AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeLogStoreKeysResponseBody\logStoreKeys;
use AlibabaCloud\Tea\Model;

class DescribeLogStoreKeysResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var logStoreKeys
     */
    public $logStoreKeys;
    protected $_name = [
        'requestId'    => 'RequestId',
        'logStoreKeys' => 'LogStoreKeys',
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
        if (null !== $this->logStoreKeys) {
            $res['LogStoreKeys'] = null !== $this->logStoreKeys ? $this->logStoreKeys->toMap() : null;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['LogStoreKeys'])) {
            $model->logStoreKeys = logStoreKeys::fromMap($map['LogStoreKeys']);
        }

        return $model;
    }
}
