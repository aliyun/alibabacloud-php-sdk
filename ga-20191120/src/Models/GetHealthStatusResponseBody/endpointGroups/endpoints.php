<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\Ga\V20191120\Models\GetHealthStatusResponseBody\endpointGroups;

use AlibabaCloud\Tea\Model;

class endpoints extends Model
{
    /**
     * @description The IP address of the endpoint.
     *
     * @example 47.0.XX.XX
     *
     * @var string
     */
    public $address;

    /**
     * @description The ID of the endpoint.
     *
     * @example ep-hp33b2e43fays7s8****
     *
     * @var string
     */
    public $endpointId;

    /**
     * @description The health check details of the endpoint.
     *
     * >  This parameter is unavailable.
     * @example null
     *
     * @var string
     */
    public $healthDetail;

    /**
     * @description The health status of the endpoint. Valid values:
     *
     *   **init:** The endpoint is being initialized.
     *   **normal:** The endpoint is normal.
     *   **abnormal:** The endpoint is abnormal.
     *
     * @example normal
     *
     * @var string
     */
    public $healthStatus;

    /**
     * @description The port that is used to connect to the endpoint.
     *
     * @example 80
     *
     * @var int
     */
    public $port;

    /**
     * @description The type of the endpoint. Valid values:
     *
     *   **Domain:** a custom domain name.
     *   **Ip:** a custom IP address.
     *   **PublicIp:** a public IP address provided by Alibaba Cloud.
     *   **ECS:** an Elastic Compute Service (ECS) instance.
     *   **SLB:** a Classic Load Balancer (CLB) instance.
     *   **ALB:** an Application Load Balancer (ALB) instance.
     *   **OSS:** an Object Storage Service (OSS) bucket.
     *   **ENI:** an elastic network interface (ENI).
     *   **NLB:** a Network Load Balancer (NLB) instance.
     *
     * @example Ip
     *
     * @var string
     */
    public $type;
    protected $_name = [
        'address'      => 'Address',
        'endpointId'   => 'EndpointId',
        'healthDetail' => 'HealthDetail',
        'healthStatus' => 'HealthStatus',
        'port'         => 'Port',
        'type'         => 'Type',
    ];

    public function validate()
    {
    }

    public function toMap()
    {
        $res = [];
        if (null !== $this->address) {
            $res['Address'] = $this->address;
        }
        if (null !== $this->endpointId) {
            $res['EndpointId'] = $this->endpointId;
        }
        if (null !== $this->healthDetail) {
            $res['HealthDetail'] = $this->healthDetail;
        }
        if (null !== $this->healthStatus) {
            $res['HealthStatus'] = $this->healthStatus;
        }
        if (null !== $this->port) {
            $res['Port'] = $this->port;
        }
        if (null !== $this->type) {
            $res['Type'] = $this->type;
        }

        return $res;
    }

    /**
     * @param array $map
     *
     * @return endpoints
     */
    public static function fromMap($map = [])
    {
        $model = new self();
        if (isset($map['Address'])) {
            $model->address = $map['Address'];
        }
        if (isset($map['EndpointId'])) {
            $model->endpointId = $map['EndpointId'];
        }
        if (isset($map['HealthDetail'])) {
            $model->healthDetail = $map['HealthDetail'];
        }
        if (isset($map['HealthStatus'])) {
            $model->healthStatus = $map['HealthStatus'];
        }
        if (isset($map['Port'])) {
            $model->port = $map['Port'];
        }
        if (isset($map['Type'])) {
            $model->type = $map['Type'];
        }

        return $model;
    }
}
