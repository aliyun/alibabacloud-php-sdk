<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeIngressResponseBody\data;

use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @description The protocol used to forward requests. Valid values:
     *
     *   **HTTP**: used when the application needs to identify the transmitted data.
     *   **HTTPS**: used when the application requires encrypted data transmission.
     *
     * @example 395b60e4-0550-458d-9c54-a265d036****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The path of the URL.
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
     * @description The ID of the routing rule.
     *
     * @example 8080
     *
     * @var int
     */
    public $containerPort;

    /**
     * @description The type of the SLB instance based on the processing capabilities. Valid values:
     *
     *   **clb**: the Classic Load Balancer (CLB) instance.
     *   **alb**: the Application Load Balancer (ALB) instance.
     *
     * @example edas.site
     *
     * @var string
     */
    public $domain;

    /**
     * @description The error code.
     *
     *   The **ErrorCode** parameter is not returned when the request succeeds.
     *   The **ErrorCode** parameter is returned when the request fails. For more information, see **Error codes** in this topic.
     *
     * @example /path1
     *
     * @var string
     */
    public $path;

    /**
     * @var string
     */
    public $rewritePath;
    protected $_name = [
        'appId'           => 'AppId',
        'appName'         => 'AppName',
        'backendProtocol' => 'BackendProtocol',
        'containerPort'   => 'ContainerPort',
        'domain'          => 'Domain',
        'path'            => 'Path',
        'rewritePath'     => 'RewritePath',
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
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->rewritePath) {
            $res['RewritePath'] = $this->rewritePath;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return rules
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
        if (isset($map['Domain'])) {
            $model->domain = $map['Domain'];
        }
        if (isset($map['Path'])) {
            $model->path = $map['Path'];
        }
        if (isset($map['RewritePath'])) {
            $model->rewritePath = $map['RewritePath'];
        }

        return $model;
    }
}
