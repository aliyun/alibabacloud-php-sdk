<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class GetRoutineStagingEnvIpResponseBody extends Model
{
    /**
     * @description The IPv4 addresses.
     *
     * @var string[]
     */
    public $IPV4;

    /**
     * @description The request ID.
     *
     * @example EDBD3EB3-97DA-5465-AEF5-8DCA5DC5E395
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'IPV4' => 'IPV4',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->IPV4) {
            $res['IPV4'] = $this->IPV4;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetRoutineStagingEnvIpResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IPV4'])) {
            if (!empty($map['IPV4'])) {
                $model->IPV4 = $map['IPV4'];
            }
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
