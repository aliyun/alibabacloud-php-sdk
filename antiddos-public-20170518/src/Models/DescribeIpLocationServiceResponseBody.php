<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Antiddospublic\V20170518\Models;

use AlibabaCloud\SDK\Antiddospublic\V20170518\Models\DescribeIpLocationServiceResponseBody\instance;
use AlibabaCloud\Tea\Model;

class DescribeIpLocationServiceResponseBody extends Model
{
    /**
     * @description The details of the asset.
     *
     * @var instance
     */
    public $instance;

    /**
     * @description The ID of the request, which is used to locate and troubleshoot issues.
     *
     * @example C728D7E9-9A39-52E0-966B-5C33118BDBB0
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'instance'  => 'Instance',
        'requestId' => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->instance) {
            $res['Instance'] = null !== $this->instance ? $this->instance->toMap() : null;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeIpLocationServiceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Instance'])) {
            $model->instance = instance::fromMap($map['Instance']);
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
