<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiQpsDataResponseBody\callFails;
use AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiQpsDataResponseBody\callSuccesses;

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
        if (null !== $this->callFails) {
            $this->callFails->validate();
        }
        if (null !== $this->callSuccesses) {
            $this->callSuccesses->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->callFails) {
            $res['CallFails'] = null !== $this->callFails ? $this->callFails->toArray($noStream) : $this->callFails;
        }

        if (null !== $this->callSuccesses) {
            $res['CallSuccesses'] = null !== $this->callSuccesses ? $this->callSuccesses->toArray($noStream) : $this->callSuccesses;
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
