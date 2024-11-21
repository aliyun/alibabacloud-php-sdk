<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Tea\Model;

class GetEdgeContainerTerminalResponseBody extends Model
{
    /**
     * @description The cluster name.
     *
     * @example c497b44c2a59f4ae0bd2826edc40a2c6e
     *
     * @var string
     */
    public $cluster;

    /**
     * @description The container name.
     *
     * @example worker0
     *
     * @var string
     */
    public $container;

    /**
     * @description The name of the namespace.
     *
     * @example ns1
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The name of the container group.
     *
     * @example 1775b9e0-8463-457e-89e8-fb7b6d125b2e
     *
     * @var string
     */
    public $pod;

    /**
     * @description The request ID.
     *
     * @example 9732E117-8A37-49FD-A36F-ABBB87556CA7
     *
     * @var string
     */
    public $requestId;

    /**
     * @description The session ID.
     *
     * @example af22f4xxxxxxxxxxxxxxxxxx
     *
     * @var string
     */
    public $sessionId;

    /**
     * @description The information about the shared token.
     *
     * @example af22f4-xxxxx-xxxx-xxxx-xxxx
     *
     * @var string
     */
    public $token;
    protected $_name = [
        'cluster'   => 'Cluster',
        'container' => 'Container',
        'namespace' => 'Namespace',
        'pod'       => 'Pod',
        'requestId' => 'RequestId',
        'sessionId' => 'SessionId',
        'token'     => 'Token',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->cluster) {
            $res['Cluster'] = $this->cluster;
        }
        if (null !== $this->container) {
            $res['Container'] = $this->container;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->pod) {
            $res['Pod'] = $this->pod;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->sessionId) {
            $res['SessionId'] = $this->sessionId;
        }
        if (null !== $this->token) {
            $res['Token'] = $this->token;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return GetEdgeContainerTerminalResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Cluster'])) {
            $model->cluster = $map['Cluster'];
        }
        if (isset($map['Container'])) {
            $model->container = $map['Container'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['Pod'])) {
            $model->pod = $map['Pod'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['SessionId'])) {
            $model->sessionId = $map['SessionId'];
        }
        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
