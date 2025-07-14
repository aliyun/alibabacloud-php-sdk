<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeIngressResponseBody\data;

use AlibabaCloud\Tea\Model;

class defaultRule extends Model
{
    /**
     * @description The ID of the application that is specified in the default rule.
     *
     * @example 395b60e4-0550-458d-9c54-a265d036****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The name of the application that is specified in the default rule.
     *
     * @example app1
     *
     * @var string
     */
    public $appName;

    /**
     * @description The backend protocol. Valid values:
     *
     *   **http**: HTTP is suitable for applications that need to identify the transmitted data.
     *   **https**: HTTP is suitable for applications that require encrypted data transmission.
     *   **grpc**: GRPC is suitable for load balancing scenarios in which you want to deploy services in multi-language frameworks, such as the .NET framework.
     *
     * This parameter is returned only if the**LoadBalanceType** parameter is set to **ALB** and the **ListenerProtocol** parameter **is set to HTTPS**.
     *
     * @example HTTP
     *
     * @var string
     */
    public $backendProtocol;

    /**
     * @description The container port of the application that is specified in the default rule.
     *
     * @example 8080
     *
     * @var int
     */
    public $containerPort;
    protected $_name = [
        'appId' => 'AppId',
        'appName' => 'AppName',
        'backendProtocol' => 'BackendProtocol',
        'containerPort' => 'ContainerPort',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->appId) {
            $res['AppId'] = $this->appId;
        }
        if (null !== $this->appName) {
            $res['AppName'] = $this->appName;
        }
        if (null !== $this->backendProtocol) {
            $res['BackendProtocol'] = $this->backendProtocol;
        }
        if (null !== $this->containerPort) {
            $res['ContainerPort'] = $this->containerPort;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return defaultRule
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AppId'])) {
            $model->appId = $map['AppId'];
        }
        if (isset($map['AppName'])) {
            $model->appName = $map['AppName'];
        }
        if (isset($map['BackendProtocol'])) {
            $model->backendProtocol = $map['BackendProtocol'];
        }
        if (isset($map['ContainerPort'])) {
            $model->containerPort = $map['ContainerPort'];
        }

        return $model;
    }
}
