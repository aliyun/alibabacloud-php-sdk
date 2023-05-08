<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class DescribeASMGatewayImportedServicesRequest extends Model
{
    /**
     * @description The name of the ASM gateway.
     *
     * @example ingressgateway
     *
     * @var string
     */
    public $ASMGatewayName;

    /**
     * @description The ID of the ASM instance.
     *
     * @example c08ba3fd1e6484b0f8cc1ad8fe10d****
     *
     * @var string
     */
    public $serviceMeshId;

    /**
     * @description The namespace in which the service resides.
     *
     * @example default
     *
     * @var string
     */
    public $serviceNamespace;
    protected $_name = [
        'ASMGatewayName'   => 'ASMGatewayName',
        'serviceMeshId'    => 'ServiceMeshId',
        'serviceNamespace' => 'ServiceNamespace',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->ASMGatewayName) {
            $res['ASMGatewayName'] = $this->ASMGatewayName;
        }
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }
        if (null !== $this->serviceNamespace) {
            $res['ServiceNamespace'] = $this->serviceNamespace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return DescribeASMGatewayImportedServicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['ASMGatewayName'])) {
            $model->ASMGatewayName = $map['ASMGatewayName'];
        }
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }
        if (isset($map['ServiceNamespace'])) {
            $model->serviceNamespace = $map['ServiceNamespace'];
        }

        return $model;
    }
}
