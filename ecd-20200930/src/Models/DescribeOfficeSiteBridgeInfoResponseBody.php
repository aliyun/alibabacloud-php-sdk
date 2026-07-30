<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecd\V20200930\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ecd\V20200930\Models\DescribeOfficeSiteBridgeInfoResponseBody\bridge;

class DescribeOfficeSiteBridgeInfoResponseBody extends Model
{
    /**
     * @var bridge
     */
    public $bridge;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'bridge' => 'Bridge',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->bridge) {
            $this->bridge->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->bridge) {
            $res['Bridge'] = null !== $this->bridge ? $this->bridge->toArray($noStream) : $this->bridge;
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
        if (isset($map['Bridge'])) {
            $model->bridge = bridge::fromMap($map['Bridge']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
