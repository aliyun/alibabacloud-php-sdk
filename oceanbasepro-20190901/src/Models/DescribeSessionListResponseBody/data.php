<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OceanBasePro\V20190901\Models\DescribeSessionListResponseBody;

use AlibabaCloud\Tea\Model;

class data extends Model
{
    /**
     * @description The address of the client, with the format ip:port.
     *
     * @example 192.***.**.100:80
     *
     * @var string
     */
    public $host;

    /**
     * @description The session ID of the proxy service.
     *
     * @example d2c90ad0-bc54-410f-bb89-2dcf14aa3c6d
     *
     * @var string
     */
    public $sessionId;
    protected $_name = [
        'host'      => 'Host',
        'sessionId' => 'SessionId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->host) {
            $res['Host'] = $this->host;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return data
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Host'])) {
            $model->host = $map['Host'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }

        return $model;
    }
}
