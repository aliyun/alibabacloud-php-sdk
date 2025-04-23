<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models;

use AlibabaCloud\Dara\Model;

class GetXtraceTokenResponseBody extends Model
{
    /**
     * @var string
     */
    public $code;

    /**
     * @var string
     */
    public $grpcEndpoint;

    /**
     * @var string
     */
    public $grpcInternalEndpoint;

    /**
     * @var string
     */
    public $httpEndpoint;

    /**
     * @var string
     */
    public $httpInternalEndpoint;

    /**
     * @var string
     */
    public $message;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'code' => 'Code',
        'grpcEndpoint' => 'GrpcEndpoint',
        'grpcInternalEndpoint' => 'GrpcInternalEndpoint',
        'httpEndpoint' => 'HttpEndpoint',
        'httpInternalEndpoint' => 'HttpInternalEndpoint',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'token' => 'Token',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }

        if (null !== $this->grpcEndpoint) {
            $res['GrpcEndpoint'] = $this->grpcEndpoint;
        }

        if (null !== $this->grpcInternalEndpoint) {
            $res['GrpcInternalEndpoint'] = $this->grpcInternalEndpoint;
        }

        if (null !== $this->httpEndpoint) {
            $res['HttpEndpoint'] = $this->httpEndpoint;
        }

        if (null !== $this->httpInternalEndpoint) {
            $res['HttpInternalEndpoint'] = $this->httpInternalEndpoint;
        }

        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }

        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }

        if (null !== $this->token) {
            $res['Token'] = $this->token;
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
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }

        if (isset($map['GrpcEndpoint'])) {
            $model->grpcEndpoint = $map['GrpcEndpoint'];
        }

        if (isset($map['GrpcInternalEndpoint'])) {
            $model->grpcInternalEndpoint = $map['GrpcInternalEndpoint'];
        }

        if (isset($map['HttpEndpoint'])) {
            $model->httpEndpoint = $map['HttpEndpoint'];
        }

        if (isset($map['HttpInternalEndpoint'])) {
            $model->httpInternalEndpoint = $map['HttpInternalEndpoint'];
        }

        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }

        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }

        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
