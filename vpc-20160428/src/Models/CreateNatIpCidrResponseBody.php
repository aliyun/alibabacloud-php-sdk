<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Vpc\V20160428\Models;

use AlibabaCloud\Dara\Model;

class CreateNatIpCidrResponseBody extends Model
{
    /**
     * @var string
     */
    public $natIpCidrId;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'natIpCidrId' => 'NatIpCidrId',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
