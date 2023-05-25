<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiQpsDataResponseBody\callFails;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiQpsDataResponseBody\callSuccesses;
use AlibabaCloud\Tea\Model;

class DescribeApiQpsDataResponseBody extends Model
{
    /**
     * @var callFails
     */
    public $callFails;

    /**
     * @var callSuccesses
     */
    public $callSuccesses;

    /**
     * @example CEF72CEB-54B6-4AE8-B225-F876FF7BZ001
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'callFails'     => 'CallFails',
        'callSuccesses' => 'CallSuccesses',
        'requestId'     => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->callFails) {
            $res['CallFails'] = null !== $this->callFails ? $this->callFails->toMap() : null;
        }
        if (null !== $this->callSuccesses) {
            $res['CallSuccesses'] = null !== $this->callSuccesses ? $this->callSuccesses->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeApiQpsDataResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CallFails'])) {
            $model->callFails = callFails::fromMap($map['CallFails']);
        }
        if (isset($map['CallSuccesses'])) {
            $model->callSuccesses = callSuccesses::fromMap($map['CallSuccesses']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
