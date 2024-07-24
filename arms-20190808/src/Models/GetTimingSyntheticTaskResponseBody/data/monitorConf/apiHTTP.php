<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskResponseBody\data\monitorConf;

use AlibabaCloud\SDK\ARMS\V20190808\Models\GetTimingSyntheticTaskResponseBody\data\monitorConf\apiHTTP\requestBody;
use AlibabaCloud\Tea\Model;

class apiHTTP extends Model
{
    /**
     * @description Whether to verify the certificate. The default is no.
     *
     * @example false
     *
     * @var bool
     */
    public $checkCert;

    /**
     * @description The connection timeout period. Unit: milliseconds. Default value: 5000. Minimum value: 1000. Maximum value: 300000.
     *
     * @example 5000
     *
     * @var int
     */
    public $connectTimeout;

    /**
     * @description The request method.
     *
     *   POST
     *   GET
     *
     * @example POST
     *
     * @var string
     */
    public $method;

    /**
     * @description The ALPN protocol version. You can configure this parameter when you perform an HTTPS synthetic test on a WAP mobile client. Valid values:
     *
     * 3: disables the ALPN protocol
     * @example 1
     *
     * @var int
     */
    public $protocolAlpnProtocol;

    /**
     * @description The HTTP request body.
     *
     * @var requestBody
     */
    public $requestBody;

    /**
     * @description The HTTP request header.
     *
     * @var string[]
     */
    public $requestHeaders;

    /**
     * @description The URL for synthetic monitoring.
     *
     * @example http://127.0.0.1:8090/api/list
     *
     * @var string
     */
    public $targetUrl;

    /**
     * @description The timeout period. Unit: milliseconds. Default value: 10000. Minimum value: 1000. Maximum value: 300000.
     *
     * @example 10000
     *
     * @var int
     */
    public $timeout;
    protected $_name = [
        'checkCert'            => 'CheckCert',
        'connectTimeout'       => 'ConnectTimeout',
        'method'               => 'Method',
        'protocolAlpnProtocol' => 'ProtocolAlpnProtocol',
        'requestBody'          => 'RequestBody',
        'requestHeaders'       => 'RequestHeaders',
        'targetUrl'            => 'TargetUrl',
        'timeout'              => 'Timeout',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->checkCert) {
            $res['CheckCert'] = $this->checkCert;
        }
        if (null !== $this->connectTimeout) {
            $res['ConnectTimeout'] = $this->connectTimeout;
        }
        if (null !== $this->method) {
            $res['Method'] = $this->method;
        }
        if (null !== $this->protocolAlpnProtocol) {
            $res['ProtocolAlpnProtocol'] = $this->protocolAlpnProtocol;
        }
        if (null !== $this->requestBody) {
            $res['RequestBody'] = null !== $this->requestBody ? $this->requestBody->toMap() : null;
        }
        if (null !== $this->requestHeaders) {
            $res['RequestHeaders'] = $this->requestHeaders;
        }
        if (null !== $this->targetUrl) {
            $res['TargetUrl'] = $this->targetUrl;
        }
        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return apiHTTP
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CheckCert'])) {
            $model->checkCert = $map['CheckCert'];
        }
        if (isset($map['ConnectTimeout'])) {
            $model->connectTimeout = $map['ConnectTimeout'];
        }
        if (isset($map['Method'])) {
            $model->method = $map['Method'];
        }
        if (isset($map['ProtocolAlpnProtocol'])) {
            $model->protocolAlpnProtocol = $map['ProtocolAlpnProtocol'];
        }
        if (isset($map['RequestBody'])) {
            $model->requestBody = requestBody::fromMap($map['RequestBody']);
        }
        if (isset($map['RequestHeaders'])) {
            $model->requestHeaders = $map['RequestHeaders'];
        }
        if (isset($map['TargetUrl'])) {
            $model->targetUrl = $map['TargetUrl'];
        }
        if (isset($map['Timeout'])) {
            $model->timeout = $map['Timeout'];
        }

        return $model;
    }
}
