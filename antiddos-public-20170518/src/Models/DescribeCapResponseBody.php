<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeCapResponseBody\capUrl;

class DescribeCapResponseBody extends Model
{
    /**
     * @var capUrl
     */
    public $capUrl;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'capUrl' => 'CapUrl',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->capUrl) {
            $this->capUrl->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->capUrl) {
            $res['CapUrl'] = null !== $this->capUrl ? $this->capUrl->toArray($noStream) : $this->capUrl;
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
        if (isset($map['CapUrl'])) {
            $model->capUrl = capUrl::fromMap($map['CapUrl']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
