<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sIngressRulesResponseBody\data;

use AlibabaCloud\SDK\Edas\V20170801\Models\ListK8sIngressRulesResponseBody\data\ingressConfs\rules;
use AlibabaCloud\Tea\Model;

class ingressConfs extends Model
{
    /**
     * @description The ID of the Application Load Balancer (ALB) instance.
     *
     * @example alb-5sde0tq62r********
     *
     * @var string
     */
    public $albId;

    /**
     * @description The annotations.
     *
     * @example {"test-annotation":"test-annotation-value"}
     *
     * @var string
     */
    public $annotations;

    /**
     * @description The time when the Ingress was created.
     *
     * @example 2021-04-27 20:16:52
     *
     * @var string
     */
    public $creationTime;

    /**
     * @description The monitoring URL of the Ingress.
     *
     * @example http://grafana.console.aliyun.com/d/10xxxx/ingress
     *
     * @var string
     */
    public $dashboardUrl;

    /**
     * @description The IP address of the Ingress.
     *
     * @example 47.11x.xx.xx
     *
     * @var string
     */
    public $endpoint;

    /**
     * @description The type of the Ingress. Valid values:
     *
     *   **NginxIngress**: NGINX Ingress controller
     *   **AlbIngress**: ALB Ingress controller
     *
     * Default value: NginxIngress.
     * @example NginxIngress
     *
     * @var string
     */
    public $ingressType;

    /**
     * @description The labels.
     *
     * @example {"test-label": "test-labels"}
     *
     * @var string
     */
    public $labels;

    /**
     * @description The ID of the Microservices Engine (MSE) gateway.
     *
     * @example gw-xxxxxxxx
     *
     * @var string
     */
    public $mseGatewayId;

    /**
     * @description The name of the MSE gateway.
     *
     * @example gw-test-name
     *
     * @var string
     */
    public $mseGatewayName;

    /**
     * @description The name of the Ingress.
     *
     * @example my-ingress
     *
     * @var string
     */
    public $name;

    /**
     * @description The Kubernetes namespace to which the Ingress belongs.
     *
     * @example default
     *
     * @var string
     */
    public $namespace;

    /**
     * @description The URL used for basic monitoring of the open source version.
     *
     * @example https://g.console.aliyun.com/d/xxxxxx/nginx-ingress-dashboard-official
     *
     * @var string
     */
    public $officalBasicUrl;

    /**
     * @description The URL used for request performance monitoring of the open source version.
     *
     * @example https://g.console.aliyun.com/d/xxxxxx/request-handling-performance-official
     *
     * @var string
     */
    public $officalRequestUrl;

    /**
     * @description The list of routing rules.
     *
     * @var rules[]
     */
    public $rules;

    /**
     * @description Indicates whether SSL redirect is enabled. Valid values:
     *
     *   true: SSL redirect is enabled.
     *   false: SSL redirect is disabled.
     *
     * @example true
     *
     * @var bool
     */
    public $sslRedirect;
    protected $_name = [
        'albId'             => 'AlbId',
        'annotations'       => 'Annotations',
        'creationTime'      => 'CreationTime',
        'dashboardUrl'      => 'DashboardUrl',
        'endpoint'          => 'Endpoint',
        'ingressType'       => 'IngressType',
        'labels'            => 'Labels',
        'mseGatewayId'      => 'MseGatewayId',
        'mseGatewayName'    => 'MseGatewayName',
        'name'              => 'Name',
        'namespace'         => 'Namespace',
        'officalBasicUrl'   => 'OfficalBasicUrl',
        'officalRequestUrl' => 'OfficalRequestUrl',
        'rules'             => 'Rules',
        'sslRedirect'       => 'SslRedirect',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->albId) {
            $res['AlbId'] = $this->albId;
        }
        if (null !== $this->annotations) {
            $res['Annotations'] = $this->annotations;
        }
        if (null !== $this->creationTime) {
            $res['CreationTime'] = $this->creationTime;
        }
        if (null !== $this->dashboardUrl) {
            $res['DashboardUrl'] = $this->dashboardUrl;
        }
        if (null !== $this->endpoint) {
            $res['Endpoint'] = $this->endpoint;
        }
        if (null !== $this->ingressType) {
            $res['IngressType'] = $this->ingressType;
        }
        if (null !== $this->labels) {
            $res['Labels'] = $this->labels;
        }
        if (null !== $this->mseGatewayId) {
            $res['MseGatewayId'] = $this->mseGatewayId;
        }
        if (null !== $this->mseGatewayName) {
            $res['MseGatewayName'] = $this->mseGatewayName;
        }
        if (null !== $this->name) {
            $res['Name'] = $this->name;
        }
        if (null !== $this->namespace) {
            $res['Namespace'] = $this->namespace;
        }
        if (null !== $this->officalBasicUrl) {
            $res['OfficalBasicUrl'] = $this->officalBasicUrl;
        }
        if (null !== $this->officalRequestUrl) {
            $res['OfficalRequestUrl'] = $this->officalRequestUrl;
        }
        if (null !== $this->rules) {
            $res['Rules'] = [];
            if (null !== $this->rules && \is_array($this->rules)) {
                $n = 0;
                foreach ($this->rules as $item) {
                    $res['Rules'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sslRedirect) {
            $res['SslRedirect'] = $this->sslRedirect;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ingressConfs
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['AlbId'])) {
            $model->albId = $map['AlbId'];
        }
        if (isset($map['Annotations'])) {
            $model->annotations = $map['Annotations'];
        }
        if (isset($map['CreationTime'])) {
            $model->creationTime = $map['CreationTime'];
        }
        if (isset($map['DashboardUrl'])) {
            $model->dashboardUrl = $map['DashboardUrl'];
        }
        if (isset($map['Endpoint'])) {
            $model->endpoint = $map['Endpoint'];
        }
        if (isset($map['IngressType'])) {
            $model->ingressType = $map['IngressType'];
        }
        if (isset($map['Labels'])) {
            $model->labels = $map['Labels'];
        }
        if (isset($map['MseGatewayId'])) {
            $model->mseGatewayId = $map['MseGatewayId'];
        }
        if (isset($map['MseGatewayName'])) {
            $model->mseGatewayName = $map['MseGatewayName'];
        }
        if (isset($map['Name'])) {
            $model->name = $map['Name'];
        }
        if (isset($map['Namespace'])) {
            $model->namespace = $map['Namespace'];
        }
        if (isset($map['OfficalBasicUrl'])) {
            $model->officalBasicUrl = $map['OfficalBasicUrl'];
        }
        if (isset($map['OfficalRequestUrl'])) {
            $model->officalRequestUrl = $map['OfficalRequestUrl'];
        }
        if (isset($map['Rules'])) {
            if (!empty($map['Rules'])) {
                $model->rules = [];
                $n            = 0;
                foreach ($map['Rules'] as $item) {
                    $model->rules[$n++] = null !== $item ? rules::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['SslRedirect'])) {
            $model->sslRedirect = $map['SslRedirect'];
        }

        return $model;
    }
}
