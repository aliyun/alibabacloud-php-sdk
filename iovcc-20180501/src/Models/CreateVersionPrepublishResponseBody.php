<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Iovcc\V20180501\Models;

use AlibabaCloud\Tea\Model;

class CreateVersionPrepublishResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $prepublishId;
    protected $_name = [
        'requestId'    => 'RequestId',
        'prepublishId' => 'PrepublishId',
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
        if (null !== $this->prepublishId) {
            $res['PrepublishId'] = $this->prepublishId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateVersionPrepublishResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['PrepublishId'])) {
            $model->prepublishId = $map['PrepublishId'];
        }

        return $model;
    }
}
