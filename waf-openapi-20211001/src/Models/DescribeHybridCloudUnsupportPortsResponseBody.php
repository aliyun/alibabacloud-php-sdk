<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Wafopenapi\V20211001\Models;

use AlibabaCloud\Dara\Model;

class DescribeHybridCloudUnsupportPortsResponseBody extends Model
{
    /**
     * @var string
     */
    public $httpPorts;

    /**
     * @var string
     */
    public $httpsPorts;

    /**
     * @var string
     */
    public $requestId;
    protected $_name = [
        'httpPorts' => 'HttpPorts',
        'httpsPorts' => 'HttpsPorts',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->httpPorts) {
            $res['HttpPorts'] = $this->httpPorts;
        }

        if (null !== $this->httpsPorts) {
            $res['HttpsPorts'] = $this->httpsPorts;
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
        if (isset($map['HttpPorts'])) {
            $model->httpPorts = $map['HttpPorts'];
        }

        if (isset($map['HttpsPorts'])) {
            $model->httpsPorts = $map['HttpsPorts'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
