<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Xtrace\V20190808\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Xtrace\V20190808\Models\GetTagKeyResponseBody\tagKeys;

class GetTagKeyResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var tagKeys
     */
    public $tagKeys;
    protected $_name = [
        'requestId' => 'RequestId',
        'tagKeys' => 'TagKeys',
    ];

    public function validate()
    {
        if (null !== $this->tagKeys) {
            $this->tagKeys->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->tagKeys) {
            $res['TagKeys'] = null !== $this->tagKeys ? $this->tagKeys->toArray($noStream) : $this->tagKeys;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['TagKeys'])) {
            $model->tagKeys = tagKeys::fromMap($map['TagKeys']);
        }

        return $model;
    }
}
