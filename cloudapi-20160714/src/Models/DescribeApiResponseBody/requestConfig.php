<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\CloudAPI\V20160714\Models\DescribeApiResponseBody;

use AlibabaCloud\Tea\Model;

class requestConfig extends Model
{
    /**
     * @description The request mode. Valid values: MAPPING and PASSTHROUGH.
     *
     * @example STREAM
     *
     * @var string
     */
    public $bodyFormat;

    /**
     * @description The API request path. If the complete API URL is `http://api.a.com:8080/object/add?key1=value1&key2=value2`, the API request path is ` /object/add  `.
     *
     * @var string
     */
    public $bodyModel;

    /**
     * @description The protocol type supported by the API. Valid values: HTTP and HTTPS. Separate multiple values with commas (,), such as "HTTP,HTTPS".
     *
     * @example fwefwef
     *
     * @var string
     */
    public $postBodyDescription;

    /**
     * @description This parameter takes effect only when the RequestMode parameter is set to MAPPING.********
     *
     * The server data transmission method used for POST and PUT requests. Valid values: FORM and STREAM. FORM indicates that data in key-value pairs is transmitted as forms. STREAM indicates that data is transmitted as byte streams.
     * @example POST
     *
     * @var string
     */
    public $requestHttpMethod;

    /**
     * @description The description of the request body.
     *
     * @example MAPPING
     *
     * @var string
     */
    public $requestMode;

    /**
     * @description The HTTP method used to make the request. Valid values: GET, POST, DELETE, PUT, HEADER, TRACE, PATCH, CONNECT, and OPTIONS.
     *
     * @example /api/billing/test/[type]
     *
     * @var string
     */
    public $requestPath;

    /**
     * @description The configuration items of API requests sent by API Gateway to the backend service.
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
