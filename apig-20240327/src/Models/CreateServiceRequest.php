<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\APIG\V20240327\Models;

use AlibabaCloud\SDK\APIG\V20240327\Models\CreateServiceRequest\serviceConfigs;
use AlibabaCloud\Tea\Model;

class CreateServiceRequest extends Model
{
    /**
     * @description The gateway instance ID.
     *
     * @example gw-cq7l5s5lhtg***
     *
     * @var string
     */
    public $gatewayId;

    /**
     * @description The resource group ID.
     *
     * @example rg-xxx
     *
     * @var string
     */
    public $resourceGroupId;

    /**
     * @description The list of service configurations.
     *
     * @var serviceConfigs[]
     */
    public $serviceConfigs;

    /**
     * @description The service source. Valid values:
     *
     *   MSE_NACOS: a service in an MSE Nacos instance
     *   K8S: a service in a Kubernetes (K8s) cluster in Container Service for Kubernetes (ACK)
     *   VIP: a fixed IP address
     *   DNS: a Domain Name System (DNS) domain name
     *   FC3: a service in Function Compute
     *   SAE_K8S_SERVICE: a service in a K8s cluster in Serverless App Engine (SAE)
     *
     * Enumerated values:
     *
     *   SAE_K8S_SERVICE
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
    protected $_name = [
        'gatewayId' => 'gatewayId',
        'resourceGroupId' => 'resourceGroupId',
        'serviceConfigs' => 'serviceConfigs',
        'sourceType' => 'sourceType',
    ];

    public function validate() {}

    public function toMap()
    {
        $res = [];
        if (null !== $this->gatewayId) {
            $res['gatewayId'] = $this->gatewayId;
        }
        if (null !== $this->resourceGroupId) {
            $res['resourceGroupId'] = $this->resourceGroupId;
        }
        if (null !== $this->serviceConfigs) {
            $res['serviceConfigs'] = [];
            if (null !== $this->serviceConfigs && \is_array($this->serviceConfigs)) {
                $n = 0;
                foreach ($this->serviceConfigs as $item) {
                    $res['serviceConfigs'][$n++] = null !== $item ? $item->toMap() : $item;
                }
            }
        }
        if (null !== $this->sourceType) {
            $res['sourceType'] = $this->sourceType;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return CreateServiceRequest
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['gatewayId'])) {
            $model->gatewayId = $map['gatewayId'];
        }
        if (isset($map['resourceGroupId'])) {
            $model->resourceGroupId = $map['resourceGroupId'];
        }
        if (isset($map['serviceConfigs'])) {
            if (!empty($map['serviceConfigs'])) {
                $model->serviceConfigs = [];
                $n = 0;
                foreach ($map['serviceConfigs'] as $item) {
                    $model->serviceConfigs[$n++] = null !== $item ? serviceConfigs::fromMap($item) : $item;
                }
            }
        }
        if (isset($map['sourceType'])) {
            $model->sourceType = $map['sourceType'];
        }

        return $model;
    }
}
