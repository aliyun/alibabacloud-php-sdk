<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class CreateSwimLaneGroupRequest extends Model
{
    /**
     * @var string
     */
    public $groupName;

    /**
     * @var string
     */
    public $ingressGatewayName;

    /**
     * @var string
     */
    public $ingressType;

    /**
     * @var string
     */
    public $serviceMeshId;

    /**
     * @var string
     */
    public $servicesList;
    protected $_name = [
        'groupName'          => 'GroupName',
        'ingressGatewayName' => 'IngressGatewayName',
        'ingressType'        => 'IngressType',
        'serviceMeshId'      => 'ServiceMeshId',
        'servicesList'       => 'ServicesList',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->groupName) {
            $res['GroupName'] = $this->groupName;
        }
        if (null !== $this->ingressGatewayName) {
            $res['IngressGatewayName'] = $this->ingressGatewayName;
        }
        if (null !== $this->ingressType) {
            $res['IngressType'] = $this->ingressType;
        }
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }
        if (null !== $this->servicesList) {
            $res['ServicesList'] = $this->servicesList;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateSwimLaneGroupRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['GroupName'])) {
            $model->groupName = $map['GroupName'];
        }
        if (isset($map['IngressGatewayName'])) {
            $model->ingressGatewayName = $map['IngressGatewayName'];
        }
        if (isset($map['IngressType'])) {
            $model->ingressType = $map['IngressType'];
        }
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }
        if (isset($map['ServicesList'])) {
            $model->servicesList = $map['ServicesList'];
        }

        return $model;
    }
}
