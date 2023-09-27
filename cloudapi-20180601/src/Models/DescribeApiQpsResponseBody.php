<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20180601\Models;

use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiQpsResponseBody\fails;
use AlibabaCloud\SDK\CloudAPI\V20180601\Models\DescribeApiQpsResponseBody\successes;
use AlibabaCloud\Tea\Model;

class DescribeApiQpsResponseBody extends Model
{
    /**
     * @var fails
     */
    public $fails;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var successes
     */
    public $successes;
    protected $_name = [
        'fails'     => 'Fails',
        'requestId' => 'RequestId',
        'successes' => 'Successes',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->fails) {
            $res['Fails'] = null !== $this->fails ? $this->fails->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->successes) {
            $res['Successes'] = null !== $this->successes ? $this->successes->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApiQpsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Fails'])) {
            $model->fails = fails::fromMap($map['Fails']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Successes'])) {
            $model->successes = successes::fromMap($map['Successes']);
        }

        return $model;
    }
}
