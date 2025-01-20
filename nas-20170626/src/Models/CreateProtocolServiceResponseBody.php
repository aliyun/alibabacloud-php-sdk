<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Dara\Model;

class CreateProtocolServiceResponseBody extends Model
{
    /**
     * @var string
     */
    public $protocolServiceId;
    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'protocolServiceId' => 'ProtocolServiceId',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->protocolServiceId) {
            $res['ProtocolServiceId'] = $this->protocolServiceId;
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
        if (isset($map['ProtocolServiceId'])) {
            $model->protocolServiceId = $map['ProtocolServiceId'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
