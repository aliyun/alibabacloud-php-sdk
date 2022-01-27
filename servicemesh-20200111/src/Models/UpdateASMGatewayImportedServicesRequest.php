<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class UpdateASMGatewayImportedServicesRequest extends Model
{
    /**
     * @var string
     */
    public $ASMGatewayName;

    /**
     * @var string
     */
    public $serviceMeshId;

    /**
     * @var string
     */
    public $serviceNames;

    /**
     * @var string
     */
    public $serviceNamespace;
    protected $_name = [
        'ASMGatewayName'   => 'ASMGatewayName',
        'serviceMeshId'    => 'ServiceMeshId',
        'serviceNames'     => 'ServiceNames',
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
        if (null !== $this->serviceNames) {
            $res['ServiceNames'] = $this->serviceNames;
        }
        if (null !== $this->serviceNamespace) {
            $res['ServiceNamespace'] = $this->serviceNamespace;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateASMGatewayImportedServicesRequest
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
        if (isset($map['ServiceNames'])) {
            $model->serviceNames = $map['ServiceNames'];
        }
        if (isset($map['ServiceNamespace'])) {
            $model->serviceNamespace = $map['ServiceNamespace'];
        }

        return $model;
    }
}
