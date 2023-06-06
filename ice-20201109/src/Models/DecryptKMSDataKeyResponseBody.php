<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ICE\V20201109\Models;

use AlibabaCloud\SDK\ICE\V20201109\Models\DecryptKMSDataKeyResponseBody\dataKey;
use AlibabaCloud\Tea\Model;

class DecryptKMSDataKeyResponseBody extends Model
{
    /**
     * @var dataKey
     */
    public $dataKey;

    /**
     * @example ******11-DB8D-4A9A-875B-275798******
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'dataKey'   => 'DataKey',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->dataKey) {
            $res['DataKey'] = null !== $this->dataKey ? $this->dataKey->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DecryptKMSDataKeyResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['DataKey'])) {
            $model->dataKey = dataKey::fromMap($map['DataKey']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
