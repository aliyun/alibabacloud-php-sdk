<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\ARMS\V20190808\Models;

use AlibabaCloud\Tea\Model;

class AddPrometheusInstanceResponseBody extends Model
{
    /**
     * @description The HTTP status code. The status code 200 indicates that the request was successful.
     *
     * @example 200
     *
     * @var int
     */
    public $code;

    /**
     * @description The struct returned. { "RequestId": the request ID, "Data": "{ "clusterType": the cluster type, "remoteWriteUrl": the public URL for remote write, "internetGrafanaUrl": the internal URL for Grafana, "authToken": indicates whether authentication is enabled, "internetPushGatewayUrl": the internal URL for Pushgateway, "clusterId": the cluster ID, "internetRemoteReadUrl": the internal URL for remote read, "remoteReadUrl": the public URL for remote read, "grafanaUrl": the public URL for Grafana, "pushGatewayUrl": the public URL for Pushgateway, "internetRemoteWriteUrl": the internal URL for remote write}" }
     *
     * @example {
     * "RequestId": "1293091C-54AD-50FE-B787-E314B94B35AB",
     * "Data": "{
     * "clusterType":"remote-write-prometheus",
     * "remoteWriteUrl":"http://cn-hu/api/v3/write",
     * "internetGrafanaUrl":"https://cn-hanga/cn-hangzhou",
     * "authToken":false,
     * "internetPushGatewayUrl":"https://cangzhou/api/v2",
     * "clusterId":"vrju1lj3sa|123456",
     * "internetRemoteReadUrl":"https://cn-hangzh67cn-hangzhou/api/v1/read",
     * "remoteReadUrl":"http://cn-hanou/api/v1/read",
     * "grafanaUrl":"http://cn-angzhou",
     * "pushGatewayUrl":"htt1lj3sa/cn-hangzhou/api/v2",
     * "internetRemoteWriteUrl":"httpsngzhou/api/v3/write"}"
     * }
     *
     * @var string
     */
    public $data;

    /**
     * @description The message returned.
     *
     * @example success
     *
     * @var string
     */
    public $message;

    /**
     * @description The request ID.
     *
     * @example 9319A57D-2D9E-472A-B69B-CF3CD16D****
     *
     * @var string
     */
    public $requestId;

    /**
     * @description Indicates whether the request was successful.
     *
     * @example true
     *
     * @var bool
     */
    public $success;
    protected $_name = [
        'code' => 'Code',
        'data' => 'Data',
        'message' => 'Message',
        'requestId' => 'RequestId',
        'success' => 'Success',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->code) {
            $res['Code'] = $this->code;
        }
        if (null !== $this->data) {
            $res['Data'] = $this->data;
        }
        if (null !== $this->message) {
            $res['Message'] = $this->message;
        }
        if (null !== $this->requestId) {
            $res['RequestId'] = $this->requestId;
        }
        if (null !== $this->success) {
            $res['Success'] = $this->success;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return AddPrometheusInstanceResponseBody
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Code'])) {
            $model->code = $map['Code'];
        }
        if (isset($map['Data'])) {
            $model->data = $map['Data'];
        }
        if (isset($map['Message'])) {
            $model->message = $map['Message'];
        }
        if (isset($map['RequestId'])) {
            $model->requestId = $map['RequestId'];
        }
        if (isset($map['Success'])) {
            $model->success = $map['Success'];
        }

        return $model;
    }
}
