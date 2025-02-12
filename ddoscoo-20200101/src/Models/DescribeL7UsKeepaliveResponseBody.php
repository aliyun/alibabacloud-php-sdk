<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ddoscoo\V20200101\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Ddoscoo\V20200101\Models\DescribeL7UsKeepaliveResponseBody\rsKeepalive;

class DescribeL7UsKeepaliveResponseBody extends Model
{
    /**
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
        if (null !== $this->rsKeepalive) {
            $this->rsKeepalive->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->rsKeepalive) {
            $res['RsKeepalive'] = null !== $this->rsKeepalive ? $this->rsKeepalive->toArray($noStream) : $this->rsKeepalive;
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
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['RsKeepalive'])) {
            $model->rsKeepalive = rsKeepalive::fromMap($map['RsKeepalive']);
        }

        return $model;
    }
}
