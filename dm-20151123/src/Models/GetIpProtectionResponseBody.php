<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dm\V20151123\Models;

use AlibabaCloud\Tea\Model;

class GetIpProtectionResponseBody extends Model
{
    /**
     * @example 0
     *
     * @var string
     */
    public $ipProtection;

    /**
     * @example B30E5A62-2E64-577D-A70E-8C6781D6C975
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'ipProtection' => 'IpProtection',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ipProtection) {
            $res['IpProtection'] = $this->ipProtection;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
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
        if (isset($map['IpProtection'])) {
            $model->ipProtection = $map['IpProtection'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
