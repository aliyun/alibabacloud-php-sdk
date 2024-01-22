<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeIngressResponseBody\data;

use AlibabaCloud\Tea\Model;

class defaultRule extends Model
{
    /**
     * @description The domain name of the application.
     *
     * @example 395b60e4-0550-458d-9c54-a265d036****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The container port of the application specified in the forwarding rule.
     *
     * @example app1
     *
     * @var string
     */
    public $appName;

    /**
     * @example HTTP
     *
     * @var string
     */
    public $backendProtocol;

    /**
     * @description The name of the application specified in the forwarding rule.
     *
     * @example 8080
     *
     * @var int
     */
    public $containerPort;
    protected $_name = [
        'appId'           => 'AppId',
        'appName'         => 'AppName',
        'backendProtocol' => 'BackendProtocol',
        'containerPort'   => 'ContainerPort',
    ];

    public function validate()
    {
    }

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
