<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\CreateTimingSyntheticTaskRequest\monitorConf;

use AlibabaCloud\Dara\Model;
use AlibabaCloud\SDK\ARMS\V20190808\Models\CreateTimingSyntheticTaskRequest\monitorConf\apiHTTP\requestBody;

class apiHTTP extends Model
{
    /**
     * @var bool
     */
    public $checkCert;
    /**
     * @var int
     */
    public $connectTimeout;
    /**
     * @var string
     */
    public $method;
    /**
     * @var int
     */
    public $protocolAlpnProtocol;
    /**
     * @var requestBody
     */
    public $requestBody;
    /**
     * @var string[]
     */
    public $requestHeaders;
    /**
     * @var string
     */
    public $targetUrl;
    /**
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
        if (null !== $this->requestBody) {
            $this->requestBody->validate();
        }
        if (\is_array($this->requestHeaders)) {
            Model::validateArray($this->requestHeaders);
        }
        parent::validate();
    }

    public function toArray($noStream = false)
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
            $res['RequestBody'] = null !== $this->requestBody ? $this->requestBody->toArray($noStream) : $this->requestBody;
        }

        if (null !== $this->requestHeaders) {
            if (\is_array($this->requestHeaders)) {
                $res['RequestHeaders'] = [];
                foreach ($this->requestHeaders as $key1 => $value1) {
                    $res['RequestHeaders'][$key1] = $value1;
                }
            }
        }

        if (null !== $this->targetUrl) {
            $res['TargetUrl'] = $this->targetUrl;
        }

        if (null !== $this->timeout) {
            $res['Timeout'] = $this->timeout;
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
            if (!empty($map['RequestHeaders'])) {
                $model->requestHeaders = [];
                foreach ($map['RequestHeaders'] as $key1 => $value1) {
                    $model->requestHeaders[$key1] = $value1;
                }
            }
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
