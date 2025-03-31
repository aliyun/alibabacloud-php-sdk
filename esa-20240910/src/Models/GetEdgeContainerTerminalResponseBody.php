<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ESA\V20240910\Models;

use AlibabaCloud\Dara\Model;

class GetEdgeContainerTerminalResponseBody extends Model
{
    /**
     * @var string
     */
    public $cluster;

    /**
     * @var string
     */
    public $container;

    /**
     * @var string
     */
    public $namespace;

    /**
     * @var string
     */
    public $pod;

    /**
     * @var string
     */
    public $requestId;

    /**
     * @var string
     */
    public $sessionId;

    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'cluster' => 'Cluster',
        'container' => 'Container',
        'namespace' => 'Namespace',
        'pod' => 'Pod',
        'requestId' => 'RequestId',
        'sessionId' => 'SessionId',
        'token' => 'Token',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
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

    public function toMap($noStream = false)
    {
        return $this->toArray($noStream);
    }

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
