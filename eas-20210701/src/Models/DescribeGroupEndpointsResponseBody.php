<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeGroupEndpointsResponseBody\endpoints;
use AlibabaCloud\Tea\Model;

class DescribeGroupEndpointsResponseBody extends Model
{
    /**
     * @example Nzc5N2FhNTM4OTQ0YzBmYTIy****ZTUxN2NkYjg4MTJmMWQxZmY1****
     *
     * @var string
     */
    public $accessToken;

    /**
     * @var endpoints
     */
    public $endpoints;

    /**
     * @var string
     */
    public $message;

    /**
     * @example 890772EF-3AD6-129A-8E15-8F349C944783
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accessToken' => 'AccessToken',
        'endpoints'   => 'Endpoints',
        'message'     => 'Message',
        'requestId'   => 'RequestId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['AccessToken'] = $this->accessToken;
        }
        if (null !== $this->endpoints) {
            $res['Endpoints'] = null !== $this->endpoints ? $this->endpoints->toMap() : null;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeGroupEndpointsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessToken'])) {
            $model->accessToken = $map['AccessToken'];
        }
        if (isset($map['Endpoints'])) {
            $model->endpoints = endpoints::fromMap($map['Endpoints']);
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        return $model;
    }
}
