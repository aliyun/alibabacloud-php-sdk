<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\Tea\Model;

class ListServicesRequest extends Model
{
    /**
     * @description The ID of the Cloud-native API Gateway instance.
     *
     * @example gw-cpv4sqdl*****
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @description The service name.
     *
     * @example user-service
     *
     * @var string
     */
    public $name;

    /**
     * @description The page number to return. Pages start from page 1. Default value: 1.
     *
     * @example 1
     *
     * @var int
     */
    public $pageNumber;

    /**
     * @description The number of entries per page. Valid values: 1 to 100. Default value: 10.
     *
     * @example 10
     *
     * @var int
     */
    public $pageSize;

    /**
     * @description The resource group ID.
     *
     * @example rg-acfmxxe5rc6cvla
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The service source. Valid values:
     *
     *   MSE_NACOS: a service in an MSE Nacos instance
     *   K8S: a service in a Kubernetes (K8s) cluster in Container Service for Kubernetes (ACK)
     *   FC3: a service in Function Compute
     *   VIP: a fixed address
     *   DNS: a domain name
     *
     * Enumerated values:
     *
     *   K8S
     *   FC3
     *   DNS
     *   VIP
     *   MSE_NACOS
     *
     * @example MSE_NACOS
     *
     * @var string
     */
    public $sourceType;

    /**
     * @var string
     */
    public $sourceTypes;
    protected $_name = [
        'gatewayId' => 'gatewayId',
        'name' => 'name',
        'pageNumber' => 'pageNumber',
        'pageSize' => 'pageSize',
        'resourceGroupId' => 'resourceGroupId',
        'sourceType' => 'sourceType',
        'sourceTypes' => 'sourceTypes',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }
        if (null !== $this->name) {
            $res['name'] = $this->name;
        }
        if (null !== $this->pageNumber) {
            $res['pageNumber'] = $this->pageNumber;
        }
        if (null !== $this->pageSize) {
            $res['pageSize'] = $this->pageSize;
        }
        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
        }
        if (null !== $this->sourceTypes) {
            $res['sourceTypes'] = $this->sourceTypes;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return ListServicesRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }
        if (isset($map['name'])) {
            $model->name = $map['name'];
        }
        if (isset($map['pageNumber'])) {
            $model->pageNumber = $map['pageNumber'];
        }
        if (isset($map['pageSize'])) {
            $model->pageSize = $map['pageSize'];
        }
        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }
        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }
        if (isset($map['sourceTypes'])) {
            $model->sourceTypes = $map['sourceTypes'];
        }

        return $model;
    }
}
