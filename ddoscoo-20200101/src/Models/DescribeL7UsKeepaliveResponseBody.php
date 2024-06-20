<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeL7UsKeepaliveResponseBody\rsKeepalive;
use AlibabaCloud\Tea\Model;

class DescribeL7UsKeepaliveResponseBody extends Model
{
    /**
     * @example 39499F01-19D9-4EA4-A0E9-C6014BA5CDBE
     *
     * @var string
     */
    public $requestId;

    /**
     * @var rsKeepalive
     */
    public $rsKeepalive;
    protected $_name = [
        'requestId'   => 'RequestId',
        'rsKeepalive' => 'RsKeepalive',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->rsKeepalive) {
            $res['RsKeepalive'] = null !== $this->rsKeepalive ? $this->rsKeepalive->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeL7UsKeepaliveResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['RsKeepalive'])) {
            $model->rsKeepalive = rsKeepalive::fromMap($map['RsKeepalive']);
        }

        return $model;
    }
}
