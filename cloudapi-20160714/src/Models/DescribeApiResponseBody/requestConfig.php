<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody;

use AlibabaCloud\Tea\Model;

class requestConfig extends Model
{
    /**
     * @description The JSON Schema used for JSON validation when **ParameterType** is set to String.
     *
     * @example STREAM
     *
     * @var string
     */
    public $bodyFormat;

    /**
     * @description The minimum parameter length when **ParameterType** is set to String.
     *
     * @var string
     */
    public $bodyModel;

    /**
     * @description The format of the response from the backend service. Valid values: JSON, TEXT, BINARY, XML, and HTML.
     *
     * @example fwefwef
     *
     * @var string
     */
    public $postBodyDescription;

    /**
     * @description The type of a request parameter. Valid values: String, Int, Long, Float, Double, and Boolean.
     *
     * @example POST
     *
     * @var string
     */
    public $requestHttpMethod;

    /**
     * @description The name of the API group.
     *
     * @example MAPPING
     *
     * @var string
     */
    public $requestMode;

    /**
     * @description The name of the system parameter. Valid values: CaClientIp, CaDomain, CaRequestHandleTime, CaAppId, CaRequestId, CaHttpSchema, and CaProxy.
     *
     * @example /api/billing/test/[type]
     *
     * @var string
     */
    public $requestPath;

    /**
     * @description Examples
     *
     * @example HTTP
     *
     * @var string
     */
    public $requestProtocol;
    protected $_name = [
        'bodyFormat'          => 'BodyFormat',
        'bodyModel'           => 'BodyModel',
        'postBodyDescription' => 'PostBodyDescription',
        'requestHttpMethod'   => 'RequestHttpMethod',
        'requestMode'         => 'RequestMode',
        'requestPath'         => 'RequestPath',
        'requestProtocol'     => 'RequestProtocol',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->bodyFormat) {
            $res['BodyFormat'] = $this->bodyFormat;
        }
        if (null !== $this->bodyModel) {
            $res['BodyModel'] = $this->bodyModel;
        }
        if (null !== $this->postBodyDescription) {
            $res['PostBodyDescription'] = $this->postBodyDescription;
        }
        if (null !== $this->requestHttpMethod) {
            $res['RequestHttpMethod'] = $this->requestHttpMethod;
        }
        if (null !== $this->requestMode) {
            $res['RequestMode'] = $this->requestMode;
        }
        if (null !== $this->requestPath) {
            $res['RequestPath'] = $this->requestPath;
        }
        if (null !== $this->requestProtocol) {
            $res['RequestProtocol'] = $this->requestProtocol;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return requestConfig
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['BodyFormat'])) {
            $model->bodyFormat = $map['BodyFormat'];
        }
        if (isset($map['BodyModel'])) {
            $model->bodyModel = $map['BodyModel'];
        }
        if (isset($map['PostBodyDescription'])) {
            $model->postBodyDescription = $map['PostBodyDescription'];
        }
        if (isset($map['RequestHttpMethod'])) {
            $model->requestHttpMethod = $map['RequestHttpMethod'];
        }
        if (isset($map['RequestMode'])) {
            $model->requestMode = $map['RequestMode'];
        }
        if (isset($map['RequestPath'])) {
            $model->requestPath = $map['RequestPath'];
        }
        if (isset($map['RequestProtocol'])) {
            $model->requestProtocol = $map['RequestProtocol'];
        }

        return $model;
    }
}
