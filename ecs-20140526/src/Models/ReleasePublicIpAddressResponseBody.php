<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ecs\V20140526\Models;

use AlibabaCloud\Dara\Model;

class ReleasePublicIpAddressResponseBody extends Model
{
    /**
     * @var string
     */
    public $remainTimes;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'remainTimes' => 'RemainTimes',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->remainTimes) {
            $res['RemainTimes'] = $this->remainTimes;
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
        if (isset($map['RemainTimes'])) {
            $model->remainTimes = $map['RemainTimes'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
