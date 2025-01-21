<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetCloudClusterAllUrlResponseBody\data;

use AlibabaCloud\Dara\Model;

class remoteUrl extends Model
{
    /**
     * @var bool
     */
    public $authToken;
    /**
     * @var string
     */
    public $grafanaUrl;
    /**
     * @var string
     */
    public $internetGrafanaUrl;
    /**
     * @var string
     */
    public $internetPushGatewayUrl;
    /**
     * @var string
     */
    public $internetRemoteReadUrl;
    /**
     * @var string
     */
    public $internetRemoteWriteUrl;
    /**
     * @var string
     */
    public $pushGatewayUrl;
    /**
     * @var string
     */
    public $remoteReadUrl;
    /**
     * @var string
     */
    public $remoteWriteUrl;
    /**
     * @var string
     */
    public $token;
    protected $_name = [
        'authToken'              => 'AuthToken',
        'grafanaUrl'             => 'GrafanaUrl',
        'internetGrafanaUrl'     => 'InternetGrafanaUrl',
        'internetPushGatewayUrl' => 'InternetPushGatewayUrl',
        'internetRemoteReadUrl'  => 'InternetRemoteReadUrl',
        'internetRemoteWriteUrl' => 'InternetRemoteWriteUrl',
        'pushGatewayUrl'         => 'PushGatewayUrl',
        'remoteReadUrl'          => 'RemoteReadUrl',
        'remoteWriteUrl'         => 'RemoteWriteUrl',
        'token'                  => 'Token',
    ];

    public function validate()
    {
        parent::validate();
    }

    public function toArray($noStream = false)
    {
        $res = [];
        if (null !== $this->authToken) {
            $res['AuthToken'] = $this->authToken;
        }

        if (null !== $this->grafanaUrl) {
            $res['GrafanaUrl'] = $this->grafanaUrl;
        }

        if (null !== $this->internetGrafanaUrl) {
            $res['InternetGrafanaUrl'] = $this->internetGrafanaUrl;
        }

        if (null !== $this->internetPushGatewayUrl) {
            $res['InternetPushGatewayUrl'] = $this->internetPushGatewayUrl;
        }

        if (null !== $this->internetRemoteReadUrl) {
            $res['InternetRemoteReadUrl'] = $this->internetRemoteReadUrl;
        }

        if (null !== $this->internetRemoteWriteUrl) {
            $res['InternetRemoteWriteUrl'] = $this->internetRemoteWriteUrl;
        }

        if (null !== $this->pushGatewayUrl) {
            $res['PushGatewayUrl'] = $this->pushGatewayUrl;
        }

        if (null !== $this->remoteReadUrl) {
            $res['RemoteReadUrl'] = $this->remoteReadUrl;
        }

        if (null !== $this->remoteWriteUrl) {
            $res['RemoteWriteUrl'] = $this->remoteWriteUrl;
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
        if (isset($map['AuthToken'])) {
            $model->authToken = $map['AuthToken'];
        }

        if (isset($map['GrafanaUrl'])) {
            $model->grafanaUrl = $map['GrafanaUrl'];
        }

        if (isset($map['InternetGrafanaUrl'])) {
            $model->internetGrafanaUrl = $map['InternetGrafanaUrl'];
        }

        if (isset($map['InternetPushGatewayUrl'])) {
            $model->internetPushGatewayUrl = $map['InternetPushGatewayUrl'];
        }

        if (isset($map['InternetRemoteReadUrl'])) {
            $model->internetRemoteReadUrl = $map['InternetRemoteReadUrl'];
        }

        if (isset($map['InternetRemoteWriteUrl'])) {
            $model->internetRemoteWriteUrl = $map['InternetRemoteWriteUrl'];
        }

        if (isset($map['PushGatewayUrl'])) {
            $model->pushGatewayUrl = $map['PushGatewayUrl'];
        }

        if (isset($map['RemoteReadUrl'])) {
            $model->remoteReadUrl = $map['RemoteReadUrl'];
        }

        if (isset($map['RemoteWriteUrl'])) {
            $model->remoteWriteUrl = $map['RemoteWriteUrl'];
        }

        if (isset($map['Token'])) {
            $model->token = $map['Token'];
        }

        return $model;
    }
}
