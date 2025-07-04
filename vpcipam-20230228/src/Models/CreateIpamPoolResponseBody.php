<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models;

use AlibabaCloud\Dara\Model;

class CreateIpamPoolResponseBody extends Model
{
    /**
     * @var string
     */
    public $ipamPoolId;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ipamPoolId' => 'IpamPoolId',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->ipamPoolId) {
            $res['IpamPoolId'] = $this->ipamPoolId;
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
        if (isset($map['IpamPoolId'])) {
            $model->ipamPoolId = $map['IpamPoolId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
