<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\SDK\Ims\V20190815\Models\ListAccessKeysResponseBody\accessKeys;
use AlibabaCloud\Tea\Model;

class ListAccessKeysResponseBody extends Model
{
    /**
     * @description The information about the AccessKey pairs.
     *
     * @var accessKeys
     */
    public $accessKeys;

    /**
     * @description The request ID.
     *
     * @example 4B450CA1-36E8-4AA2-8461-86B42BF4CC4E
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accessKeys' => 'AccessKeys',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessKeys) {
            $res['AccessKeys'] = null !== $this->accessKeys ? $this->accessKeys->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListAccessKeysResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessKeys'])) {
            $model->accessKeys = accessKeys::fromMap($map['AccessKeys']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
