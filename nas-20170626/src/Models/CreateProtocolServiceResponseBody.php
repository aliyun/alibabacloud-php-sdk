<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\NAS\V20170626\Models;

use AlibabaCloud\Tea\Model;

class CreateProtocolServiceResponseBody extends Model
{
    /**
     * @description The ID of the protocol service.
     *
     * @example ptc-123****
     *
     * @var string
     */
    public $protocolServiceId;

    /**
     * @description The request ID.
     *
     * @example 98696EF0-1607-4E9D-B01D-F20930B6****
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'protocolServiceId' => 'ProtocolServiceId',
        'requestId'         => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return CreateProtocolServiceResponseBody
     */
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
