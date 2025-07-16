<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceEndpointsResponseBody\endpoints;
use AlibabaCloud\Tea\Model;

class DescribeServiceEndpointsResponseBody extends Model
{
    /**
     * @description The service token.
     *
     * @example Nzc5N2FhN****TQ0YzBmYTIyN2MxZTUxN2NkYjg4MTJmMWQxZmY1****
     *
     * @var string
     */
    public $accessToken;

    /**
     * @description The service endpoints.
     *
     * @var endpoints[]
     */
    public $endpoints;

    /**
     * @description The returned message.
     *
     * @example Execution successful.
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example 739998B5-FB39-12A3-8323-0FA340317298
     *
     * @var string
     */
    public $requestId;
    protected $_name = [
        'accessToken' => 'AccessToken',
        'endpoints' => 'Endpoints',
        'message' => 'Message',
        'requestId' => 'RequestId',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['AccessToken'] = $this->accessToken;
        }
        if (null !== $this->endpoints) {
            $res['Endpoints'] = [];
            if (null !== $this->endpoints && \is_array($this->endpoints)) {
                $n = 0;
                foreach ($this->endpoints as $item) {
                    $res['Endpoints'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
     * @return DescribeServiceEndpointsResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AccessToken'])) {
            $model->accessToken = $map['AccessToken'];
        }
        if (isset($map['Endpoints'])) {
            if (!empty($map['Endpoints'])) {
                $model->endpoints = [];
                $n = 0;
                foreach ($map['Endpoints'] as $item) {
                    $model->endpoints[$n++] = null !== $item ? endpoints::fromMap($item) : $item;
                }
            }
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
