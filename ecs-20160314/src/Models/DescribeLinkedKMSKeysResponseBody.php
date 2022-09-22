<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20160314\Models;

use AlibabaCloud\SDK\Ecs\V20160314\Models\DescribeLinkedKMSKeysResponseBody\KMSKeys;
use AlibabaCloud\Tea\Model;

class DescribeLinkedKMSKeysResponseBody extends Model
{
    /**
     * @var KMSKeys
     */
    public $KMSKeys;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'KMSKeys'   => 'KMSKeys',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->KMSKeys) {
            $res['KMSKeys'] = null !== $this->KMSKeys ? $this->KMSKeys->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeLinkedKMSKeysResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['KMSKeys'])) {
            $model->KMSKeys = KMSKeys::fromMap($map['KMSKeys']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
