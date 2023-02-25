<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Dcdn\V20180115\Models;

use AlibabaCloud\SDK\Dcdn\V20180115\Models\DescribeDcdnStagingIpResponseBody\IPV4s;
use AlibabaCloud\Tea\Model;

class DescribeDcdnStagingIpResponseBody extends Model
{
    /**
     * @description The IPv4 addresses.format
     *
     * @var IPV4s
     */
    public $IPV4s;

    /**
     * @description The ID of the request.
     *
     * @example 1B9E0E83-24AC-49F4-9EE0-BF5EB03E8381
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'IPV4s'     => 'IPV4s',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->IPV4s) {
            $res['IPV4s'] = null !== $this->IPV4s ? $this->IPV4s->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDcdnStagingIpResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['IPV4s'])) {
            $model->IPV4s = IPV4s::fromMap($map['IPV4s']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
