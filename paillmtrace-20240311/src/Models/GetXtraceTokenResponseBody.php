<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\PaiLLMTrace\V20240311\Models;

use AlibabaCloud\Tea\Model;

class GetXtraceTokenResponseBody extends Model
{
    /**
     * @description The internal error code. This parameter is returned only when an error occurs.
     *
     * @example InvalidInputParams
     *
     * @var string
     */
    public $code;

    /**
     * @description The gRPC endpoint used for uploading ARM traces.
     *
     * @example http://tracing-analysis-dc-hz.aliyuncs.com:8090
     *
     * @var string
     */
    public $grpcEndpoint;

    /**
     * @description The internal gRPC endpoint used for uploading ARMS traces used by Alibaba Cloud.
     *
     * @example http://tracing-analysis-dc-hz-internal.aliyuncs.com:8090
     *
     * @var string
     */
    public $grpcInternalEndpoint;

    /**
     * @description The endpoint used for uploading ARMS traces.
     *
     * @example http://tracing-analysis-dc-hz.aliyuncs.com/aaa@bbb@ccc/api/otlp/traces
     *
     * @var string
     */
    public $httpEndpoint;

    /**
     * @description The internal endpoint used for uploading ARMS traces used by Alibaba Cloud.
     *
     * @example http://tracing-analysis-dc-hz-internal.aliyuncs.com/aaa@bbb@ccc/api/otlp/traces
     *
     * @var string
     */
    public $httpInternalEndpoint;

    /**
     * @description The error message. This parameter is returned only when an error occurs.
     *
     * @example get_xtrace_token: failed, ERROR: NoPermission
     *
     * @var string
     */
    public $message;

    /**
     * @description Id of the request
     *
     * @example 6A87228C-969A-1381-98CF-AE07AE630FA5
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The token used for uploading ARMS traces.
     *
     * @example h1abcw7@5abcb_h1abcw7@5abc01
     *
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

    public function validate() {}

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return GetXtraceTokenResponseBody
     */
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
