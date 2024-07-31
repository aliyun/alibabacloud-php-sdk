<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\SDK\Wafopenapi\V20211001\Models\DescribeDefaultHttpsResponseBody\defaultHttps;
use AlibabaCloud\Tea\Model;

class DescribeDefaultHttpsResponseBody extends Model
{
    /**
     * @var defaultHttps
     */
    public $defaultHttps;

    /**
     * @example F35F45B0-5D6B-4238-BE02-A62D****E840
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'defaultHttps' => 'DefaultHttps',
        'requestId'    => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->defaultHttps) {
            $res['DefaultHttps'] = null !== $this->defaultHttps ? $this->defaultHttps->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeDefaultHttpsResponseBody
     */
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
