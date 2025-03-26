<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;

class VpcDescribeVpcNatGatewayNetworkInterfaceQuotaResponseBody extends Model
{
    /**
     * @var int
     */
    public $quota;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'quota' => 'Quota',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->quota) {
            $res['Quota'] = $this->quota;
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
        if (isset($map['Quota'])) {
            $model->quota = $map['Quota'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
