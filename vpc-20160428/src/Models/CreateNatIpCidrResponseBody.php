<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Tea\Model;

class CreateNatIpCidrResponseBody extends Model
{
    /**
     * @example vpcnatcidr-gw8lhqtvdn4qnea****
     *
     * @var string
     */
    public $natIpCidrId;

    /**
     * @example 7021BEB1-210F-48A9-AB82-BE9A9110BB89
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'natIpCidrId' => 'NatIpCidrId',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->natIpCidrId) {
            $res['NatIpCidrId'] = $this->natIpCidrId;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateNatIpCidrResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['NatIpCidrId'])) {
            $model->natIpCidrId = $map['NatIpCidrId'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
