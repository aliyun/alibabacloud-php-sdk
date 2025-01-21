<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Eas\V20210701\Models;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\Eas\V20210701\Models\DescribeServiceEndpointsResponseBody\endpoints;

class DescribeServiceEndpointsResponseBody extends Model
{
    /**
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
        if (null !== $this->endpoints) {
            $this->endpoints->validate();
        }
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->accessToken) {
            $res['AccessToken'] = $this->accessToken;
        }

        if (null !== $this->endpoints) {
            $res['Endpoints'] = null !== $this->endpoints ? $this->endpoints->toArray($noStream) : $this->endpoints;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
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
