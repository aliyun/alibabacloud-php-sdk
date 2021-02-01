<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Clickhouse\V20191111\Models\DescribeLogStoreKeysResponseBody;

use AlibabaCloud\Tea\Model;

class logStoreKeys extends Model
{
    /**
     * @var string[]
     */
    public $logStoreKey;
    protected $_name = [
        'logStoreKey' => 'LogStoreKey',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->logStoreKey) {
            $res['LogStoreKey'] = $this->logStoreKey;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return logStoreKeys
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['LogStoreKey'])) {
            if (!empty($map['LogStoreKey'])) {
                $model->logStoreKey = $map['LogStoreKey'];
            }
        }

        return $model;
    }
}
