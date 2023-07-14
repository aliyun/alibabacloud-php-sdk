<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models\GetCloudClusterAllUrlResponseBody\data;

use AlibabaCloud\Tea\Model;

class remoteUrl extends Model
{
    /**
     * @description Indicates whether authentication is enabled.
     *
     * @example true
     *
     * @var bool
     */
    public $authToken;

    /**
     * @description The internal URL for Grafana.
     *
     * @example "http://cn-hangzhou-intranet.arms.aliyuncs.com:9090/api/v1/prometheus/XXXXXXXXXXXXXXXXX"
     *
     * @var string
     */
    public $grafanaUrl;

    /**
     * @description The public URL for Grafana.
     *
     * @example "http://cn-hangzhou.arms.aliyuncs.com:9090/api/v1/prometheus/XXXXXXXXXXXXXXXXX"
     *
     * @var string
     */
    public $internetGrafanaUrl;

    /**
     * @description The public URL for Pushgateway.
     *
     * @example "http://cn-hangzhou.arms.aliyuncs.com:9090/api/v1/prometheus/XXXXXXXXXXXXXXXXX"
     *
     * @var string
     */
    public $internetPushGatewayUrl;

    /**
     * @description The public URL for remote read.
     *
     * @example "http://cn-hangzhou.arms.aliyuncs.com:9090/api/v1/prometheus/XXXXXXXXXXXXXXXXX"
     *
     * @var string
     */
    public $internetRemoteReadUrl;

    /**
     * @description The public URL for remote write.
     *
     * @example "http://cn-hangzhou.arms.aliyuncs.com:9090/api/v1/prometheus/XXXXXXXXXXXXXXXXX"
     *
     * @var string
     */
    public $internetRemoteWriteUrl;

    /**
     * @description The internal URL for Pushgateway.
     *
     * @example "http://cn-hangzhou-intranet.arms.aliyuncs.com:9090/api/v1/prometheus/XXXXXXXXXXXXXXXXX"
     *
     * @var string
     */
    public $pushGatewayUrl;

    /**
     * @description The internal URL for remote read.
     *
     * @example "http://cn-hangzhou-intranet.arms.aliyuncs.com:9090/api/v1/prometheus/XXXXXXXXXXXXXXXXX"
     *
     * @var string
     */
    public $remoteReadUrl;

    /**
     * @description The internal URL for remote write.
     *
     * @example "http://cn-hangzhou-intranet.arms.aliyuncs.com:9090/api/v1/prometheus/XXXXXXXXXXXXXXXXX"
     *
     * @var string
     */
    public $remoteWriteUrl;

    /**
     * @description The token value used for authentication.
     *
     * @example "eyJhbGciOiJIUzI1NiJ9.DKEIFJSL.KYK6uOtNVxTVHXJbH5MNqlsAuUtKzNlUvmAIiKc-QXw"
     *
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
    }

    public function toMap()
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

    /**
     * @param array $map
     *
     * @return remoteUrl
     */
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
