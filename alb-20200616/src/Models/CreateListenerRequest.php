<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Alb\V20200616\Models;

use AlibabaCloud\SDK\Alb\V20200616\Models\CreateListenerRequest\caCertificates;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateListenerRequest\certificates;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateListenerRequest\defaultActions;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateListenerRequest\quicConfig;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateListenerRequest\tag;
use AlibabaCloud\SDK\Alb\V20200616\Models\CreateListenerRequest\XForwardedForConfig;
use AlibabaCloud\Tea\Model;

class CreateListenerRequest extends Model
{
    /**
     * @description A list of certificates.
     *
     * @var caCertificates[]
     */
    public $caCertificates;

    /**
     * @description Specifies whether to enable mutual authentication. Valid values:
     *
     *   **true**
     *   **false** (default):
     *
     * @example false
     *
     * @var bool
     */
    public $caEnabled;

    /**
     * @description A list of certificates.
     *
     * @var certificates[]
     */
    public $certificates;

    /**
     * @description The client token that is used to ensure the idempotence of the request.
     *
     * You can use the client to generate the token, but you must make sure that the token is unique among different requests. The token can contain only ASCII characters.
     *
     * > If you do not specify this parameter, the system automatically uses the **request ID** as the **client token**. The **request ID** may be different for each request.
     * @example 123e4567-e89b-12d3-a456-426655440000
     *
     * @var string
     */
    public $clientToken;

    /**
     * @description The actions of the forwarding rule.
     *
     * @var defaultActions[]
     */
    public $defaultActions;

    /**
     * @description Specifies whether to perform only a dry run, without performing the actual request. Valid values:
     *
     *   **true**: performs only a dry run. The system checks the request for potential issues, including missing parameter values, incorrect request syntax, and service limits. If the request fails the dry run, an error code is returned. If the request passes the dry run, the `DryRunOperation` error code is returned.
     *   **false** (default): performs a dry run and performs the actual request. If the request passes the dry run, a 2xx HTTP status code is returned and the operation is performed.
     *
     * @example false
     *
     * @var bool
     */
    public $dryRun;

    /**
     * @description Specifies whether to enable `GZIP` compression to compress specific types of files. Valid values:
     *
     *   **true** (default)
     *   **false**
     *
     * @example true
     *
     * @var bool
     */
    public $gzipEnabled;

    /**
     * @description Specifies whether to enable `HTTP/2`. Valid values:
     *
     *   **true** (default)
     *   **false**
     *
     * > This parameter is available only when you create an HTTPS listener.
     * @example true
     *
     * @var bool
     */
    public $http2Enabled;

    /**
     * @description The timeout period of an idle connection. Unit: seconds.
     *
     * Valid values: **1 to 60**.
     *
     * Default value: **15**.
     *
     * If no requests are received within the specified timeout period, ALB closes the current connection. When a new request is received, ALB establishes a new connection.
     * @example 3
     *
     * @var int
     */
    public $idleTimeout;

    /**
     * @description The name of the listener.
     *
     * The description must be 2 to 256 characters in length, and can contain letters, digits, hyphens (-), forward slashes (/), periods (.), and underscores (\_). Regular expressions are supported.
     * @example HTTP_80
     *
     * @var string
     */
    public $listenerDescription;

    /**
     * @description The frontend port that is used by the ALB instance.
     *
     * Valid values: **1 to 65535**.
     * @example 80
     *
     * @var int
     */
    public $listenerPort;

    /**
     * @description The listener protocol.
     *
     * Valid values: **HTTP**, **HTTPS**, and **QUIC**.
     * @example HTTP
     *
     * @var string
     */
    public $listenerProtocol;

    /**
     * @description The ALB instance ID.
     *
     * @example lb-bp1o94dp5i6ea****
     *
     * @var string
     */
    public $loadBalancerId;

    /**
     * @description Selects a QUIC listener and associates it with the HTTPS listener of the ALB instance.
     *
     * @var quicConfig
     */
    public $quicConfig;

    /**
     * @description The timeout period of a request. Unit: seconds.
     *
     * Valid values: **1 to 180**.
     *
     * Default value: **60**.
     *
     * If no response is received from the backend server during the request timeout period, ALB sends an `HTTP 504` error code to the client.
     * @example 60
     *
     * @var int
     */
    public $requestTimeout;

    /**
     * @description The ID of the security policy. System and custom security policies are supported.
     *
     * Default value: **tls_cipher_policy\_1\_0** (system security policy).
     *
     * > This parameter is available only when you create an HTTPS listener.
     * @example tls_cipher_policy_1_0
     *
     * @var string
     */
    public $securityPolicyId;

    /**
     * @var tag[]
     */
    public $tag;

    /**
     * @description The configuration of the XForward header.
     *
     * @var XForwardedForConfig
     */
    public $XForwardedForConfig;
    protected $_name = [
        'caCertificates'      => 'CaCertificates',
        'caEnabled'           => 'CaEnabled',
        'certificates'        => 'Certificates',
        'clientToken'         => 'ClientToken',
        'defaultActions'      => 'DefaultActions',
        'dryRun'              => 'DryRun',
        'gzipEnabled'         => 'GzipEnabled',
        'http2Enabled'        => 'Http2Enabled',
        'idleTimeout'         => 'IdleTimeout',
        'listenerDescription' => 'ListenerDescription',
        'listenerPort'        => 'ListenerPort',
        'listenerProtocol'    => 'ListenerProtocol',
        'loadBalancerId'      => 'LoadBalancerId',
        'quicConfig'          => 'QuicConfig',
        'requestTimeout'      => 'RequestTimeout',
        'securityPolicyId'    => 'SecurityPolicyId',
        'tag'                 => 'Tag',
        'XForwardedForConfig' => 'XForwardedForConfig',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->caCertificates) {
            $res['CaCertificates'] = [];
            if (null !== $this->caCertificates && \is_array($this->caCertificates)) {
                $n = 0;
                foreach ($this->caCertificates as $item) {
                    $res['CaCertificates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->caEnabled) {
            $res['CaEnabled'] = $this->caEnabled;
        }
        if (null !== $this->certificates) {
            $res['Certificates'] = [];
            if (null !== $this->certificates && \is_array($this->certificates)) {
                $n = 0;
                foreach ($this->certificates as $item) {
                    $res['Certificates'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->clientToken) {
            $res['ClientToken'] = $this->clientToken;
        }
        if (null !== $this->defaultActions) {
            $res['DefaultActions'] = [];
            if (null !== $this->defaultActions && \is_array($this->defaultActions)) {
                $n = 0;
                foreach ($this->defaultActions as $item) {
                    $res['DefaultActions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->dryRun) {
            $res['DryRun'] = $this->dryRun;
        }
        if (null !== $this->gzipEnabled) {
            $res['GzipEnabled'] = $this->gzipEnabled;
        }
        if (null !== $this->http2Enabled) {
            $res['Http2Enabled'] = $this->http2Enabled;
        }
        if (null !== $this->idleTimeout) {
            $res['IdleTimeout'] = $this->idleTimeout;
        }
        if (null !== $this->listenerDescription) {
            $res['ListenerDescription'] = $this->listenerDescription;
        }
        if (null !== $this->listenerPort) {
            $res['ListenerPort'] = $this->listenerPort;
        }
        if (null !== $this->listenerProtocol) {
            $res['ListenerProtocol'] = $this->listenerProtocol;
        }
        if (null !== $this->loadBalancerId) {
            $res['LoadBalancerId'] = $this->loadBalancerId;
        }
        if (null !== $this->quicConfig) {
            $res['QuicConfig'] = null !== $this->quicConfig ? $this->quicConfig->toMap() : null;
        }
        if (null !== $this->requestTimeout) {
            $res['RequestTimeout'] = $this->requestTimeout;
        }
        if (null !== $this->securityPolicyId) {
            $res['SecurityPolicyId'] = $this->securityPolicyId;
        }
        if (null !== $this->tag) {
            $res['Tag'] = [];
            if (null !== $this->tag && \is_array($this->tag)) {
                $n = 0;
                foreach ($this->tag as $item) {
                    $res['Tag'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->XForwardedForConfig) {
            $res['XForwardedForConfig'] = null !== $this->XForwardedForConfig ? $this->XForwardedForConfig->toMap() : null;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateListenerRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['CaCertificates'])) {
            if (!empty($map['CaCertificates'])) {
                $model->caCertificates = [];
                $n                     = 0;
                foreach ($map['CaCertificates'] as $item) {
                    $model->caCertificates[$n++] = null !== $item ? caCertificates::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['CaEnabled'])) {
            $model->caEnabled = $map['CaEnabled'];
        }
        if (isset($map['Certificates'])) {
            if (!empty($map['Certificates'])) {
                $model->certificates = [];
                $n                   = 0;
                foreach ($map['Certificates'] as $item) {
                    $model->certificates[$n++] = null !== $item ? certificates::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['ClientToken'])) {
            $model->clientToken = $map['ClientToken'];
        }
        if (isset($map['DefaultActions'])) {
            if (!empty($map['DefaultActions'])) {
                $model->defaultActions = [];
                $n                     = 0;
                foreach ($map['DefaultActions'] as $item) {
                    $model->defaultActions[$n++] = null !== $item ? defaultActions::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['DryRun'])) {
            $model->dryRun = $map['DryRun'];
        }
        if (isset($map['GzipEnabled'])) {
            $model->gzipEnabled = $map['GzipEnabled'];
        }
        if (isset($map['Http2Enabled'])) {
            $model->http2Enabled = $map['Http2Enabled'];
        }
        if (isset($map['IdleTimeout'])) {
            $model->idleTimeout = $map['IdleTimeout'];
        }
        if (isset($map['ListenerDescription'])) {
            $model->listenerDescription = $map['ListenerDescription'];
        }
        if (isset($map['ListenerPort'])) {
            $model->listenerPort = $map['ListenerPort'];
        }
        if (isset($map['ListenerProtocol'])) {
            $model->listenerProtocol = $map['ListenerProtocol'];
        }
        if (isset($map['LoadBalancerId'])) {
            $model->loadBalancerId = $map['LoadBalancerId'];
        }
        if (isset($map['QuicConfig'])) {
            $model->quicConfig = quicConfig::fromMap($map['QuicConfig']);
        }
        if (isset($map['RequestTimeout'])) {
            $model->requestTimeout = $map['RequestTimeout'];
        }
        if (isset($map['SecurityPolicyId'])) {
            $model->securityPolicyId = $map['SecurityPolicyId'];
        }
        if (isset($map['Tag'])) {
            if (!empty($map['Tag'])) {
                $model->tag = [];
                $n          = 0;
                foreach ($map['Tag'] as $item) {
                    $model->tag[$n++] = null !== $item ? tag::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['XForwardedForConfig'])) {
            $model->XForwardedForConfig = XForwardedForConfig::fromMap($map['XForwardedForConfig']);
        }

        return $model;
    }
}
