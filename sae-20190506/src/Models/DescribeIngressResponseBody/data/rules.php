<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Sae\V20190506\Models\DescribeIngressResponseBody\data;

use AlibabaCloud\SDK\Sae\V20190506\Models\DescribeIngressResponseBody\data\rules\ruleActions;
use AlibabaCloud\Tea\Model;

class rules extends Model
{
    /**
     * @description The ID of the application specified in the forwarding rule.
     *
     * @example 395b60e4-0550-458d-9c54-a265d036****
     *
     * @var string
     */
    public $appId;

    /**
     * @description The name of the application specified in the forwarding rules.
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
     *   **https**: HTTPS is suitable for applications that require encrypted data transmission.
     *   **grpc**: GRPC is suitable for load balancing scenarios in which you want to deploy services in multi-language frameworks, such as the .NET framework.
     *
     * This parameter is returned only if the **LoadBalanceType** parameter is set to **ALB** and the **ListenerProtocol** parameter is set to **HTTPS**.
     *
     * @example HTTP
     *
     * @var string
     */
    public $backendProtocol;

    /**
     * @description Tthe container port of the application specified in the forwarding rules.
     *
     * @example 8080
     *
     * @var int
     */
    public $containerPort;

    /**
     * @description The domain name of the application specified in the forwarding rules.
     *
     * @example edas.site
     *
     * @var string
     */
    public $domain;

    /**
     * @description The path of a URL.
     *
     * @example /path1
     *
     * @var string
     */
    public $path;

    /**
     * @description The path that is used to rewrite the original path.
     *
     * @example /${1}
     *
     * @var string
     */
    public $rewritePath;

    /**
     * @var ruleActions[]
     */
    public $ruleActions;
    protected $_name = [
        'appId' => 'AppId',
        'appName' => 'AppName',
        'backendProtocol' => 'BackendProtocol',
        'containerPort' => 'ContainerPort',
        'domain' => 'Domain',
        'path' => 'Path',
        'rewritePath' => 'RewritePath',
        'ruleActions' => 'RuleActions',
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
        if (null !== $this->domain) {
            $res['Domain'] = $this->domain;
        }
        if (null !== $this->path) {
            $res['Path'] = $this->path;
        }
        if (null !== $this->rewritePath) {
            $res['RewritePath'] = $this->rewritePath;
        }
        if (null !== $this->ruleActions) {
            $res['RuleActions'] = [];
            if (null !== $this->ruleActions && \is_array($this->ruleActions)) {
                $n = 0;
                foreach ($this->ruleActions as $item) {
                    $res['RuleActions'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
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
        if (isset($map['RuleActions'])) {
            if (!empty($map['RuleActions'])) {
                $model->ruleActions = [];
                $n = 0;
                foreach ($map['RuleActions'] as $item) {
                    $model->ruleActions[$n++] = null !== $item ? ruleActions::fromMap($item) : $item;
                }
            }
        }

        return $model;
    }
}
