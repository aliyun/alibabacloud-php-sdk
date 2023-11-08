<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class UpdateASMGatewayRequest extends Model
{
    /**
     * @description The new YAML content of the ASM gateway.
     *
     * @example {"apiVersion":"istio.alibabacloud.com/v1beta1","kind":"IstioGateway","metadata":{"name":"ingressgateway","namespace":"istio-system"},"spec":{"gatewayType":"ingress","clusterIds":["xxxxx"],"ports":[{"name":"http-0","port":80,"targetPort":80,"protocol":"TCP"},{"name":"https-1","port":443,"targetPort":443,"protocol":"TCP"}],"serviceAnnotations":{"service.beta.kubernetes.io/alicloud-loadbalancer-address-type":"internet","service.beta.kubernetes.io/alibaba-cloud-loadbalancer-spec":"slb.s1.small"},"replicaCount":2,"resources":{"limits":{"cpu":"2","memory":"4G"},"requests":{"cpu":"200m","memory":"256Mi"}},"serviceType":"LoadBalancer","maxReplicas":2,"minReplicas":2}}
     *
     * @var string
     */
    public $body;

    /**
     * @description The name of the ASM gateway.
     *
     * @example ingressgateway
     *
     * @var string
     */
    public $istioGatewayName;

    /**
     * @description The ASM instance ID.
     *
     * @example cb8963379255149cb98c8686f274x****
     *
     * @var string
     */
    public $serviceMeshId;
    protected $_name = [
        'body'             => 'Body',
        'istioGatewayName' => 'IstioGatewayName',
        'serviceMeshId'    => 'ServiceMeshId',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->body) {
            $res['Body'] = $this->body;
        }
        if (null !== $this->istioGatewayName) {
            $res['IstioGatewayName'] = $this->istioGatewayName;
        }
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateASMGatewayRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Body'])) {
            $model->body = $map['Body'];
        }
        if (isset($map['IstioGatewayName'])) {
            $model->istioGatewayName = $map['IstioGatewayName'];
        }
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }

        return $model;
    }
}
