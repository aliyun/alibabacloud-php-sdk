<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\GetAccessKeyInfoInRecycleBinResponseBody\accessKey;
use AlibabaCloud\Tea\Model;

class GetAccessKeyInfoInRecycleBinResponseBody extends Model
{
    /**
     * @description The information about the AccessKey pair.
     *
     * @var accessKey
     */
    public $accessKey;

    /**
     * @description The request ID.
     *
     * @example 4507D1CD-526A-4E2B-A1E2-3AB045D1EE0B
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accessKey' => 'AccessKey',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKey) {
            $res['AccessKey'] = null !== $this->accessKey ? $this->accessKey->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetAccessKeyInfoInRecycleBinResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKey'])) {
            $model->accessKey = accessKey::fromMap($map['AccessKey']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
