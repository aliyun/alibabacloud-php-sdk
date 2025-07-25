<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\VpcIpam\V20230228\Models;

use AlibabaCloud\Tea\Model;

class GetIpamPoolNextAvailableCidrResponseBody extends Model
{
    /**
     * @description Available CIDR.
     *
     * @example 172.68.0.0/26
     *
     * @var string
     */
    public $cidrBlock;

    /**
     * @description The request ID.
     *
     * @example 29FC6758-9B7C-5CC7-8CBF-4DD846FE7D82
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'cidrBlock' => 'CidrBlock',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->cidrBlock) {
            $res['CidrBlock'] = $this->cidrBlock;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetIpamPoolNextAvailableCidrResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CidrBlock'])) {
            $model->cidrBlock = $map['CidrBlock'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
