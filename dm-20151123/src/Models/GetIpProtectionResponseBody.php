<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Tea\Model;

class GetIpProtectionResponseBody extends Model
{
    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $ipProtection;
    protected $_name = [
        'requestId'    => 'RequestId',
        'ipProtection' => 'IpProtection',
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
        if (null !== $this->ipProtection) {
            $res['IpProtection'] = $this->ipProtection;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetIpProtectionResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['IpProtection'])) {
            $model->ipProtection = $map['IpProtection'];
        }

        return $model;
    }
}
