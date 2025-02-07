<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ims\V20190815\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ims\V20190815\Models\ListAccessKeysResponseBody\accessKeys;

class ListAccessKeysResponseBody extends Model
{
    /**
     * @var accessKeys
     */
    public $accessKeys;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accessKeys' => 'AccessKeys',
        'requestId'  => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->accessKeys) {
            $this->accessKeys->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessKeys) {
            $res['AccessKeys'] = null !== $this->accessKeys ? $this->accessKeys->toArray($noStream) : $this->accessKeys;
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
        if (isset($map['AccessKeys'])) {
            $model->accessKeys = accessKeys::fromMap($map['AccessKeys']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
