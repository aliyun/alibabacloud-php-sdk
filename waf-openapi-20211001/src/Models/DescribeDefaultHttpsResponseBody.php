<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefaultHttpsResponseBody\defaultHttps;

class DescribeDefaultHttpsResponseBody extends Model
{
    /**
     * @var defaultHttps
     */
    public $defaultHttps;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'defaultHttps' => 'DefaultHttps',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        if (null !== $this->defaultHttps) {
            $this->defaultHttps->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->defaultHttps) {
            $res['DefaultHttps'] = null !== $this->defaultHttps ? $this->defaultHttps->toArray($noStream) : $this->defaultHttps;
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
        if (isset($map['DefaultHttps'])) {
            $model->defaultHttps = defaultHttps::fromMap($map['DefaultHttps']);
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
