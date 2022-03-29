<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Servicemesh\V20200111\Models;

use AlibabaCloud\Tea\Model;

class UpdateIstioRouteAdditionalStatusRequest extends Model
{
    /**
     * @var string
     */
    public $description;

    /**
     * @var string
     */
    public $istioGatewayName;

    /**
     * @var int
     */
    public $priority;

    /**
     * @var string
     */
    public $routeName;

    /**
     * @var string
     */
    public $serviceMeshId;

    /**
     * @var int
     */
    public $status;
    protected $_name = [
        'description'      => 'Description',
        'istioGatewayName' => 'IstioGatewayName',
        'priority'         => 'Priority',
        'routeName'        => 'RouteName',
        'serviceMeshId'    => 'ServiceMeshId',
        'status'           => 'Status',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->description) {
            $res['Description'] = $this->description;
        }
        if (null !== $this->istioGatewayName) {
            $res['IstioGatewayName'] = $this->istioGatewayName;
        }
        if (null !== $this->priority) {
            $res['Priority'] = $this->priority;
        }
        if (null !== $this->routeName) {
            $res['RouteName'] = $this->routeName;
        }
        if (null !== $this->serviceMeshId) {
            $res['ServiceMeshId'] = $this->serviceMeshId;
        }
        if (null !== $this->status) {
            $res['Status'] = $this->status;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return UpdateIstioRouteAdditionalStatusRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Description'])) {
            $model->description = $map['Description'];
        }
        if (isset($map['IstioGatewayName'])) {
            $model->istioGatewayName = $map['IstioGatewayName'];
        }
        if (isset($map['Priority'])) {
            $model->priority = $map['Priority'];
        }
        if (isset($map['RouteName'])) {
            $model->routeName = $map['RouteName'];
        }
        if (isset($map['ServiceMeshId'])) {
            $model->serviceMeshId = $map['ServiceMeshId'];
        }
        if (isset($map['Status'])) {
            $model->status = $map['Status'];
        }

        return $model;
    }
}
