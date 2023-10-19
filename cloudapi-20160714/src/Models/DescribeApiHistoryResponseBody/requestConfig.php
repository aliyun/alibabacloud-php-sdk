<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiHistoryResponseBody;

use AlibabaCloud\Tea\Model;

class requestConfig extends Model
{
    /**
     * @description The server data transmission method used for POST and PUT requests. Valid values: FORM and STREAM. FORM indicates that data in key-value pairs is transmitted as forms. STREAM indicates that data is transmitted as byte streams. This parameter takes effect only when the RequestMode parameter is set to MAPPING.
     *
     * @example STREAM
     *
     * @var string
     */
    public $bodyFormat;

    /**
     * @description The body model.
     *
     * @var string
     */
    public $bodyModel;

    /**
     * @description The description of the request body.
     *
     * @example fwefwef
     *
     * @var string
     */
    public $postBodyDescription;

    /**
     * @description The HTTP method. Valid values: GET, POST, DELETE, PUT, HEADER, TRACE, PATCH, CONNECT, and OPTIONS.
     *
     * @example POST
     *
     * @var string
     */
    public $requestHttpMethod;

    /**
     * @description The request mode. Valid values:
     *
     *   MAPPING: Parameters are mapped. Unknown parameters are filtered out.
     *   PASSTHROUGH: Parameters are passed through.
     *   MAPPING_PASSTHROUGH: Parameters are mapped. Unknown parameters are passed through.
     *
     * @example MAPPING
     *
     * @var string
     */
    public $requestMode;

    /**
     * @description API path
     *
     * @example /api/billing/test/[type]
     *
     * @var string
     */
    public $requestPath;

    /**
     * @description The protocol type supported by the API. Valid values: HTTP, HTTPS, and WebSocket. Separate multiple values with commas (,), such as "HTTP,HTTPS".
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
